const terminal = document.getElementById("terminal");

// Display version/info line at top
const versionLine = document.createElement("div");
versionLine.style.fontWeight = "bold";
versionLine.textContent = "Egkelados 0.9.5-beta 2025-12-05 22:01:47 GMT, HTML/JS";
terminal.appendChild(versionLine);

// Add a blank line after version
const blankLine = document.createElement("div");
blankLine.innerHTML = "&nbsp;";
terminal.appendChild(blankLine);

// Chat history for API context
const chatHistory = [];

// API config
const API_KEY = "<API_KEY>";
const API_URL = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=${API_KEY}`;

// Create input line
const createInputLine = () => {
  const line = document.createElement("div");
  line.classList.add("input-line");

  const prompt = document.createElement("span");
  prompt.classList.add("prompt");
  prompt.innerHTML = "&gt; "; // > 

  const input = document.createElement("input");
  input.classList.add("user-input");
  input.type = "text";
  input.autocomplete = "off";

  line.appendChild(prompt);
  line.appendChild(input);
  terminal.appendChild(line);
  input.focus();

  input.addEventListener("keydown", async (e) => {
    if (e.key === "Enter" && input.value.trim() !== "") {
      const message = input.value.trim();
      input.disabled = true;
      line.remove(); // remove input line

      addUserMessage(message);

      const botLine = addBotMessage("..."); // thinking indicator
      terminal.scrollTo({ top: terminal.scrollHeight, behavior: "smooth" });

      const botResponse = await generateBotResponse(message);
      botLine.querySelector(".message-text").textContent = botResponse;

      // Add new input line
      createInputLine();

      // Add empty line after input for terminal feel
      const newBlank = document.createElement("div");
      newBlank.innerHTML = "&nbsp;";
      terminal.appendChild(newBlank);

      terminal.scrollTo({ top: terminal.scrollHeight, behavior: "smooth" });
    }
  });
};

// Add user message
const addUserMessage = (text) => {
  const div = document.createElement("div");
  div.style.display = "flex";
  div.innerHTML = `> <strong>You:</strong> ${text}`;
  terminal.appendChild(div);
  terminal.scrollTo({ top: terminal.scrollHeight, behavior: "smooth" });
};

// Add bot message
const addBotMessage = (text) => {
  const div = document.createElement("div");
  div.style.display = "flex";
  div.innerHTML = `<strong>Egkelados:</strong> <span class="message-text">${text}</span>`;
  terminal.appendChild(div);
  terminal.scrollTo({ top: terminal.scrollHeight, behavior: "smooth" });
  return div;
};

// Generate bot response
const generateBotResponse = async (userMessage) => {
  chatHistory.push({ role: "user", parts: [{ text: userMessage }] });

  const requestOptions = {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ contents: chatHistory }),
  };

  try {
    const response = await fetch(API_URL, requestOptions);
    const data = await response.json();
    if (!response.ok) throw new Error(data.error?.message || "API Error");

    const botText = data.candidates[0].content.parts[0].text
      .replace(/\*\*(.*?)\*\*/g, "$1")
      .trim();

    chatHistory.push({ role: "model", parts: [{ text: botText }] });
    return botText;
  } catch (err) {
    console.error(err);
    return `Error: ${err.message}`;
  }
};

// Start first input line
createInputLine();

// Add blank line after initial input for proper terminal spacing
const initialBlank = document.createElement("div");
initialBlank.innerHTML = "&nbsp;";
terminal.appendChild(initialBlank);
