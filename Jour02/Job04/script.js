document.addEventListener('keydown', function(event) {
  var keylogger = document.getElementById('keylogger');
  var letter = event.key;

  if (document.activeElement === keylogger) {
      keylogger.value += letter + letter;
  } else if (/^[a-zA-Z]$/.test(letter)) {
      keylogger.value += letter;
  }
});
