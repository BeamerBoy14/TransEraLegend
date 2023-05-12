

//=============================================================================================================================
function zoomImage(img) {
  var container = img.parentNode;
  var zoomedImg = document.createElement("img");
  zoomedImg.setAttribute("src", img.src);
  zoomedImg.setAttribute("class", "zoomed-image");
  container.appendChild(zoomedImg);
  var closeButton = document.createElement("span");
  closeButton.innerHTML = "&times;";
  closeButton.setAttribute("class", "close-button");
  closeButton.setAttribute("onclick", "closeZoomedImage()");
  container.appendChild(closeButton);
}

function closeZoomedImage() {
  var zoomedImg = document.querySelector(".zoomed-image");
  zoomedImg.parentNode.removeChild(zoomedImg);
  var closeButton = document.querySelector(".close-button");
  closeButton.parentNode.removeChild(closeButton);
}

