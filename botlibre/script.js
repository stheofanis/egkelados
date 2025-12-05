const APPLICATION_ID = '8674165699258331009';  // Replace with your Bot Libre App ID
const INSTANCE_ID = '59354330';        // Replace with your Bot Libre bot ID

const terminal = document.getElementById('terminal');

createInputLine();

function createInputLine() {
  const inputLine = document.createElement('div');
  inputLine.className = 'input-line';

  const prompt = document.createElement('span');
  prompt.className = 'prompt';
  prompt.textContent = '> ';

  const input = document.createElement('input');
  input.className = 'user-input';
  input.type = 'text';
  input.autofocus = true;

  inputLine.appendChild(prompt);
  inputLine.appendChild(input);
  terminal.appendChild(inputLine);
  input.focus();

  input.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      const message = input.value.trim();
      if (message === '') return;

      // Replace input with static "You" message, with bold prefix
      const youLine = document.createElement('div');
      youLine.innerHTML = `> <strong>You:</strong> ${message}`;
      terminal.replaceChild(youLine, inputLine);

      sendToBotLibre(message, createInputLine);
    }
  });

  scrollToBottom();
}

function sendToBotLibre(message, callback) {
  fetch('https://www.botlibre.com/rest/json/chat', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      application: APPLICATION_ID,
      instance: INSTANCE_ID,
      message: message
    })
  })
    .then(res => res.json())
    .then(data => {
      const reply = data.message || '[No response]';
      simulateTyping(`Egkelados: ${reply}`, callback);
    })
    .catch(err => {
      console.error(err);
      simulateTyping('Egkelados: [ERROR] Could not connect.', callback);
    });
}

function simulateTyping(text, callback, speed = 20) {
  // Separate prefix and message (assuming format "Egkelados: message")
  const colonIndex = text.indexOf(':');
  const prefix = text.slice(0, colonIndex + 1); // "Egkelados:"
  const messageText = text.slice(colonIndex + 1); // rest of message

  const botLine = document.createElement('div');
  const strongPrefix = document.createElement('strong');
  strongPrefix.textContent = prefix;
  botLine.appendChild(strongPrefix);
  terminal.appendChild(botLine);

  let i = 0;
  function typeChar() {
    if (i < messageText.length) {
      botLine.appendChild(document.createTextNode(messageText.charAt(i)));
      i++;
      scrollToBottom();
      setTimeout(typeChar, speed);
    } else {
      // After bot message, add a blank line
      terminal.appendChild(document.createElement('br'));
      if (callback) callback();
    }
  }
  typeChar();
}


function scrollToBottom() {
  terminal.scrollTop = terminal.scrollHeight;
}

function updateHeader() {
  const header = document.getElementById('header');

  function getFormattedDateTime() {
    const now = new Date();

    // Format date like YYYY-MM-DD
    const year = now.getUTCFullYear();
    const month = String(now.getUTCMonth() + 1).padStart(2, '0');
    const day = String(now.getUTCDate()).padStart(2, '0');

    // Format time like HH:MM:SS
    const hours = String(now.getUTCHours()).padStart(2, '0');
    const minutes = String(now.getUTCMinutes()).padStart(2, '0');
    const seconds = String(now.getUTCSeconds()).padStart(2, '0');

    return `${year}-${month}-${day} ${hours}:${minutes}:${seconds} GMT`;
  }

  function refresh() {
    header.textContent = `Egkelados 0.9.5-beta ${getFormattedDateTime()}, HTML/PHP`;
  }

  refresh();
  // Update every second
  setInterval(refresh, 1000);
}

updateHeader();

