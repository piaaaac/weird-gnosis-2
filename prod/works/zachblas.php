<!-- 
<div id="work">
  <div class='embed-container'>
    <iframe src='https://player.vimeo.com/video/582413272' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </div>
</div>
 -->

<div id="work">
  <div class='embed-container'>
    <iframe src="https://player.vimeo.com/video/582413272?autoplay=1&loop=1&color=01FE92&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<script src="https://player.vimeo.com/api/player.js"></script>
<script>
  var iframe = document.querySelector('iframe');
  var player = new Vimeo.Player(iframe);
  player.play();
</script>
