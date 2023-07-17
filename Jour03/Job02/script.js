document.addEventListener("DOMContentLoaded", function() {
    let dragImage = null;
    let rainbowImages = Array.from(document.getElementsByClassName('drag-image'));
    let shuffleButton = document.getElementById('shuffle-button');
    let images = document.getElementsByClassName("drag-image");

    shuffleButton.addEventListener('click', function(){
      shuffleArray(rainbowImages);
      updateRainbowContainer();
    });

    function shuffleArray(array) {
      for (var i = array.length - 1; i > 0; i--){
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
      };
    };
    function updateRainbowContainer() {
      var rainbowContainer = document.getElementById('container');
      rainboImages.foreach(function(image) {
        rainbowContainer.appendChild(image);
      });
      
    };
    
    for (var i = 0; i < images.length; i++) {
      images[i].addEventListener("dragstart", function(event) {
        dragImage = event.target;
      });
      images[i].addEventListener("dragover", function(event) {
        event.preventDefault();
      });
      images[i].addEventListener("drop", function(event) {
        event.preventDefault();
        if (dragImage !== null) {
          var tempSrc = dragImage.src;
          var tempId = dragImage.id;
  
          dragImage.src = event.target.src;
          dragImage.id = event.target.id;
  
          event.target.src = tempSrc;
          event.target.id = tempId;
  
          dragImage = null;
        }
      });
    }
});