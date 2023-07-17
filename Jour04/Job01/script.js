const button = document.getElementById("button");
const resultDiv = document.getElementById("result");

button.addEventListener("click", () => {
  fetch("expression.txt")
    .then(response => response.text())
    .then(data => {
      const paragraph = document.createElement("p");
      paragraph.textContent = data;
      resultDiv.appendChild(paragraph);
    })
    .catch(error => console.log(error));
});
