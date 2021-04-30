

//Get write review button
var reviewBtn = document.getElementById('writeReview');

//Get form div
var form = document.getElementById('form');

//Get send button
var send = document.getElementById('send');

//Send event listener
function change(){
    console.log(form);
    form.className = "show";
}

function enlargeMap(){
    map.className = "enlarge";

}

window.onload = function() { // add window.onload here and set it euqal to a function
    // Get the modal
    var enlarge = document.getElementById('mapEnlarge');
  
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var map = document.getElementById('mapContainer');
    map.onclick = function() {
      enlarge.style.display = "block";
    }
  
    // Get the <span> element that closes the modal
    var span = document.getElementsId("close")[0];
  
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  } // close the function
  





    

