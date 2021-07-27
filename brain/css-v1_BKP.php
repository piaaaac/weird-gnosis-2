<?php
$string = <<<EOD
Request URL: https://cdn.sketchapp.com/docs/shapes/transform@2x.mp4
	Request Method: GET
Status Code: 206  (from disk cache)
Remote Address: [2606:4700:3032::6815:b5f]:443
Referrer Policy: no-referrer-when-downgrade
alt-svc: h3-27=:443; ma=86400, h3-28=:443; ma=86400, h3-29=:443; ma=86400
cache-control: max-age=691200
cf-cache-status: MISS
cf-ray: 63f3798aeb7b3752-MXP
cf-request-id: 096c0a4ad40000375247a3c000000001
Content-Length: 101716
Content-Range: bytes 819200-920915/920916
content-type: video/mp4
date: Tue, 13 Apr 2021 08:55:20 GMT
etag: eead8a1111d57e498633070ee99b574d
expect-ct: max-age=604800, report-uri=https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct
last-modified: Wed, 13 Nov 2019 12:10:00 GMT
nel: {report_to:cf-nel,max_age:604800}
report-to: {group:cf-nel,endpoints:[{url:https:\/\/a.nel.cloudflare.com\/report?s=4l3pESI8UwrtA1o0uL1tkmLH1ENL76PRrWVyAEDloGIxM5ndjT0ZzjHiWBxcE7JLxJXN7%2FaxRiKncZPn0CK538R64MG4wB%2FWGv8JPhx66tJSGDV4DTzNy%2BtnPzMW4g%3D%3D}],max_age:604800}
server: cloudflare
vary: Accept-Encoding
x-amz-id-2: sEvcsA9mcU1I8LY+qiUv8EZqp3TiwWe6uU8S3w1qb7RilzoZdrcF3d0OZHQeK+pttE8AjAG+AaQ=
x-amz-request-id: QEHA0M9VD49H4GB5
x-amz-version-id: NIKUfzWCyGkP_jQyYEUUg18PF4YPWCWh
Provisional headers are shown. Disable cache to see full headers.
Accept-Encoding: identity;q=1, *;q=0
Range: bytes=819200-
Referer: https://www.sketch.com/docs/shapes/
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_16_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36
EOD;
$string20 = $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string . $string;
$string20 = htmlspecialchars($string20);

function fuckupString ($str, $factor) {
	$factor = $factor < 0 ? 0 : $factor > 100 ? 100 : $factor;
	for ($i = 0; $i < $factor; $i++) {
		$length = rand(0, $factor*3);
		$fuckup = "";
		// $space = rand(0,5);
		// if ($space > 4) {
		// 	for ($j = 0; $j < rand(5, 80); $j++) {
		// 		$fuckup .= "&nbsp;&nbsp;";
		// 	}
		// } else {
			for ($j = 0; $j < $length; $j++) {
				if ($space < 1) $fuckup .= chr(rand(0,255));
				else $fuckup .= "&nbsp;";
			}
		// }
		$pos = rand(0, strlen($str));
		$str = substr($str, 0, $pos) . $fuckup . substr($str, $pos);
	}
	// return htmlspecialchars($str);
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
				font-family: monospace;
			}

			#space {
				/*background: linear-gradient(skyblue,khaki);*/
    		perspective: 550px;
		    display: flex;
		    align-items: center;
		    justify-content: center;
        height: 100vh;
        overflow: hidden;
        background-color: black;
        color: yellow;
    		/*
    		text-align: center;
    		*/
			}
			#room {
		    width: 1000px;
		    height: 1000px;
		    transform-style: preserve-3d;
			}
			.face {
		    width: 1000px;
		    height: 1000px;
		    position: absolute;
		    backface-visibility: inherit;
		    font-size: 12px;
		    color: #fff;
		    color: rgba(255,255,255,0.3);
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

			.transition-all {
		    transition: all .1s ease-in;
			}

		</style>
	</head>
	<body>
		
		<div id="space">
			<div id="room" class="——transition-all">
	      <div class="face" id="face-front"><?= fuckupString($string20, 50) ?></div>
	      <div class="face" id="face-back"><?= fuckupString($string20, 150) ?></div>
	      <div class="face" id="face-left"><?= fuckupString($string20, 360) ?></div>
	      <div class="face" id="face-right"><?= fuckupString($string20, 60) ?></div>
	      <div class="face" id="face-top"><?= fuckupString($string20, 80) ?></div>
	      <div class="face" id="face-bottom"><?= fuckupString($string20, 100) ?></div>
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

			space.addEventListener("mousemove", (e) => {
        var mouseX = e.clientX;
        var mouseY = e.clientY;
        var xNorm = apMap(mouseX, 0, w, -1, 1);
        var yNorm = apMap(mouseY, 0, h, -1, 1);
				var coefX = 130;
				var coefY = -130;
				var rotY = coefX ? (2 * coefX / w * mouseX - coefX) : 0;
				var rotX = coefY ? (2 * coefY / h * mouseY - coefY) : 0;
				console.log(rotX, rotY);
				room.style.transform = "translate3d(0,0,500px) "+"rotate3d(1,0,0,"+ rotX+ "deg) rotate3d(0,1,0,"+rotY+ "deg) rotate3d(0,0,1,0)";

				fFront.style.marginTop = 	(xNorm - 1) * 900 + "px";
				fBack.style.marginTop =  	(xNorm - 3) * 500 + "px";
				// fLeft.style.marginTop =  	(xNorm - 2) * 500 + "px";
				// fRight.style.marginTop = 	(xNorm - 1) * 700 + "px";
				// fTop.style.marginTop = 	 	(yNorm - 1) * 500 + "px";
				fBottom.style.marginTop = (xNorm - 1) * 400 + "px";

      });

			// var string20 = "";
			var framecount = 0;
			// window.setInterval(function () {
			// 	space.innerHtml += string20[++framecount%string20.length];
			// }, 100);


		</script>
	</body>
</html>