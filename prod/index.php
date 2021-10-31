<?php
// require "config.php"; // not needed anymore (joshua citarella)

$url = "https://weirdgnosis.impakt.nl";
$urlSocialImg = "/images/social-card.jpg";
$siteTitle = "Weird Gnosis - IMPAKT";
$title = "Weird Gnosis - IMPAKT";
$desc = "Media, medicine and magick in a world out of control";

$works = [
  [
    "title" => "TECHNOSHAMANIC SYSTEMS: New Cosmological Models for Survival",
    "author" => "Suzanne Treister",
    "slug" => "suzannetreister",
    "url" => "https://www.suzannetreister.net/TechnoShamanicSystems/TSS/TSS_M.html",
    "previewUrl" => "images/works/suzannetreister.jpg",
  ],
  [
    "title" => "siXren (verbum medicinae)",
    "author" => "Agnes Momirski",
    "slug" => "agnesmomirski",
    "url" => "https://www.agnesmomirski.com/sixren",
    "previewUrl" => "images/works/agnesmomirski.jpg",
  ],
  [
    "title" => "The Grief Portal",
    "author" => "Camille Barton",
    "slug" => "camillebarton",
    "url" => "https://vimeo.com/471381269",
    "previewUrl" => "images/works/camillebarton.jpg",
  ],
  [
    "title" => "Sisters of the Wind",
    "author" => "Juliette Lizotte",
    "slug" => "juliettelizotte",
    "url" => "https://jujulove.eu/welcome.html",
    "previewUrl" => "images/works/juliettelizotte.jpg",
  ],
  [
    "title" => "An Internet Cosmology",
    "author" => "Geoffrey Lillemon",
    "slug" => "geoffreylillemon",
    "url" => "https://cinekid-parallel-archaeologies.netlify.app/?lang=en&autoplay&subtitles",
    "previewUrl" => "images/works/geoffreylillemon.jpg",
  ],
  [
    "title" => "CYF Cutscenes",
    "author" => "Joshua Citarella",
    "slug" => "joshuacitarella",
    "url" => "https://joshuacitarella.com/index.html",
    "previewUrl" => "images/works/joshuacitarella.jpg",
  ],
  [
    "title" => "The Doors",
    "author" => "Zach Blas",
    "slug" => "zachblas",
    "url" => "https://vimeo.com/372710273 (pw: thelizardkingreturns)",
    "previewUrl" => "images/works/zachblas.jpg",
  ],
  [
    "title" => "Extrastellar Evaluations III : Entropy : 25800",
    "author" => "Yin-Ju Chen",
    "slug" => "yinjuchen",
    "url" => "https://vimeo.com/242858283/22db947793",
    "previewUrl" => "images/works/yinjuchen.jpg",
  ],


  // [
  //   "title" => "Mind Chasm",
  //   "author" => "Aamon Hawk",
  //   "slug" => "aamonhawk",
  //   "url" => null,
  //   "previewUrl" => "images/works/aamonhawk.jpg",
  // ],
  [
    "title" => "Cherrypicker",
    "author" => "Ellie Wyatt",
    "slug" => "elliewyatt",
    "url" => null,
    "previewUrl" => "images/works/elliewyatt.jpg",
  ],

  [
    "title" => "Weird commentary on 2 December",
    "author" => "Erik Davis ",
    "slug" => "erikdavis",
    "url" => null,
    "previewUrl" => "images/works/erikdavis.jpg",
  ],

];

$numogramSvg = <<< EOT
<svg viewBox="0 0 480 820" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-1">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-2">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-3">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-4">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-5">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-6">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-7">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-8">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-9">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-95.2%" y="-95.2%" width="290.4%" height="290.4%" filterUnits="objectBoundingBox" id="filter-10">
            <feGaussianBlur stdDeviation="19" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-7.7%" y="-18.8%" width="115.5%" height="138.1%" filterUnits="objectBoundingBox" id="filter-11">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-7.7%" y="-18.8%" width="115.5%" height="138.1%" filterUnits="objectBoundingBox" id="filter-12">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-2.7%" y="-5.3%" width="105.5%" height="110.8%" filterUnits="objectBoundingBox" id="filter-13">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-4.2%" y="-5.5%" width="108.4%" height="111.0%" filterUnits="objectBoundingBox" id="filter-14">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-5.9%" y="-7.1%" width="111.7%" height="114.0%" filterUnits="objectBoundingBox" id="filter-15">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-8.2%" y="-4.3%" width="116.7%" height="108.9%" filterUnits="objectBoundingBox" id="filter-16">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-4.1%" y="-11.4%" width="108.1%" height="123.4%" filterUnits="objectBoundingBox" id="filter-17">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-3.3%" y="-23.4%" width="106.6%" height="148.1%" filterUnits="objectBoundingBox" id="filter-18">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-3.2%" y="-3.3%" width="106.2%" height="106.6%" filterUnits="objectBoundingBox" id="filter-19">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
    </defs>
    <g id="numo-blur" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="item9" transform="translate(209.500000, 614.757470)">
            <circle id="circle9" fill="#00FF95" opacity="0.600000024" filter="url(#filter-1)" transform="translate(30.960243, 31.000000) rotate(-270.000000) translate(-30.960243, -31.000000) " cx="30.960243" cy="31" r="29.9374566"></circle>
            <image id="image9" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-2c940e7f912e.gif"></image>
        </g>
        <g id="item8" transform="translate(209.500000, 521.452397)">
            <circle id="circle8" fill="#00FF95" opacity="0.600000024" filter="url(#filter-2)" transform="translate(30.960243, 31.000000) rotate(-270.000000) translate(-30.960243, -31.000000) " cx="30.960243" cy="31" r="29.9374566"></circle>
            <image id="image8" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-3f6dc7c74582.gif"></image>
        </g>
        <g id="item7" transform="translate(370.765171, 225.570535)">
            <circle id="circle7" fill="#00FF95" opacity="0.600000024" filter="url(#filter-3)" transform="translate(30.999943, 31.000000) rotate(-270.000000) translate(-30.999943, -31.000000) " cx="30.9999434" cy="31" r="29.9374566"></circle>
            <image id="image7" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-4fbead33b112.gif"></image>
        </g>
        <g id="item6" transform="translate(221.576789, 49.937457)">
            <circle id="circle6" fill="#00FF95" opacity="0.600000024" filter="url(#filter-4)" transform="translate(31.000000, 31.000000) rotate(-270.000000) translate(-31.000000, -31.000000) " cx="31" cy="31" r="29.9374566"></circle>
            <image id="image6" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-5c59c6b751ed.gif"></image>
        </g>
        <g id="item5" transform="translate(88.854065, 235.050730)">
            <circle id="circle5" fill="#00FF95" opacity="0.600000024" filter="url(#filter-5)" transform="translate(31.000000, 31.000000) rotate(-270.000000) translate(-31.000000, -31.000000) " cx="31" cy="31" r="29.9374566"></circle>
            <image id="image5" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-7e81e595dc32.gif"></image>
        </g>
        <g id="item4" transform="translate(48.937457, 294.925643)">
            <circle id="circle4" fill="#00FF95" opacity="0.600000024" filter="url(#filter-6)" transform="translate(31.000000, 31.000000) rotate(-270.000000) translate(-31.000000, -31.000000) " cx="31" cy="31" r="29.9374566"></circle>
            <image id="image4" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-04235e7913de.gif"></image>
        </g>
        <g id="item3" transform="translate(140.246699, 49.937457)">
            <circle id="circle3" fill="#00FF95" opacity="0.600000024" filter="url(#filter-7)" transform="translate(31.000000, 31.000000) rotate(-270.000000) translate(-31.000000, -31.000000) " cx="31" cy="31" r="29.9374566"></circle>
            <image id="image3" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-51973c6e94ae.gif"></image>
        </g>
        <g id="item2" transform="translate(324.362057, 159.209173)">
            <circle id="circle2" fill="#00FF95" opacity="0.600000024" filter="url(#filter-8)" transform="translate(31.000000, 31.000000) rotate(-270.000000) translate(-31.000000, -31.000000) " cx="31" cy="31" r="29.9374566"></circle>
            <image id="image2" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-96789dafcefc.gif"></image>
        </g>
        <g id="item1" transform="translate(209.500000, 428.147325)">
            <circle id="circle1" fill="#00FF95" opacity="0.600000024" filter="url(#filter-9)" transform="translate(30.960243, 31.000000) rotate(-270.000000) translate(-30.960243, -31.000000) " cx="30.960243" cy="31" r="29.9374566"></circle>
            <image id="image1" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-a51aa07d228c.gif"></image>
        </g>
        <g id="item0" transform="translate(209.500000, 708.062543)">
            <circle id="circle0" fill="#00FF95" opacity="0.600000024" filter="url(#filter-10)" transform="translate(30.960243, 31.000000) rotate(-270.000000) translate(-30.960243, -31.000000) " cx="30.960243" cy="31" r="29.9374566"></circle>
            <image id="image0" x="10" y="10" width="42" height="42" xlink:href="images/gif-c/ezgif-6-b8a5530ba414.gif"></image>
        </g>
        <path d="M258.192789,147.83055 C246.676807,98.0658852 178.260305,98.0658852 164.887716,147.83055" id="Line-5-Copy-8" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-11)" transform="translate(211.540253, 129.168801) rotate(-180.000000) translate(-211.540253, -129.168801) "></path>
        <path d="M335.711985,711.071756 C324.196003,661.307091 255.779501,661.307091 242.406912,711.071756" id="Line-5-Copy-8" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-12)" transform="translate(289.059449, 692.410007) rotate(-270.000000) translate(-289.059449, -692.410007) "></path>
        <path d="M465.227851,482.045312 C422.723941,376.469435 306.373223,349.970671 206.227851,349.970671" id="Line-5-Copy-6" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-13)" transform="translate(335.727851, 416.007992) rotate(-270.000000) translate(-335.727851, -416.007992) "></path>
        <path d="M422.401102,438.511394 C397.734146,365.492827 329.564136,322.164328 249.761769,307.143922" id="Line-5-Copy-7" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-14)" transform="translate(336.081435, 372.827658) rotate(-270.000000) translate(-336.081435, -372.827658) "></path>
        <path d="M87.0114566,355.863099 C109.874913,411.530494 170.733699,452.302147 210.522786,459.147325" id="Path-3" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-15)"></path>
        <path d="M124.022786,295.647325 C132.097693,362.948694 160.70494,429.209868 210.522786,459.147325" id="Path-3-Copy" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-16)"></path>
        <path d="M325.4246,190.209173 C282.514246,181.941173 181.225851,214.813468 145.550382,250.66073" id="Path-4" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-17)"></path>
        <path d="M371.827658,253.280785 C343.054226,245.399929 312.3977,223.375179 261.621238,223.375179 C217.360635,223.375179 180.084063,233.343714 149.791522,253.280785" id="Path-5" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-18)"></path>
        <path d="M170.733699,51 C211.540253,2.50940526 287.034106,2.50940526 336.081435,38.1943988 C385.128764,73.8793924 401.765171,152.507051 401.765171,224.077154" id="Path-6" stroke="#01FE92" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-19)"></path>
    </g>
</svg>
EOT;

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Weird Gnosis</title>
  <script src="lib/jquery-3.6.0.min.js"></script>
  <script src="lib/p5-v1.3.1.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/morphing-title.js"></script>
  <link rel="stylesheet" href="lib/bootstrap-5.0.2.NOT_SURE_ITS_NEEDED.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="author" href="humans.txt">
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155718720-9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-155718720-9');
  </script>

</head>
<body>
  <div id="cosmos">
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
  </div>

  <?php 
  $i = 0;
  foreach ($works as $work): ?>
    <div id="preview-<?= $i ?>" class="preview hide" style="background-image: url(<?= $work["previewUrl"] ?>);"></div>
    <?php 
    $i++;
  endforeach ?>

  <!-- <div id="preview" class="hide"></div> -->

  <div id="ui" class="hide home">
    <div id="numogram"><?= $numogramSvg ?></div>
    <div id="top" class="font-m">
      <a onclick="openHome();" class="font-shiny pointer no-u">
        <img class="cursor-hover" width="40px" src="images/gif-c/ezgif-6-51973c6e94ae.gif" />
      </a>
      <a onclick="handleAudioClick();" class="audio-control font-s font-soft font-white pointer no-u">TOGGLE AUDIO</a>
    </div>
    <div id="bottom" class="font-m">
      <div>
        <p class="title font-shiny" onclick="openWork(lastHoveredWork);"></p>
        <p class="author font-shiny d-md-none" onclick="openWork(lastHoveredWork);"></p>
        <p class="btn-mob font-shiny hide d-md-none" ontouchstart="openWork(lastHoveredWork);" onclick="openWork(lastHoveredWork);">OPEN &raquo;</p>
      </div>
      <p class="author font-shiny d-none d-md-block"></p>
    </div>
  </div>
  
  <div class="mmodal hide" id="modal-work">
    <div id="top-ui" class="font-m">
      <a onclick="closeWork();" class="font-shiny pointer no-u">
        <img class="cursor-hover" width="40px" src="images/gif-c/ezgif-6-51973c6e94ae.gif" />
      </a>
    </div>
    <div class="mmodal-bg"></div>
    <div class="mmodal-content"></div>
  </div>

  <div class="mmodal" id="modal-home">
    <div class="mmodal-bg"></div>
    <div class="mmodal-content">
       
      <div id="opening">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div id="p5-morph"></div>
              <p class="font-m font-shiny">Media, medicine and magick in a world out of control</p>
              <div class="font-s">
                <a onclick="scrollToInfo();" class="font-soft font-white lh-l pointer no-u">INFORMATION</a>
                <span class="d-none d-sm-inline">&nbsp;&nbsp;&nbsp;</span><span class="d-sm-none"><br /></span>
                <a onclick="closeHome();" class="font-soft font-white lh-l pointer no-u">ENTER THE EXHIBITION</a>
                <span class="d-none d-sm-inline">&nbsp;&nbsp;&nbsp;</span><span class="d-sm-none"><br /></span>
                <a onclick="handleAudioClick();" class="audio-control font-soft font-white lh-l pointer no-u">TOGGLE AUDIO</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="home-texts">
        <div class="grad-black-down">
          <div class="container-fluid max-w">
            <div class="row">
              <div class="col-12">
                <div class="curatorial-text">
                  <h2 class="font-s font-soft mb-4 pb-2">
                    Exhibition
                  </h2>
                  <p class="font-m font-white mb-4">From witchcraft to psychedelia, the online exhibition Weird Gnosis takes you on a journey into some of the weirder parts of the web. As new media technologies appear increasingly indistinguishable from magic, the Internet is becoming a forum for the struggle between subcultures who use the language of esoteric revelation and weird mediation. Because of how profoundly media affect how we encounter each other, the world and ourselves these esoteric practices might open paths through which to imagine media differently. Like the products of Silicon Valley, these 'technologies of the self' are neither good nor bad nor are they neutral. With a selection of video and performance art, Weird Gnosis curates a dialogue with artists and thinkers whose practices radically disturb the familiar by invoking the truly weird.</p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="bg-black-transparent">
          <div class="container-fluid max-w">
            <div class="row">

              <div class="col-12 spacer py-5"></div>

              <div class="col-12 d-lg-none">
                <h2 class="font-s font-soft mb-4 pb-2">
                  About
                </h2>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    Weird Gnosis is a project curated by Inez de Coo and Marc Tuters and produced by <a href="https://impakt.nl/" target="_blank" class="font-green">IMPAKT</a>. The web-project is supported by the Creative Industries Fund NL, City of Utrecht, and Democracy & Media Foundation and created by Alex Piacentini. Sound design by Marco Fasoli.
                  </p>
                  <p class="max mb-2">
                    <img src="images/logos.svg" class="logos mt-3" />
                  </p>
                </div>
              </div>
              <div class="col-lg-8">
                <h2 class="font-s font-soft mb-4 pb-2">
                  Artists
                </h2>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    CAMILLE BARTON (United Kingdom)
                    <br />The Grief Portal (2020)
                    <br />Video, duration 16 min 45 sec
                  </p>
                  <p class="max mb-2">
                    The Grief Portal is a sci-fi inspired video that will bring you back into your body, through a healing ‘somatic movement’ that allows you to rebuild using ‘the compost of your grief’. The collective grief of the pandemic was what motivated Camille Barton to make the film. In their own words:
                  </p>
                  <p class="max mb-2">
                    In this moment, it is clear that we’ve got a lot to grieve about. We are facing unprecedented social, environmental and political challenges on a global scale. Against the backdrop of Covid-19, we are navigating individual grief, the loss of loved ones, the historical grief of colonisation, migration and displacement, environmental grief, and other forms of harm taking place on Earth. This is currently laid bare for all to see. Something needs to change. We must grieve for these systems and allow them to compost, so we can grow more beautiful futures from the fertile soil of our loss.
                  </p>
                  <p class="max mb-2">
                    So how about joining a healing ritual conducted by Camille, whose tender words and movements will soothe you back into connection with your feelings? You can practice with this video in your own living room. We suggest playing the video either with headphones or on good speakers so you can enjoy the bass frequencies.
                  </p>
                </div>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    ZACH BLAS (United Kingdom)
                    <br />The Doors (2019)
                    <br />Video, duration 41 min 25 sec
                  </p>
                  <p class="max mb-2">
                    The Doors looks closely at Silicon Valley’s connections to the Californian counterculture of the 1960s, exploring psychedelia, drug use and artificial intelligence. It is a sequel to Contra-Internet: Jubilee 2033: a film that follows novelist-philosopher Ayn Rand on an acid trip in which she bears witness to a dystopian future of the Internet. The Doors is set within a mystical artificial garden, and features sequences of computer graphics and psychedelic machine learning-generated imagery related to a new wave of interest in substances known as ‘nootropics’ that enhance cognitive performance.
                  </p>
                  <p class="max mb-2">
                    In contrast to the ‘turn on, tune in, drop out’ ethos, taking nootropics or ‘smart drugs’ has gained popularity in the tech industry as a way of unlocking the mind and being able to work harder and faster. Nootropics include commercially available combination ‘stacks’ as well as microdoses of LSD and psilocybin mushrooms. The AI driving this video was trained on image datasets of psychedelic rock posters, LSD blotter art, brains, glass architecture, sacred geometry, broken glass and lizard skin, while the AI soundtrack is generated from binaural beats, crystal bowl sound baths, ASMR keyboard typing, and music by The Doors. The machine-learning imagery, which is halted before it coheres into recognisable patterns, echoes the saturated, colourful imagery associated with psychedelia. Evoking a 1960s liquid light show, The Doors proposes AI as a generator of a new psychedelic experience for the nootropics age, provoking hallucinations of how to see and control the future, optimise the brain for labour and live forever.
                  </p>
                  <p class="max mb-2">
                    This is an online approximation of a multimedia installation commissioned by Edith-Russ-Haus für Medienkunst, de Young Museum, and Van Abbemuseum.
                  </p>
                </div>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    YIN-JU CHEN (Taiwan)
                    <br />Extrastellar Evaluations III : Entropy : 25800 (2018)
                    <br />Video (Color/ BW | stereo | 1080p HD | 24p), duration 16 min 50 sec
                  </p>
                  <p class="max mb-2">
                    Extrastellar Evaluations III : Entropy : 25800 looks at human civilisation and humanity’s future through the prisms of space physics, extra-terrestrial myths and cosmography.
                  </p>
                  <p class="max mb-2">
                    This work attempts to reveal exactly when doomsday will take place, using hypotheses and prophecies founded on a choreography of fragments of history, mass media imagery and information. Extrastellar Evaluations III : Entropy : 25800 further adapts the notion of ‘entropy’ from the second law of thermodynamics, and connects it to the avarice and belligerence of human nature. Interspersed throughout the video is commentary from a non-human intelligence named Ra on the subject of everything being the distortion of the one infinite Creator.
                  </p>
                </div>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    JOSHUA CITARELLA (USA)
                    <br />CYF Cutscenes (2021)
                    <br />Interactive website and video links
                  </p>
                  <p class="max mb-2">
                    CYF Cutscenes maps the radical fringes of today’s chaotic online political landscape. ‘Metapolitics’ is a term used to describe ideologies that fall outside the bounds of the ‘Overton window’, the range of policies acceptable to the mainstream. The goal of metapolitics is to expand the limits of acceptable discourse and inject radical ideas into the mainstream.
                  </p>
                  <p class="max mb-2">
                    Much of today’s discourse is routed through social media and algorithmic recommendations. In CYF Cutscenes, each link represents one node of content that young ideologues might encounter online while en route to metapolitical ideas. Political speech is being curtailed by the increasingly narrow constraints of social media, so many of these videos may soon disappear.
                  </p>
                </div>
                <!--  
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    AAMON HAWK (USA)
                    <br />Mind Chasm (2021)
                    <br />Video, duration XX min XX sec
                  </p>
                  <p class="max mb-2">
                    Gaze into the mind of Brian Rose as he uncovers dark and forbidden ‘truths’ about the world from the demigod David Icke.
                  </p>
                </div>
                -->
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    ELIE WYATT
                    <br />cherrypicker (2021)
                    <br />Video, infinite duration
                    <br />Sound by Aubrey Jackson Blake
                  </p>
                  <p class="max mb-2">
                    cherrypicker is an infinitely looping video which explores how photographic practices are used to support and validate conspiracies and belief systems. Responding to the rampant proliferation of photo-as-(pseudo)evidence in 21st century online cultures, the work highlights how the contemporary photographic detail is hijacked to promote myriad agendas, from UFO conspiracies to time travel and the cult of celebrity. Focusing on the circle as a powerful graphic mechanism used repeatedly to denote an area of special importance within the photograph, the work seeks to indicate the increasingly entangled boundaries between insider and outsider, natural and supernatural, belief and knowledge, fact and fiction.
                  </p>
                  <p class="max mb-2">
                    Mimicking the artist’s own experiences of image consumption and information onslaught in oversaturated online spaces, cherrypicker flashes through over a thousand found images in a fast-paced looping sequence, immersing the viewer in an eerie and uncomfortable world of Kate Middleton’s knees and top-secret military operations. The work is accompanied by a sound track by Aubrey Jackson Blake comprising ominous sonic interpretations of computer systems and sci-fi cinema.
                  </p>
                </div>
                
                <!--  
              </div>
              <div class="col-lg-4">
                <p class="font-s font-soft mb-4 pb-2">&nbsp;</p>
                -->

                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    GEOFFREY LILLEMON (USA)
                    <br />Parallel Archeologies (2020)
                    <br />Video, duration 4 min 12 sec
                  </p>
                  <p class="max mb-2">
                    Parallel Archaeologies is an ancient portal that has opened up at the bottom of a well. Like a black hole, it sucks our attention inwards, streaming distortions of alternate Internets and code-cracked dimensions as we fall into a cosmic, spiralling, binary bliss – but then the robotic hacker cats come and mess it all up.
                    <br />It all starts when The Gods assemble a select group of ancient avatars to decide on the shape of a new, fantasy universe. The avatars get to work, but quickly realize they can’t agree on what shape the new universe should be! The mermaid wants it to be square, the centaur wants it cylindrical, and the reptilian wants it ‘Mobius’.
                    <br />Frustrated by their inability to decide, they all fall into a deep slumber.
                    <br />While they sleep, a clowder of hacker-cats descend upon and spoil their plans by stealing their avatar code and sending it to an AI engine. 
                    <br />When the ancients awaken, they find themselves trapped inside AI software, their identities consumed by data libraries. Stuck with only fragments of their eyes freaking out, the Internet collapses, sending the universe into an endless binary black hole. Until, that is, it restarts…
                  </p>
                  <p class="max mb-2">
                    Commissioned by Cinekid, supported by Mondriaan Fund
                  </p>
                </div>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    JULIETTE LIZOTTE (France)
                    <br />Sisters of the Wind (2021)
                    <br />Online platform
                    <br />Sisters of the Wind is the fruit of artistic research into witches, eco-feminism and science fiction from 2018 to 2021. It is a story woven through seven videos that can be experienced in different ways: as an online world-building workshop and role-play session, as a publication, or as an interactive audio-visual performance. For Weird Gnosis, Sisters of the Wind was adapted as an online experience. 
                  </p>
                  <p class="max mb-2">
                    In the current context of the global pandemic, it is important to find new and safe ways of being together and reinforcing our bonds. The Sisters of the Wind experience was first imagined as a physical one, but it feels just as relevant in an online format, reinventing ways of feeling close to each other and to the world around us. 
                  </p>
                  <p class="max mb-2">
                    Sisters… ˜o˚ ‘‘.)* ‘ ‘‘.’··º ° ‘‘ ‘ ‘ ·’ ‘0’ .º•.· ·.˜ *,’,˚˚ ˚oº°•˜ 
                    The wind is returning, as it always does. Sometimes it blows so hard that it carries artefacts away from the cities it has torn apart: seeds from faraway places, trees that didn’t have enough time to grow strong enough. As the wind comes and goes in waves you relocate, always seeking a protected area in which to settle. You are witches. Together – from maiden to mother to crone – you pay attention to the world and try to make sense of this life through the phases of the moon. The feminine spirit dominates in your community, and all gender expressions are celebrated. When your precarious way of life is threatened by an unsettling prophecy of a deadly wind that will prepare the earth for a new cycle, will you go on a journey to find the source of this wind? What will you discover on the way? This adventure will transform you, your sisters and the earth forever. 
                  </p>
                  <p class="max mb-2">
                    Let’s embark together on this wonderful adventure! 
                  </p>
                </div>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    AGNES MOMIRSKI (Slovenia / the Netherlands)
                    <br />siXren (verbum medicinae) (2020)
                    <br />Video, duration 37 min
                  </p>
                  <p class="max mb-2">
                    Sound: the missing link between man and nature. Ancient patterns of language and sound have long been seen as healing, transformative and medicinal agents. Practices such as Ancient Greek rhetoric, word magic and ritual poetry, as well as contemporary cognitive science and wellbeing methods, all utilise the primordial power of utterance, rhythm and sound to affect our animal senses, and consequently our body biology, brain chemistry and sensory and cognitive clarity. 
                    <br />The work explores the psychoacoustic effects of ancient verbal and sound formulas used in healing ceremonies, and abstracts and reapplies them into the matrix of contemporary sounds. Sonically and visually, we enter the liminal space between Earth-rhythms and noise-music, between digital and animate, pre-modern and hyper-modern.
                    <br />The siXren (verbum medicinae) project was inspired by models of ancient healing rhetoric and verbal formulas, which establish a new relationship with (inner) nature for the coming post-human era, and inform the current sonic imaginary in our techno-environment with poetic and healing sensibility. 
                  </p>
                  <p class="max mb-2">
                    siXren (verbum medicinae) was made in collaboration with beepblip (sound) and Brina Vidic (visual and costume design); video DOP Rajko Bizjak.
                  </p>
                </div>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    SUZANNE TREISTER (United Kingdom)
                    <br />TECHNOSHAMANIC SYSTEMS: New Cosmological Models for Survival (2021)
                    <br />Online presentation
                  </p>
                  <p class="max mb-2">
                    TECHNOSHAMANIC SYSTEMS presents microcosmic, non-colonialist plans towards a techno-spiritual imaginary of alternative visions of survival on Earth and habitation of the cosmos. 
                  </p>
                  <p class="max mb-2">
                    TECHNOSHAMANIC SYSTEMS encourages the unification of art, spirituality, science and technology through hypnotic visions of our potential communal futures alongside those of possible extra-terrestrial entities or civilisations.
                  </p>
                  <p class="max mb-2">
                    Countering invasive agendas of governments and the private space industry, TECHNOSHAMANIC SYSTEMS proposes a political metamorphosis and transmutation of human consciousness towards a new Earthly and interplanetary paradigm.
                  </p>
                  <p class="max mb-2">
                    TECHNOSHAMANIC SYSTEMS consists of multiple components from the categories Project Diagrams, Earth Eco Systems and Architectures, Reinvented Technologies, Interplanetary Social Structures, Designs for Spacecraft, Apparel, Interplanetary Space Habitations, Interplanetary Meditation and Biospheres Islands, Crystal Architectures, Vultures, Rituals, Stars and Visions.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 d-none d-lg-block">
                <h2 class="font-s font-soft mb-4 pb-2">
                  About
                </h2>
                <div class="font-s font-soft mb-4 pb-2">
                  <p class="max mb-2">
                    Weird Gnosis is a project curated by Inez de Coo and Marc Tuters and produced by <a href="https://impakt.nl/" target="_blank" class="font-green">IMPAKT</a>. The web-project is supported by the Creative Industries Fund NL, City of Utrecht, and Democracy & Media Foundation and created by Alex Piacentini. Sound design by Marco Fasoli.
                  </p>
                  <p class="max mb-2">
                    <img src="images/logos.svg" class="logos mt-3" />
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>

<script>

var works = <?= json_encode($works) ?>;
var lastHoveredWork = null;
const soundtrack = document.createElement('audio');

var persp = 250;
var perspMin = 1000;
var perspMax = 2;
var body = document.body;
var space = document.getElementById("space");
var room = document.getElementById("room");
var ui = document.getElementById("ui");
var w = window.innerWidth;
var h = window.innerHeight;
var mouseX = 0;
var mouseY = 0;

var rotCurrX = 0;
var rotCurrY = 0;
var rotTargetX = 0;
var rotTargetY = 0;
var loopCount = 0;
var timeout;

var playOnStart;
var audioMuted;

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

function draw () {
  var threshold = 2;
  rotCurrX += (rotTargetX - rotCurrX) * 0.01;
  rotCurrY += (rotTargetY - rotCurrY) * 0.01;
  room.style.transform = 'translate3d(0,0,0) '+'rotate3d(1,0,0,'+ rotCurrX + 'deg) rotate3d(0,1,0,'+ rotCurrY + 'deg) rotate3d(0,0,1,0)';
  // if (Math.abs(rotCurrX - rotTargetX) > threshold || Math.abs(rotCurrY - rotTargetY) > threshold) {
  //   timeout = setTimeout(function () {
  //     smoothlyRotateToTarget();
  //   }, delay);
  // }
}

function openWork (slug) {
  // alert(slug);
  location.hash = "#/"+ slug;
}

function closeWork (slug) {
  location.hash = "";
  if (!audioMuted) {
    // soundtrack.play();
    fadein(soundtrack);
  }
  $("#modal-work .mmodal-content").empty();
  $("#modal-work").addClass("hide");
  $("#modal-home").addClass("hide");
  $(ui).removeClass("hide")

    .removeClass("home");

}

function closeHome () {
  $("#modal-home").addClass("hide");
  $(ui).removeClass("hide").removeClass("home");
  perspMinimum();
  if (!audioMuted) {
    // soundtrack.play();
    fadein(soundtrack);
  }
  p5Sketch.noLoop();
}

function openHome () {
  $("#modal-home").removeClass("hide");
  $(ui).addClass("hide").addClass("home");
  perspIncrease();
  p5Sketch.loop();
}

function loadWorkContent (slug) {
  $("#modal-work .mmodal-content").empty();
  var callUrl = "works/"+ slug +".php";
  
  <?php /*
  var callUrl = "<?= WG_SITE_URL ?>/works/"+ slug +".php";
  */ ?>

  console.log(callUrl);
  $.get(callUrl, function(data) {
    $("#modal-work .mmodal-content").html(data);
    $("#modal-work").removeClass("hide");
    $("#modal-home").addClass("hide");
    $(ui).addClass("hide")

      .removeClass("home");;
  });
}

function handleAudioClick () {
  if (soundtrack.paused) {
    // soundtrack.play();
    fadein(soundtrack);
    audioMuted = false;
    $(".audio-control").text("AUDIO OFF");
  } else {
    // soundtrack.pause();
    fadeout(soundtrack);
    audioMuted = true;
    $(".audio-control").text("AUDIO ON");
  }
}

function scrollToInfo () {
  $("#modal-home .mmodal-content").animate({
    scrollTop: $("#home-texts").offset().top - 100
  }, 1200);
}

// -----------------------------------------------------------------------------
// HASH ROUTING
// -----------------------------------------------------------------------------

if ("onhashchange" in window) {  
  console.log("The browser supports the hashchange event");
  locationHashChanged(true);
}  

function locationHashChanged (first) {
  console.log("hash:", location.hash);
  
  if (location.hash.substr(0, 2) === "#/") {
  
    var slug = location.hash.substr(2);
    console.log("work", slug);
    console.log("-----------------", soundtrack.readyState);
    if (soundtrack.readyState) {
      // soundtrack.pause();
      fadeout(soundtrack);
    }
    loadWorkContent(slug);
  
  } else if (location.hash === "" || location.hash === "#") {

    playOnStart = true;

  }
}

window.onhashchange = locationHashChanged;

// -----------------------------------------------------------------------------
// AUDIO
// -----------------------------------------------------------------------------

if (soundtrack.canPlayType('audio/mpeg')) {
  soundtrack.setAttribute('src','sound/marco-3.mp3');
} else if (soundtrack.canPlayType('audio/ogg')) {
  // soundtrack.setAttribute('src','audiofile.ogg');
  console.log("no ogg available yet")
}
// soundtrack.currentTime = 45;
if (playOnStart) {
  // soundtrack.play();
  fadein(soundtrack);
}


// set loop
if (typeof soundtrack.loop == 'boolean') {
  soundtrack.loop = true;
} else {
  soundtrack.addEventListener('ended', function() {
    this.currentTime = 0;
    this.play();
  }, false);
}




var interval = 50; // 200ms interval
var fadeAudio;
var vol = undefined;
var inc = 0.05;

function fadein (audio) {
  clearInterval(fadeAudio);
  if (!audio.readyState) {
    return false;
  }  
  var targetVolume = 1;
  audio.volume = 0;
  vol = 0;
  audio.play();
  fadeAudio = setInterval(function () {
    if (vol < targetVolume && vol < 1) {
      if (vol > 0.95) {
        vol = 1;
      } else {
        vol += inc;
      }
      audio.volume = vol;
      console.log(audio.volume, vol)
    }
    else {
      clearInterval(fadeAudio);
    }
  }, interval);
}

function fadeout (audio) {
  clearInterval(fadeAudio);
  if (!audio.readyState) {
    return false;
  }  
  var targetVolume = 0;
  vol = audio.volume;
  fadeAudio = setInterval(function () {
    if (vol > 0) {
      if (vol < 0.05) {
        vol = 0;
      } else {
        vol -= inc;
      }
      audio.volume = vol;
      console.log(audio.volume, vol)
    }
    else {
      audio.pause();
      clearInterval(fadeAudio);
    }
  }, interval);
}




// // via https://stackoverflow.com/a/7942472
// // Initial volume of 0.20
// // Make sure it's a multiple of 0.05
// var vol = 0.20;
// var interval = 200; // 200ms interval
// var fadeout = setInterval(function () {
//   // Reduce volume by 0.05 as long as it is above 0
//   // This works as long as you start with a multiple of 0.05!
//   if (vol > 0) {
//     vol -= 0.05;
//     audio.volume = vol;
//   }
//   else {
//     // Stop the setInterval when 0 is reached
//     clearInterval(fadeout);
//   }
// }, interval);

// -----------------------------------------------------------------------------
// EVENTS
// -----------------------------------------------------------------------------

body.addEventListener("mousemove", (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;
  var xNorm = apMap(mouseX, 0, w, -1, 1);
  var yNorm = apMap(mouseY, 0, h, 1, -1);
  var coefX = 10; 
  var coefY = -10;
  rotTargetX = coefX ? (2 * coefX / w * mouseX - coefX) : 0;
  rotTargetY = coefY ? (2 * coefY / h * mouseY - coefY) : 0;
});

document.addEventListener('keydown', function (e) {
  console.log(e.code, e.key);
  if (e.key === "-") { perspDecrease(); }
  if (e.key === "+") { perspIncrease(); }
  if (e.key === "0") { perspMinimum(); }
  if (e.key === "9") { perspMaximum(); }
  if (e.key === "x") { fuckupToggle(); }
  if (e.key === "b") { $(".modal").toggleClass("blurred"); }
  if (e.key === "o") { closeHome("test content"); }
  if (e.key === "c") { openHome(); }
});

$("[id^='item']").mouseover(function () {
  // $(["[id^='preview-']"]).addClass("hide");
  $(".preview").addClass("hide");
  
  var id = this.id.split("item")[1];
  console.log("in", id);
  var work = works[id];
  lastHoveredWork = work.slug;
  
  setTimeout(function () {
    $("#preview-" + id).removeClass("hide");
    $("#bottom .btn-mob").removeClass("hide");
  }, 200);

  // $("#preview-" + id).removeClass("hide");
  $("#bottom .title").text(work.title);
  $("#bottom .author").text(work.author);

  // debugger;
}).mouseout(function () {
  // debugger;
  
  var id = this.id.split("item")[1];
  console.log("out", id);
  $("#preview-" + id).addClass("hide");
  $("#bottom .title").text("");
  $("#bottom .author").text("");

  setTimeout(function () {
    $("#bottom .btn-mob").addClass("hide");
  }, 200);

}).click(function () {
  if (!window.USER_CAN_TOUCH) {
    openWork(lastHoveredWork);
  }
});

// ---------------------------------------------------------------------------
// DETECT TOUCH DEVICES
// ---------------------------------------------------------------------------

window.addEventListener('touchstart', function onFirstTouch () {
  window.USER_CAN_TOUCH = true;
  // $("body").addClass("user_can_touch");
  window.removeEventListener('touchstart', onFirstTouch, false);
}, false);



</script>
</body>
</html>