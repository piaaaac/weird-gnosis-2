<!DOCTYPE html>
<html>
<head>
  <title>Zach Blas</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <style type="text/css">
    * { 
      margin: 0; padding: 0; 
      font-family: menlo, monospace;
    }
    body {
      background-color: black;
    }
    #videos {
      text-align: center;
    }
    #videos div {
      display: inline-block !important;
      margin: 1px 5px;
    }
  </style>
</head>
<body>

  <p class="my-5 text-center">
    <a href="#" onclick="togglePlay();">play/pause</a>
  </p>
  <div id="videos"></div>

<script src="https://player.vimeo.com/api/player.js"></script>
<script>
var state = {playing: false};
var options = [
  { id: 350993592, height: 220, loop: true, title: false, controls: false },
  { id: 364487117, height: 220, loop: true, title: false, controls: false },
  { id: 161995736, height: 220, loop: true, title: false, controls: false },
  { id: 336653396, height: 220, loop: true, title: false, controls: false },
  { id: 304025355, height: 220, loop: true, title: false, controls: false },
  { id: 300033227, height: 220, loop: true, title: false, controls: false },
];

var players = [];
options.forEach(function (opt, i) {
  var vidCont = document.createElement("div");
  document.getElementById("videos").appendChild(vidCont)
  players.push(new Vimeo.Player(vidCont, opt));
});

players.forEach(function (p, i) {
  p.setVolume(0);
  p.on('play', function() {
    console.log('played video '+ i); 
    playAll();
  });
  p.on('pause', function() {
    console.log('paused video '+ i); 
    pauseAll();
  });
});

function togglePlay () {
  state.playing = !state.playing;
  if (state.playing) {
    playAll();
  } else {
    pauseAll();
  }
}
function playAll () {
  players.forEach(function (p, i) { p.play(); });
}
function pauseAll () {
  players.forEach(function (p, i) { p.pause(); });
}

</script>
</body>
</html>