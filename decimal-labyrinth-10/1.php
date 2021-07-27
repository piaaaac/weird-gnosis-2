<?php
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed turpis sed ipsum vehicula bibendum imperdiet in orci. In vel vestibulum nisi. Donec sagittis nunc id erat aliquam blandit. Ut in sapien magna. Mauris lacus ex, pretium nec odio sit amet, gravida faucibus nisi. Fusce vel nisi scelerisque, gravida purus at, hendrerit purus. Nulla efficitur lorem sit amet scelerisque sagittis. Vestibulum sit amet pellentesque nibh. Nulla id mollis est. In non vestibulum dui, at malesuada quam. Phasellus fermentum tempor purus ac tincidunt.";
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
      perspective: 1500px;
      perspective: 500px;
      perspective: 50px;

      animation: rotorz 100s linear infinite;
      background: transparent;
      overflow: visible;
      transition: perspective 3s;
      display: flex; align-items: center; justify-content: center;
      height: 100vh;
      overflow: visible;
      text-align: center;
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
      font-size: 12px;
      overflow-wrap: break-word;
      color: #fff;
      transition: color 900ms, transform 400ms;
      transform-origin: center center;

      overflow-y: auto;
      overflow: visible;
    }    
    .face span { padding: 0.3em 0; }
    .face:hover {
      color: #0f0;
    }




    #face-01 {
      transform: rotateZ(calc(36deg*0)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-02 {
      transform: rotateZ(calc(36deg*1)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-03 {
      transform: rotateZ(calc(36deg*2)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-04 {
      transform: rotateZ(calc(36deg*3)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-05 {
      transform: rotateZ(calc(36deg*4)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-06 {
      transform: rotateZ(calc(36deg*5)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-07 {
      transform: rotateZ(calc(36deg*6)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-08 {
      transform: rotateZ(calc(36deg*7)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-09 {
      transform: rotateZ(calc(36deg*8)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }
    #face-10 {
      transform: rotateZ(calc(36deg*9)) rotateX(90deg) translateZ(calc(30vmin*1.52)) scaleX(1);
    }






  </style>
  <link rel="author" href="humans.txt">
</head>
<body>
  <div id="space">
    <div id="room" class="transition-all">
      <div class="face" id="face-01"><?= str_repeat("1 ", 10000) ?></div>
      <div class="face" id="face-02"><?= str_repeat("2 ", 10000) ?></div>
      <div class="face" id="face-03"><?= str_repeat("3 ", 10000) ?></div>
      <div class="face" id="face-04"><?= str_repeat("4 ", 10000) ?></div>
      <div class="face" id="face-05"><?= str_repeat("5 ", 10000) ?></div>
      <div class="face" id="face-06"><?= str_repeat("6 ", 10000) ?></div>
      <div class="face" id="face-07"><?= str_repeat("7 ", 10000) ?></div>
      <div class="face" id="face-08"><?= str_repeat("8 ", 10000) ?></div>
      <div class="face" id="face-09"><?= str_repeat("9 ", 10000) ?></div>
      <div class="face" id="face-10"><?= str_repeat($lorem, 100) ?></div>
    </div>
  </div>
<script>

  var persp = 50;
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

  document.addEventListener('keydown', function (e) {
    console.log(e.code, e.key);
    if (e.key === "-") { perspDecrease(); }
    if (e.key === "+") { perspIncrease(); }
    if (e.key === "0") { perspMinimum(); }
    if (e.key === "9") { perspMaximum(); }
  }
);



</script>
</body>
</html>