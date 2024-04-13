var count = 0;
var button = document.getElementById("my_button");
button.onclick = function () {
  count++;
  if (count % 2 == 0) {
    document.getElementById("demo").innerHTML = "";
  } else {
    var video = document.createElement("video");
    video.width = 320;
    video.height = 240;
    video.src = "js\\drive.mp4";
    video.autoplay = true;
    video.loop = true;
    var demo = document.getElementById("demo");
    demo.innerHTML = "";
    demo.appendChild(video);
  }
}