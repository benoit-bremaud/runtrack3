<!DOCTYPE html>
<html>
<head>
  <title>JSON Value Key</title>
  <script src="script.js"></script>
</head>
<body>
  <h1>JSON Value Key</h1>
  <p id="output"></p>
  <script>
    const jsonString = `{
      "name": "La Plateforme_",
      "address": "8 rue d'hozier",
      "city": "Marseille",
      "nb_staff": "11",
      "creation": "2019"
    }`;

    const key = "city";
    const value = jsonValueKey(jsonString, key);
    document.getElementById("output").textContent = value;
  </script>
</body>
</html>
