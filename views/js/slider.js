const slideshowImages = document.querySelectorAll(".slideshow-img");

// const nextImageDelay = 3000;
// let currenImageCounter = 0;

// slideshowImages[nextImageDelay].style.display = "block";

// setInterval(nextImage,nextImageDelay);

// function nextImage(){
// 	slideshowImages[currenImageCounter].style.display = "none";
// 	currenImageCounter = (currenImageCounter + 1) % slideshowImages.length;
// 	slideshowImages[currenImageCounter].style.display = "block";
// }

const nextImageDelay = 3000;
let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

// slideshowImages[currentImageCounter].style.display = "block";
slideshowImages[currentImageCounter].style.opacity = 1;

setInterval(nextImage, nextImageDelay);

function nextImage() {
  // slideshowImages[currentImageCounter].style.display = "none";
  slideshowImages[currentImageCounter].style.opacity = 0;

  currentImageCounter = (currentImageCounter+1) % slideshowImages.length;

  // slideshowImages[currentImageCounter].style.display = "block";
  slideshowImages[currentImageCounter].style.opacity = 1;
}