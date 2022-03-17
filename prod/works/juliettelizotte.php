<!-- 
<div id="work">
  <div class='embed-container'>
    <iframe src='https://jujulove.eu/welcome.html' frameborder='0'></iframe>
  </div>
</div>
 -->


<?php
$mobilePxWidth = 425;
$mobilePxHeight = 800;
?>

<style>
  @media only screen and (max-width: 425px) {
    #work iframe {
      width: <?= $mobilePxWidth ?>px;
      height: <?= $mobilePxHeight ?>px;
      transform-origin: top left;
    }
    .embed-container {
      overflow-y: scroll;
    }
  }
</style>

<div id="work">
  <div class='embed-container'>
    <iframe src='https://jujulove.eu/welcome.html' frameborder='0'></iframe>
  </div>
</div>

<script>
  
  function scaleIframe () {
    console.log("resized")
    if (window.innerWidth <= 425) {
      var safety = 0;
      var ratioW = (window.innerWidth / +"<?= $mobilePxWidth ?>") - safety;
      var ratioH = (window.innerHeight / +"<?= $mobilePxHeight ?>") - safety;
      var transform = "scale("+ Math.min(ratioW, ratioH) +")";
      console.log(transform)
      $("#work iframe").css("transform", transform);
    } else {
      $("#work iframe").css("transform", "scale(1)");
    }
  }

  // at start
  scaleIframe();
  
  // on resize
  window.onresize = function () {
    scaleIframe();
  }

</script>