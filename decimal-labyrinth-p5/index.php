<?php

$markupPieces = [
  '<a href="https://dfgcwieugewi.com">https://dfgcwieugewi.com</a>',
  '<img class="small" src="img/download.jpg" />',
  '<iframe width="1379" height="627" src="https://www.youtube.com/embed/WQO-aOdJLiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
];

function randomItem ($array) {
  return $array[rand(0, count($array) - 1)];
}

function fuckupString ($str, $factor) {
  $factor = $factor < 0 ? 0 : $factor > 100 ? 100 : $factor;
  for ($i = 0; $i < $factor; $i++) {
    $length = rand(0, $factor*3);
    $fuckup = "";
    for ($j = 0; $j < $length; $j++) {
      $fuckup .= chr(rand(0,55));
      $fuckup .= "&nbsp;";
    }
    $pos = rand(0, strlen($str));
    $str = substr($str, 0, $pos) . $fuckup . substr($str, $pos);

    $n = rand(0, 550);
    $spaces = str_repeat("&nbsp;", $n);
    $pos = rand(0, strlen($str));
    $str = substr($str, 0, $pos) . $spaces . substr($str, $pos);

    // add links, images, iframes
    // $markup = rand(0, 15) > 13 ? randomItem($markupPieces) : "";
    // $pos = rand(0, strlen($str));
    // $str = substr($str, 0, $pos) . $markup . substr($str, $pos);
  }
  return $str;
}

$text1 = "We take great pleasure in presenting to the attention of students and investigators of the Secret Doctrines this little work based upon the world-old Hermetic Teachings. There has been so little written upon this subject, notwithstanding the countless references to the Teachings in the many works upon occultism, that the many earnest searchers after the Arcane Truths will doubtless welcome the appearance of the present volume.
The purpose of this work is not the enunciation of any special philosophy or doctrine, but rather is to give to the students a statement of the Truth that will serve to reconcile the many bits of occult knowledge that they may have acquired, but which are apparently opposed to each other and which often serve to discourage and disgust the beginner in the study. Our intent is not to erect a new Temple of Knowledge, but rather to place in the hands of the student a Master-Key with which he may open the many inner doors in the Temple of Mystery through the main portals he has already entered.
There is no portion of the occult teachings possessed by the world which have been so closely guarded as the fragments of the Hermetic Teachings which have come down to us over the tens of centuries which have elapsed since the lifetime of its great founder, Hermes Trismegistus, the \"scribe of the gods,\" who dwelt in old Egypt in the days when the present race of men was in its infancy. Contemporary with Abraham, and, if the legends be true, an instructor of that venerable sage, Hermes was, and is, the Great Central Sun of Occultism, whose rays have served to illumine the countless teachings which have been promulgated since his time. All the fundamental and basic teachings embedded in the esoteric teachings of every race may be traced back to Hermes. Even the most ancient teachings of India undoubtedly have their roots in the original Hermetic Teachings.
From the land of the Ganges many advanced occultists wandered to the land of Egypt, and sat at the feet of the Master. From him they obtained the Master-Key which explained and reconciled their divergent views, and thus the Secret Doctrine was firmly established. From other lands also came the learned ones, all of whom regarded Hermes as the Master of Masters, and his influence was so great that in spite of the many wanderings from the path on the part of the centuries of teachers in these different lands, there may still be found a certain basic resemblance and correspondence which underlies the many and often quite divergent theories entertained and taught by the occultists of these different lands today. The student of Comparative Religions will be able to perceive the influence of the Hermetic Teachings in every religion worthy of the name, now known to man, whether it be a dead religion or one in full vigor in our own times. There is always a certain Correspondence in spite of the contradictory features, and the Hermetic. Teachings act as the Great Reconciler.";

$text2 = "The lifework of Hermes seems to have been in the direction of planting the great Seed-Truth which has grown and blossomed in so many strange forms, rather than to establish a school of philosophy which would dominate the world's thought. But, nevertheless, the original truths taught by him have been kept intact in their original purity by a few men in each age, who, refusing great numbers of half- developed students and followers, followed the Hermetic custom and reserved their truth for the few who were ready to comprehend and master it. From lip to ear the truth has been handed down among the few. There have always been a few Initiates in each generation, in the various lands of the earth, who kept alive the sacred flame of the Hermetic Teachings, and such have always been willing to use their lamps to re-light the lesser lamps of the outside world, when the light of truth grew dim, and clouded by reason of neglect, and when the wicks became clogged with foreign matter. There were always a few to tend faithfully the altar of the Truth, upon which was kept a light the Perpetual Lamp of Wisdom. These men devoted their lives to the labor of love which the poet has so well stated in his lines:
\"O, let not the flame die out! Cherished age after age in its dark cavern — in its holy temples cherished. Fed by pure ministers of love — let not the flame die out!\"
These men have never sought popular approval, nor numbers of followers. They are indifferent to these things, for they know how few there are in each generation who are ready for the truth, or who would recognize it if it were presented to them. They reserve the \"strong meat for men,\" while others furnish the \"milk for babes.\" They reserve their pearls of wisdom for the few elect, who recognize their value and who wear them in their crowns, instead of casting them before the materialistic vulgar swine, who would trample them in the mud and mix them with their disgusting mental food. But still these men have never forgotten or overlooked the original teachings of Hermes, regarding the passing on of the words of truth to those ready to receive it, which teaching is stated in The Kybalion as follows: \"Where fall the footsteps of the Master, the ears of those ready for his Teaching open wide.\" And again: \"When the ears of the student are ready to hear, then cometh the lips to fill them with wisdom.\" But their customary attitude has always been strictly in accordance with the other Hermetic aphorism, also in The Kybalion: \"The lips of Wisdom are closed, except to the ears of Understanding.\"";

$text3 = "There are those who have criticised this attitude of the Hermetists, and who have claimed that they did not manifest the proper spirit in their policy of seclusion and reticence. But a moment's glance back over the pages of history will show the wisdom of the Masters, who knew the folly of attempting to teach to the world that which it was neither ready or willing to receive. The Hermetists have never sought to be martyrs, and have, instead, sat silently aside with a pitying smile on their closed lips, while the \"heathen raged noisily about them\" in their customary amusement of putting to death and torture the honest but misguided enthusiasts who imagined that they could force upon a race of barbarians the truth capable of being understood only by the elect who had advanced along The Path.
And the spirit of persecution has not as yet died out in the land. There are certain Hermetic Teachings, which, if publicly promulgated, would bring down upon the teachers a great cry of scorn and revilement from the multitude, who would again raise the cry of \"Crucify! Crucify.\"
In this little work we have endeavored to give you an idea of the fundamental teachings of The Kybalion, striving to give you the working Principles, leaving you to apply them yourselves, rather than attempting to work out the teaching in detail. If you are a true student, you will be able to work out and apply these Principles — if not, then you must develop Yourself into one, for otherwise the Hermetic Teachings will be as \"words, words, words\" to you.";

$text4 = "\"The lips of wisdom are closed, except to the ears of Understanding.\" — The Kybalion.
From old Egypt have come the fundamental esoteric and occult teachings which have so strongly influenced the philosophies of all races, nations and peoples, for several thousand years. Egypt, the home of the Pyramids and the Sphinx, was the birthplace of the Hidden Wisdom and Mystic Teachings. From her Secret Doctrine all nations have borrowed. India, Persia, Chaldea, Medea, China, Japan, Assyria, ancient Greece and Rome, and other ancient countries partook liberally at the feast of knowledge which the Hierophants and Masters of the Land of Isis so freely provided for those who came prepared to partake of the great store of Mystic and Occult Lore which the masterminds of that ancient land had gathered together.
In ancient Egypt dwelt the great Adepts and Masters who have never been surpassed, and who seldom have been equaled, during the centuries that have taken their processional flight since the days of the Great Hermes. In Egypt was located the Great Lodge of Lodges of the Mystics. At the doors of her Temples entered the Neophytes who afterward, as Hierophants, Adepts, and Masters, traveled to the four corners of the earth, carrying with them the precious knowledge which they were ready, anxious, and willing to pass on to those who were ready to receive the same. All students of the Occult recognize the debt that they owe to these venerable Masters of that ancient land.
But among these great Masters of Ancient Egypt there once dwelt one of whom Masters hailed as \"The Master of Masters.\" This man, if \"man\" indeed he was, dwelt in Egypt in the earliest days. He was known as Hermes Trismegistus. He was the father of the Occult Wisdom; the founder of Astrology; the discoverer of Alchemy. The details of his life story are lost to history, owing to the lapse of the years, though several of the ancient countries disputed with each other in their claims to the honor of having furnished his birthplace — and this thousands of years ago. The date of his sojourn in Egypt, in that his last incarnation on this planet, is not now known, but it has been fixed at the early days of the oldest dynasties of Egypt — long before the days of Moses. The best authorities regard him as a contemporary of Abraham, and some of the Jewish traditions go so far as to claim that Abraham acquired a portion of his mystic knowledge from Hermes himself.
As the years rolled by after his passing from this plane of life (tradition recording that he lived three hundred years in the flesh), the Egyptians deified Hermes, and made him one of their gods, under the name of Thoth. Years after, the people of Ancient Greece also made him one of their many gods — calling him \"Hermes, the god of Wisdom.\" The Egyptians revered his memory for many centuries — yes, tens of centuries — calling him \"the Scribe of the Gods,\" and bestowing upon him, distinctively, his ancient title, \"Trismegistus,\" which means \"the thrice-great\"; \"the great-great\"; \"the greatest-great\"; etc. In all the ancient lands, the name of Hermes Trismegistus was revered, the name being synonymous with the \"Fount of Wisdom.\"";

$trash = fuckupString($text4, 60);
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
  <style>
    @font-face {
      font-family: "Basier Circle Mono";
      font-weight: 500;
      src: url("BasierCircleMono-Regular.otf") format("opentype");
    }
    * { 
      margin: 0; padding: 0; 
      color: white;
      font-family: "Basier Circle Mono", monospace;
    }
    body {
      overflow: hidden;
      background-color: black;
    }
    .log {
      position: fixed; top: 10px; right: 10px; width: 300px;
      text-align: right; 
      color: white;
    }
    #p5-sketch {
      height: 100vh;
    }
    #over {
      position: fixed; top: 0; right: 0; bottom: 0; left: 0;
      display: flex; align-items: center; justify-content: center;
    }
    img.depth-grad {
      width: 80vh;
      opacity: .9;
      position: absolute;
    }
  </style>
  <link rel="author" href="humans.txt">
</head>
<body>

  <?php /*
  <div style="padding:10px;">
  echo $trash;
  </div>
  exit;
  */ ?>

  <div id="p5-sketch"></div>
  <div id="over">
    <img class="depth-grad" src="depth-grad.png" />
    <img class="depth-grad" src="depth-grad.png" />
  </div>
<script>

var canvas, cam, img, img2, img3, vid, vid2;
var font;
var camTargetX = 800;
var targetTilt = 0;
var targetPan = 0;

// ---------------------------
var faces = 10;

// var faceLength = 6000;
// var faceWidth = 180;
// var persp = 350;

var faceWidth = 680;
var faceLength = 12000;
var persp = 250;

var piramidize = 20; // degrees
piramidize = 0; // degrees
// ---------------------------

var logdiv;

function preload () {
  img = loadImage("trashx2.png");
  img2 = loadImage("selected.png");
  img3 = loadImage("text-kybalion-4M.png");
  // vid = createVideo(['vert4export.mov']);
  // vid = createVideo(['lines-3.mov']);
  // vid.elt.muted = true;
  // vid.loop();
  // vid.hide();
  // vid2 = createVideo(['lines.mov']);
  // vid2.elt.muted = true;
  // vid2.loop();
  // vid2.hide();
  font = loadFont("BasierCircleMono-Regular.otf");
}

function setup() {
  canvas = createCanvas(windowWidth, windowHeight, WEBGL);
  canvas.parent('p5-sketch');
  cam = createCamera();
  cam.setPosition(camTargetX,0,0);
  cam.lookAt(-100, 0, 0);
  cam.perspective(persp);
  // cam.frustum(-200, 200, -2000, 2000, 2000, 4000);

  setCamera(cam);
  textFont(font); 
  textSize(10);
  textAlign(LEFT, TOP);

  textureWrap(MIRROR); // either CLAMP, REPEAT, or MIRROR
  textureWrap(MIRROR); // either CLAMP, REPEAT, or MIRROR
  textureWrap(REPEAT); // either CLAMP, REPEAT, or MIRROR

  angleMode(DEGREES);
  logdiv = createElement("div");
  logdiv.addClass("log");
}

function draw() {
  background("#000");
  
  var rotation = millis() / 500;
  fill(255, 255, 255);
  // normalMaterial();

  for (var n = 1; n <= faces; n++) {
    // var t = n === 1 ? vid2 : vid;
    // var t = n%2 === 0 ? vid2 : img;
    var t = img;
    // var t = vid;
    push();
    rotateX(360/faces*n);
    rotateX(rotation);
    
    rotateY(piramidize); /// test

    // rotateZ(map(mouseX, 0, width, 50, 100));
    translate(0, faceWidth/PI*0.01, -faceWidth*PI*0.45);
    // fill(255, 150);
    texture(t);
// specularMaterial(120, 120);
    plane(faceLength, faceWidth);
    // text("<?= str_repeat("FACE ", 1000) ?>", -faceLength/2, -faceWidth/2, faceLength, faceWidth);
    pop();
  }

  // cam.tilt(map(mouseY, 0, height, -40, 40)/50);
  // cam.pan(map(mouseX, 0, width, 40, -40)/50);
  // orbitControl();

  // var tiltDelta = 

  var delta = camTargetX - cam.eyeX;
  var posX = round(cam.eyeX + delta*0.1);
  if (posX < 0) {
    posX = 2500;
    camTargetX += 2500;
  }
  if (posX > 2500) {
    posX = 0;
    camTargetX -= 2500;
  }
  cam.setPosition(posX, 0, 0);

  logdiv.html("cam pos x: "+ cam.eyeX);

}

function windowResized () {
  resizeCanvas(windowWidth, windowHeight);
}

// function keyPressed() {
//   if (keyCode === UP_ARROW) {
//     camTargetX += 50;
//   } else if (keyCode === DOWN_ARROW) {
//     camTargetX -= 50;
//   }
// }

function mouseWheel (event) {
  camTargetX += round(event.delta/5);
}

function touchMoved (event) {
  console.log(event);
  // ellipse(mouseX, mouseY, 5, 5);
  return false;
}


</script>
</body>
</html>