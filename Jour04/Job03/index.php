<!DOCTYPE html>
<html>
<head>
  <title>Filter Data</title>
  <script src="script.js" defer></script>
</head>
<body>
  <h1>Filter Data</h1>
  
  <form id="filterForm">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id">
    
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name">
    
    <label for="type">Type:</label>
    <select id="type" name="type">
      <option value="">-- Sélectionner --</option>
      <option value="Grass">Grass</option>
      <option value="Poison">Poison</option>
      <option value="Fire">Fire</option>
      <option value="Water">Water</option>
      <option value="Bug">Bug</option>
      <option value="Normal">Normal</option>
      <option value="Flying">Flying</option>
    </select>
    
    <input type="button" value="Filtrer" onclick="filterData()">
  </form>
  
  <div id="result"></div>
  
  <script>
    function filterData() {
      const form = document.getElementById("filterForm");
      const id = form.id.value.trim();
      const name = form.name.value.trim();
      const type = form.type.value.trim();
      
      fetch("resources/pokemon.json")
        .then(response => response.json())
        .then(data => {
          const filteredData = data.filter(item => {
            if (id && item.id.toString() !== id) return false;
            if (name && !item.name.english.toLowerCase().includes(name.toLowerCase())) return false;
            if (type && !item.type.includes(type)) return false;
            return true;
          });
          
          displayData(filteredData);
        })
        .catch(error => console.log(error));
    }
    
    function displayData(data) {
      const resultDiv = document.getElementById("result");
      resultDiv.innerHTML = "";
      
      if (data.length === 0) {
        resultDiv.textContent = "Aucun résultat trouvé.";
      } else {
        data.forEach(item => {
          const div = document.createElement("div");
          div.textContent = `ID: ${item.id}, Nom: ${item.name.english}, Type: ${item.type.join(", ")}`;
          resultDiv.appendChild(div);
        });
      }
    }
  </script>
</body>
</html>
