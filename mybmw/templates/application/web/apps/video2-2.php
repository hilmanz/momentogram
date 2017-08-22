<script type="text/javascript">
var player, iframe;

var $ = document.querySelector.bind(document);

// init player
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '200',
    width: '300',
    videoId: 'dQw4w9WgXcQ',
    events: {
      'onReady': onPlayerReady,
	  'onStateChange': onPlayerStateChange
    }
  });
}

// when ready, wait for clicks
function onPlayerReady(event) {
  var player = event.target;
  iframe = $('#player');
  setupListener(); 
}

function onPlayerStateChange(event) {        
	if(event.data === 0) {          
		//alert('done');
		player.stopVideo();
		exitFullscreen();
	}
}

function showStuff(id) {
    document.getElementById(id).style.display = 'block';
}

function exitFullscreen() {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
  document.getElementById("player").style.display = 'none';
}

function setupListener (){
$('button').addEventListener('click', playFullscreen);
}

function playFullscreen (){
  document.getElementById("player").style.display = 'block';
  player.playVideo();//won't work on mobile
  
  var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
  if (requestFullScreen) {
    requestFullScreen.bind(iframe)();
  }
}
</script>

<style>
html {
  padding: 1em;
}
button {
  width: 200px;
  height: 100px;
  margin-bottom: 1em;
}
</style>

<html>
<head>
<title> Youtube! </title>
</head>
<body>
<h1>One-click play+fullscreen via YouTube API</h1>
Suggested code from this <a href="http://stackoverflow.com/a/20289540/288906">StackOverflow answer</a>

<h2>Instructions</h2>
<ol>
  <li>Click on [play fullscreen]</li>
  <li>Click on the fullscreen button in youtube's player to exit fullscreen</li>
</ol>

<script src="https://www.youtube.com/iframe_api"></script>
<!--button>play fullscreen</button><br-->
<center><a href="javascript:void(0)" onclick="playFullscreen()"><img src="arrow_nav.png"></a></center><br>
<center><div id="player" style="display: none;"></div>
<!--a href="javascript:;" onClick="toggleVideo('hide');">close</a-->
</center>
</body>
</html>