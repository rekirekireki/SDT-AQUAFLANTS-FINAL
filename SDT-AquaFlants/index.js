// Load the video in the background
var video = document.getElementById("video-bg");
video.onload = function() {
	video.play();
};

// Adjust the height of the overlay to fit the screen
var overlay = document.getElementsByClassName("overlay")[0];
overlay.style.height = window.innerHeight + "px";
window.addEventListener("resize", function() {
	overlay.style.height = window.innerHeight + "px";
});
