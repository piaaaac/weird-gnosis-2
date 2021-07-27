<?php
require "trash.php"; // $stringA, $stringB, $stringC, $links

$stringA01 = str_repeat($stringA, 1);
$stringA02 = str_repeat($stringB, 2);
$stringA03 = str_repeat($stringC, 3);
$stringA04 = str_repeat($stringA, 4);
$stringA05 = str_repeat($stringD, 5);
$stringB01 = str_repeat($stringD, 1);

function randomItem ($array) {
	return $array[rand(0, count($array) - 1)];
}

function fuckupString ($str, $factor) {
	$factor = $factor < 0 ? 0 : $factor > 100 ? 100 : $factor;
	for ($i = 0; $i < $factor; $i++) {
		$length = rand(0, $factor*3);
		$fuckup = "";
		for ($j = 0; $j < $length; $j++) {
			$fuckup .= chr(rand(0,255));
		}
		$pos = rand(0, strlen($str));
		$str = substr($str, 0, $pos) . $fuckup . substr($str, $pos);

		$n = rand(0, 550);
		$spaces = str_repeat("&nbsp;", $n);
		$pos = rand(0, strlen($str));
		$str = substr($str, 0, $pos) . $spaces . substr($str, $pos);

		$markup = rand(0, 15) > 13 ? randomItem($GLOBALS['links']) : "";
		$pos = rand(0, strlen($str));
		$str = substr($str, 0, $pos) . $markup . substr($str, $pos);
	}
	return $str;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CSS transform test</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="functions.js"></script>

		<style type="text/css">
			
			* { 
				margin: 0; padding: 0; 
				font-family: menlo, monospace;
			}

			#space {
				/*
				background: linear-gradient(skyblue,khaki);
    		perspective: 550px;
				*/
    		perspective: 50px;
    		/*
    		perspective: 5px;
    		perspective: 1px;
    		*/
		    display: flex;
		    align-items: center;
		    justify-content: center;
        height: 100vh;
        overflow: hidden;
        background-color: black;
    		/*
        background-image: url('warp.gif');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    		*/
    		text-align: center;
			}
			#room {
		    width: 1000px;
		    height: 1000px;
		    transform-style: preserve-3d;
			}
			.face span { padding: 0.3em 0; }
			.face:hover { color: white; }
			.face {
		    width: 1100px;
		    height: 1100px;
		    position: absolute;
		    backface-visibility: inherit;
		    font-size: 22px;
		    overflow-wrap: break-word;
		    color: #fff;
		    color: rgba(255,255,255,0.2);

		    overflow-y: scroll;

		    transition: color 900ms;
    	}
    	.txtbg {
    		position: absolute;
    		top: 0; right: 0; bottom: 0; right: 0;
    		overflow: hidden;
    	}

			#face-front {
    		transform: translateZ(500px) scaleX(-1);
			}
			#face-back {
				transform: rotateY(180deg) translateZ(500px) scaleX(-1);
			}
			#face-left {
    		transform: rotateY(-90deg) translateZ(500px) scaleX(-1);
			}
			#face-right {
    		transform: rotateY(90deg) translateZ(500px) scaleX(-1);
			}
			#face-top {
    		transform: rotateX(90deg) translateZ(500px) scaleX(-1);
			}
			#face-bottom {
    		transform: rotateX(-90deg) translateZ(500px) scaleX(-1);
			}

			img.small { max-width: 25%; max-height: 25%; }
			.transition-all {
		    /*transition: all 10s;*/
			}

		</style>
	</head>
	<body>
		
		<div id="space">
			<div id="room" class="transition-all">
	      <div id="face-front" class="face">
	      	<span>
		      	<img class="small" src="img/download.jpg" />
		      	<?= substr(fuckupString($stringA01, 5), 0, 50) ?>
		      	<a href="https://www.alexpiacentini.com/labs">A <?= str_repeat("- ", 10)?>P</a>
		      	<img class="small" src="img/download.jpg" />
		      	<?= fuckupString($stringA05, 70) ?>
		      </span>
      	</div>
	      <div id="face-back" class="face">
	      	<span>
		      	<?= substr(fuckupString($stringB01, 5), 0, 100) ?>
		      	<img class="small" src="img/warp.gif" />
		      	<?= str_repeat("-- - ---- &.;{}", 25) ?>
		      	<img class="small" src="img/geoffrey.jpg" />
		      	<?= fuckupString($stringA01, 15) ?>
		      	<img class="small" src="img/cloud.jpg" />
		      	<?= fuckupString($stringA01, 12) ?>
		      	<img class="small" src="img/infected.jpg" />
		      	<?= fuckupString($stringA01, 5) ?>
		      </span>
      	</div>
	      <div id="face-left" class="face">
	      	<span>
		      	<?= substr(fuckupString($stringA01, 5), 0, 600) ?>
		      	<img class="small" src="http://www.lliisstt.it/3.0/media/pages/items/tight-media/4109106458-1618299197/pasted-img-1065839.jpg" />
		      	<?= fuckupString($stringA01, 30) ?>
		      	<img class="small" src="img/deedrecat.jpg" />
		      	<?= fuckupString($stringA02, 30) ?>
		      	<img class="small" src="http://www.lliisstt.it/3.0/media/pages/items/machine-learning-landscapes/3155032481-1615218643/pasted-img-55528712.jpg" />
		      	<?= fuckupString($stringA02, 30) ?>
		      </span>
      	</div>
	      <div id="face-right" class="face">
	      	<span>
		      	<?= substr(fuckupString($stringB01, 50), 0, 170) ?>
		      	<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>
		      	<a href="https://www.facebook.com/terms.php">https://www.facebook.com/terms.php</a>
		      	<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>
		      	<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>
		      	<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>
		      	<?= fuckupString($stringA02, 60) ?>
		      	<img class="small" src="http://www.lliisstt.it/3.0/media/pages/items/networks-points-etc/3635930643-1573388157/pasted-img-43070474.jpg" />
		      	<?= fuckupString($stringA02, 6) ?>
	      	</span>
      	</div>
	      <div id="face-top" class="face">
	      	<span>
		      	<?= fuckupString(fuckupString($stringA02, 100), 100) ?>
		      	<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>
		      	<?= str_repeat("- - - - - &", 2500) ?>
		      	<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>
		      	<?= fuckupString(fuckupString($stringA02, 100), 100) ?>
		      	<?= fuckupString(fuckupString($stringA02, 100), 100) ?>
	      	</span>
      	</div>
	      <div id="face-bottom" class="face">
	      	<span>
	      		<?= fuckupString($stringA02, 100) ?>
	      	</span>
      	</div>
	    </div>
    </div>

		<script type="text/javascript">
			
			var space = document.getElementById("space");
			var room = document.getElementById("room");
			var fFront = document.getElementById("face-front");
			var fBack = document.getElementById("face-back");
			var fLeft = document.getElementById("face-left");
			var fRight = document.getElementById("face-right");
			var fTop = document.getElementById("face-top");
			var fBottom = document.getElementById("face-bottom");
			var w = window.innerWidth;
			var h = window.innerHeight;
			var mouseX = 0;
			var mouseY = 0;

			space.addEventListener("mousemove", (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        var xNorm = apMap(mouseX, 0, w, -1, 1);
        var yNorm = apMap(mouseY, 0, h, -1, 1);
				var coefX = 130;
				var coefY = -130;
				var rotY = coefX ? (2 * coefX / w * mouseX - coefX) : 0;
				var rotX = coefY ? (2 * coefY / h * mouseY - coefY) : 0;
				room.style.transform = 'translate3d(0,0,500px) '+'rotate3d(1,0,0,'+ rotX+ 'deg) rotate3d(0,1,0,'+rotY+ 'deg) rotate3d(0,0,1,0)';

				// fFront.style.marginTop = 	(xNorm - 1) * 900 + "px";
				// fBack.style.marginTop =  	(xNorm - 3) * 500 + "px";
				// fLeft.style.marginTop =  	(xNorm - 2) * 500 + "px";
				// fRight.style.marginTop = 	(xNorm - 1) * 700 + "px";
				// fTop.style.marginTop = 	 	(yNorm - 1) * 500 + "px";
				// fBottom.style.marginTop = (xNorm - 1) * 400 + "px";

      });

      $("a").click(function (event) {
  	    event.preventDefault();
      	popupCenter(this.href, "_%£=&)&", 500, 500);
      });

		</script>
	</body>
</html>