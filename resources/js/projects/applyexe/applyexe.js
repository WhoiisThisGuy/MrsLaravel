const textEl = document.getElementById('text');
const cursorEl = document.getElementById('cursor');

document.addEventListener('keydown', (event) => {
    // Append the typed character to the text
    if (event.key.length === 1) { // Filter for printable characters
        textEl.textContent += event.key;
    } else if (event.key === "Backspace") {
        // Handle backspace
        textEl.textContent = textEl.textContent.slice(0, -1);
    }
    else if (event.key === "Enter") {
      // Handle Enter
      textEl.textContent = textEl.textContent.slice(0, -1);
      if(textEl === "Apply.exe")
      {
        
      }
  }
});