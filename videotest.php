    <iframe id="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/VNGFep6rncY?enablejsapi=1&
    autoplay=1
    &disablekb=1
    &enablejsapi=1
    &loop=1
    &controls=0
    &mute=1" frameborder="0" enablejsapi="1" allowfullscreen></iframe>
<div id="mute">
</div>
<p>
Press red square to mute/unmute
</p>

<script>
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player('youtube-video', {
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady() {
  console.log("hey Im ready");
    player.playVideo();
  //do whatever you want here. Like, player.playVideo();

}

function onPlayerStateChange() {
  console.log("my state changed");
}

document.getElementById("mute").addEventListener('click', function(event) {
  console.log(player);

  if (player.isMuted()) {
    player.unMute();
  } else {
    player.mute();
  }
});

</script>
    

    
    <style>
    #mute {
  width: 50px;
  height: 50px;
  background-color: red;
}
    </style>