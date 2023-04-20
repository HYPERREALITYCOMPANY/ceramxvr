var video = document.getElementById("testVideo");
var playBtn = document.getElementById("playBtn");
var pauseBtn = document.getElementById("pauseBtn");

playBtn.onclick = function() {
  video.play();
}

pauseBtn.onclick = function() {
  video.pause();
}
