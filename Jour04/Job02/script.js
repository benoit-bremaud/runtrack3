function jsonValueKey(jsonString, key) {
    try {
        const data = JSON.parse(jsonString);
        return data[key];
    } catch (error) {
        console.error("Invalid JSON string:", error);
        return null;
    }
}
  