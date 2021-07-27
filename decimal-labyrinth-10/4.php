<?php
require "../kybalion/ch.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Decimal Labyrinth</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.3.1/p5.min.js" integrity="sha512-gQVBYBvfC+uyor5Teonjr9nmY1bN+DlOCezkhzg4ShpC5q81ogvFsr5IV4xXAj6HEtG7M1Pb2JCha97tVFItYQ==" crossorigin="anonymous"></script>
  <script src="functions.js"></script>
  <style>
    * { 
      margin: 0; padding: 0; 
      color: white;
    }

    body {
      background-color: black;
      max-width: 100vw; max-height: 100vh;
      overflow: hidden;
    }
    
    @keyframes rotorz {
      0% { transform: rotateZ(0deg); }
      100% { transform: rotateZ(360deg); }
    }

    #space {
      perspective: 250px;

      animation: rotorz 100s linear infinite;
      background: transparent;
      overflow: visible;
      transition: perspective 3s;
      display: flex; align-items: center; justify-content: center;
      height: 100vh;
      overflow: visible;
      /* text-align: center; */
    }
    #room {
      /* width: 1000px; height: 1000px; */
      width: 80vmin; height: 80vmin;
      display: flex; align-items: center; justify-content: center;
      transform-style: preserve-3d;
    }
    .face {
      
      /* width: 900px; height: 900px; */
      height: 180vh; width: 30vmin;
      height: 180vmin; width: 30vmin;

      position: absolute;
      backface-visibility: inherit;
      font-size: 9px;
      overflow-wrap: break-word;
      color: #fff;
      transition: color 900ms, transform 4000ms, background-image 4000ms;
      transform-origin: center center;
      background-image: url('bg-kybalion.png');
      background-size: contain;
      background-repeat: repeat;

      overflow-y: auto;
      overflow: visible;
    }    
    .face span { padding: 0.3em 0; }
    .face:hover {
      color: #0f0;
    }

    /* substitution */
     
    .face:hover {
      background-image: url('high2.png');
    }
   


    /* addition */
    /*  
    .face:hover::after {
      position: absolute; content: "";
      top: 0; bottom: 0; left: 0; right: 0;
      background-image: url('high2.png');
      background-size: contain;
      background-repeat: repeat;
    }
    */




    #face-01 {
      transform: rotateZ(calc(36deg*0)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-02 {
      transform: rotateZ(calc(36deg*1)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-03 {
      transform: rotateZ(calc(36deg*2)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-04 {
      transform: rotateZ(calc(36deg*3)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-05 {
      transform: rotateZ(calc(36deg*4)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-06 {
      transform: rotateZ(calc(36deg*5)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-07 {
      transform: rotateZ(calc(36deg*6)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-08 {
      transform: rotateZ(calc(36deg*7)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-09 {
      transform: rotateZ(calc(36deg*8)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }
    #face-10 {
      transform: rotateZ(calc(36deg*9)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1);
    }






  </style>
  <link rel="author" href="humans.txt">
</head>
<body>
  <div id="space">
    <div id="room" class="transition-all">
      <div class="face" id="face-01"></div>
      <div class="face" id="face-02"></div>
      <div class="face" id="face-03"></div>
      <div class="face" id="face-04"></div>
      <div class="face" id="face-05"></div>
      <div class="face" id="face-06"></div>
      <div class="face" id="face-07"></div>
      <div class="face" id="face-08"></div>
      <div class="face" id="face-09"></div>
      <div class="face" id="face-10"></div>
    </div>
  </div>
<script>

  var persp = 250;
  var perspMin = 2000;
  var perspMax = 2;
  var space = document.getElementById("space");
  var room = document.getElementById("room");
  var w = window.innerWidth;
  var h = window.innerHeight;
  var mouseX = 0;
  var mouseY = 0;

  space.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    var xNorm = apMap(mouseX, 0, w, -1, 1);
    var yNorm = apMap(mouseY, 0, h, 1, -1);


    // var coefX = 130; var coefY = -130;
    var coefX = 10; var coefY = -10;


    var rotY = coefX ? (2 * coefX / w * mouseX - coefX) : 0;
    var rotX = coefY ? (2 * coefY / h * mouseY - coefY) : 0;
    room.style.transform = 'translate3d(0,0,0) '+'rotate3d(1,0,0,'+ rotX+ 'deg) rotate3d(0,1,0,'+rotY+ 'deg) rotate3d(0,0,1,0)';
  });

  function perspIncrease () {
    persp = Math.max(persp / 5, perspMax); 
    space.style.perspective = persp +"px";
  }
  function perspDecrease () {
    persp = Math.min(persp * 5, perspMin); 
    space.style.perspective = persp +"px";
  }
  function perspMinimum () {
    persp = perspMin; 
    space.style.perspective = persp +"px";
  }
  function perspMaximum () {
    persp = perspMax; 
    space.style.perspective = persp +"px";
  }

  var fuckup = false;

  function fuckupToggle () {
    fuckup = !fuckup;
    if (fuckup) {
      document.querySelectorAll(".face").forEach(e => {
        e.style.transform = "rotateZ(calc("+ Math.random()*360 +"deg)) rotateX("+ Math.random()*36 +"deg) translateZ(calc("+ Math.random()*36 +"vmin*1.52)) scaleX(-1)";
      });
    } else {
      document.querySelector("#face-01").style.transform = "rotateZ(calc(36deg*0)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-02").style.transform = "rotateZ(calc(36deg*1)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-03").style.transform = "rotateZ(calc(36deg*2)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-04").style.transform = "rotateZ(calc(36deg*3)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-05").style.transform = "rotateZ(calc(36deg*4)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-06").style.transform = "rotateZ(calc(36deg*5)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-07").style.transform = "rotateZ(calc(36deg*6)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-08").style.transform = "rotateZ(calc(36deg*7)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-09").style.transform = "rotateZ(calc(36deg*8)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
      document.querySelector("#face-10").style.transform = "rotateZ(calc(36deg*9)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(-1)";
    }
  }

  document.addEventListener('keydown', function (e) {
    console.log(e.code, e.key);
    if (e.key === "-") { perspDecrease(); }
    if (e.key === "+") { perspIncrease(); }
    if (e.key === "0") { perspMinimum(); }
    if (e.key === "9") { perspMaximum(); }
    if (e.key === "x") { fuckupToggle(); }
  }
);



</script>
</body>
</html>