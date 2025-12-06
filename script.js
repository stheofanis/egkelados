const terminal = document.getElementById("terminal");
const header = document.getElementById("header");

// --- Header with timestamp ---
function updateHeader() {
  const now = new Date();
  const year = now.getUTCFullYear();
  const month = String(now.getUTCMonth() + 1).padStart(2, "0");
  const day = String(now.getUTCDate()).padStart(2, "0");
  const hours = String(now.getUTCHours()).padStart(2, "0");
  const minutes = String(now.getUTCMinutes()).padStart(2, "0");
  const seconds = String(now.getUTCSeconds()).padStart(2, "0");
  header.textContent = `Egkelados 0.9.5-beta ${year}-${month}-${day} ${hours}:${minutes}:${seconds} GMT, HTML/JS`;
}
updateHeader();
setInterval(updateHeader, 1000);

// --- Chat history ---
const chatHistory = [];

// --- Gemini API config ---
const value = "AIzaSyB6lVjV3AfXraQNWEMKWqvg-WXijlrtJ-Q";
const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=${value}`;

// --- Input line ---
function createInputLine() {
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

      const botResponse = await generateBotResponse(message);
      botLine.querySelector(".message-text").textContent = botResponse;

      addBlankLine(); // after bot response
      createInputLine();

      window.scrollTo(0, document.body.scrollHeight); // scroll page to bottom
    }
  });
}

// --- Add user message ---
function addUserMessage(text) {
  const div = document.createElement("div");
  div.innerHTML = `> <strong>You:</strong> ${text}`;
  terminal.appendChild(div);
}

// --- Add bot message ---
function addBotMessage(text) {
  const div = document.createElement("div");
  div.innerHTML = `<strong>Egkelados:</strong> <span class="message-text">${text}</span>`;
  terminal.appendChild(div);
  return div;
}

// --- Add blank line after bot response ---
function addBlankLine() {
  const div = document.createElement("div");
  div.innerHTML = "&nbsp;";
  terminal.appendChild(div);
}

// --- Call Gemini API ---
async function generateBotResponse(userMessage) {
  chatHistory.push({ role: "user", parts: [{ text: userMessage }] });

  const requestOptions = {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ contents: chatHistory }),
  };

  try {
    const response = await fetch(url, requestOptions);
    const data = await response.json();

    if (!response.ok) throw new Error(data.error?.message || "API Error");

    const botText = data.candidates[0].content.parts[0].text
      .replace(/\*\*(.*?)\*\*/g, "$1")
      .trim();

    chatHistory.push({ role: "model", parts: [{ text: botText }] });
    return botText;
  } catch (err) {
    console.error(err);
    return `[ERROR] ${err.message}`;
  }
}

// --- Start first input line ---
createInputLine();
