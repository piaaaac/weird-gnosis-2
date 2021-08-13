<!--  
<div id="work">
  <div class='embed-container' style="">
    <iframe src='works/suzannetreister' frameborder='0'></iframe>
  </div>
</div>
-->

<?php 
$links = [
];
?>

<div id="work">
  <div class="max-w px-xl-5">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-12 pb-5 pb-5">
          <h2 class="font-shiny font-s text-center">TECHNOSHAMANIC SYSTEMS</h2>
          <p class="font-shiny font-s text-center">New Cosmological Models for Survival</p>
        </div>

        <div class="col-md-3 text-center">
          <div class="px-5 my-5"><img class="img-fluid" src="works/suzannetreister/img/TSSEarthForce.jpg" /></div>

          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_Apparel.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-a-1.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_Rituals.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-a-2.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_SocialStructures.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-a-3.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_Architectures.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-a-4.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_Vultures.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-a-5.gif" /></a></div>
        </div>

        <div class="col-md-6 text-center">

          <iframe src="https://player.vimeo.com/video/514742219?autoplay=1&loop=1&color=01FE92&title=0&byline=0&portrait=0" style="" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

          <div class="mb-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_Diagrams.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-main-1.gif" /></a></div>
          <div class="mb-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_Stars.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-main-2.gif" /></a></div>
        </div>

        <div class="col-md-3 text-center">
          <div class="px-5 my-5"><img class="img-fluid" src="works/suzannetreister/img/TSSSpaceForce.jpg" /></div>

          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_ReinTech.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-b-1.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_CrystalArc.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-b-2.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_SpacecraftD.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-b-3.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_SpaceHab.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-b-4.gif" /></a></div>
          <div class="px-lg-4 my-5"><a target="suzanne" href="https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_Visions.html">
            <img class="img-fluid" src="works/suzannetreister/img/col-b-5.gif" /></a></div>
        </div>

      </div>
    </div>
  </div>

  <iframe id="suzanne" name="suzanne"></iframe>
</div>

<div id="work-ui-bottom">
  <!-- <a class="pointer" onclick=""><img src="images/larr.svg" /></a> -->
  <a class="pointer" onclick="closeIframe();"><img src="images/uarr.svg" /></a>
  <!-- <a class="pointer" onclick=""><img src="images/rarr.svg" /></a> -->
</div>

<script>
  $("a[target='suzanne']").click(function () {
    $("iframe#suzanne").addClass("active");
  });

  function closeIframe () {
    $("iframe#suzanne").removeClass("active");
    $("iframe#suzanne").attr("src", "");
  }
</script>