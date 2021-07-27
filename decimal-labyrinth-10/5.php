<?php
require "../kybalion/ch.php";

$numogramSvg = <<< EOT
<svg width="1045px" height="560px" viewBox="0 0 1045 560" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter x="-4.6%" y="-4.6%" width="108.9%" height="109.2%" filterUnits="objectBoundingBox" id="filter-1">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-6.9%" y="-9.5%" width="114.1%" height="119.5%" filterUnits="objectBoundingBox" id="filter-2">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-6.5%" y="-2.0%" width="112.5%" height="104.0%" filterUnits="objectBoundingBox" id="filter-3">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-5.1%" y="-923.2%" width="109.8%" height="1946.5%" filterUnits="objectBoundingBox" id="filter-4">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-4.7%" y="-282.0%" width="109.2%" height="701.1%" filterUnits="objectBoundingBox" id="filter-5">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-2.2%" y="-3.0%" width="104.6%" height="105.9%" filterUnits="objectBoundingBox" id="filter-6">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-1.6%" y="-3.0%" width="103.0%" height="105.9%" filterUnits="objectBoundingBox" id="filter-7">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-2.6%" y="-9.5%" width="105.1%" height="118.4%" filterUnits="objectBoundingBox" id="filter-8">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
        <filter x="-7.3%" y="-12.3%" width="114.8%" height="124.7%" filterUnits="objectBoundingBox" id="filter-9">
            <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
        </filter>
    </defs>
    <g id="numogram" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Group" transform="translate(5.000000, 4.887074)">
            <circle id="Oval-Copy-6" stroke="#red" cx="200.670605" cy="110.04517" r="43.1549687"></circle>
            <circle id="Oval-Copy-7" stroke="#13FF00" cx="309.996525" cy="449.530924" r="43.1549687"></circle>
            <circle id="Oval-Copy-8" stroke="#13FF00" cx="396.306463" cy="507.070883" r="43.1549687"></circle>
            <circle id="Oval-Copy-9" stroke="#13FF00" cx="43.1549687" cy="375.448228" r="43.1549687"></circle>
            <circle id="Oval-Copy-10" stroke="#13FF00" cx="43.1549687" cy="258.210563" r="43.1549687"></circle>
            <circle id="Oval-Copy-2" stroke="#13FF00" cx="588.346074" cy="275.676615" r="43.1549687"></circle>
            <circle id="Oval-Copy-3" stroke="#13FF00" cx="722.845726" cy="275.676615" r="43.1549687"></circle>
            <circle id="Oval-Copy-4" stroke="#13FF00" cx="857.345379" cy="275.676615" r="43.1549687"></circle>
            <circle id="Oval-Copy-5" stroke="#13FF00" cx="991.845031" cy="275.676615" r="43.1549687"></circle>
            <path d="M199.052293,123.351286 L199.052293,122.617651 C197.541869,122.617651 196.031445,122.142946 196.031445,119.855733 L196.031445,99.313968 C196.031445,97.0699097 197.541869,96.595205 199.052293,96.595205 L199.052293,95.8615705 L189.946595,95.8615705 L189.946595,96.595205 C191.457019,96.595205 193.053753,97.0699097 193.053753,99.313968 L193.053753,119.855733 C193.053753,122.142946 191.457019,122.617651 189.946595,122.617651 L189.946595,123.351286 L199.052293,123.351286 Z M211.351459,123.351286 L211.351459,122.617651 C209.841035,122.617651 208.330612,122.142946 208.330612,119.855733 L208.330612,99.313968 C208.330612,97.0699097 209.841035,96.595205 211.351459,96.595205 L211.351459,95.8615705 L202.245761,95.8615705 L202.245761,96.595205 C203.756185,96.595205 205.352919,97.0699097 205.352919,99.313968 L205.352919,119.855733 C205.352919,122.142946 203.756185,122.617651 202.245761,122.617651 L202.245761,123.351286 L211.351459,123.351286 Z" id="II" fill="#red" fill-rule="nonzero"></path>
            <path d="M38.9905142,271.157054 L46.8447186,246.990271 C47.578353,244.789368 49.3908617,244.400973 50.8581306,244.400973 L50.8581306,243.667338 L40.9756428,243.667338 L40.9756428,244.400973 C43.3923211,244.400973 45.5069145,244.789368 44.7732801,246.947116 L39.1631341,263.561779 C38.6021195,265.244823 38.3000347,267.273106 38.1705698,268.912995 L30.0574357,243.667338 L24.0588951,243.667338 L24.0588951,244.400973 C25.526164,244.400973 27.3818277,244.789368 28.0723072,246.990271 L35.9265115,271.157054 L38.9905142,271.157054 Z M60.9563933,271.157054 L60.9563933,270.423419 C59.4459694,270.423419 57.9355455,269.948714 57.9355455,267.661501 L57.9355455,247.119736 C57.9355455,244.875678 59.4459694,244.400973 60.9563933,244.400973 L60.9563933,243.667338 L51.8506949,243.667338 L51.8506949,244.400973 C53.3611188,244.400973 54.9578527,244.875678 54.9578527,247.119736 L54.9578527,267.661501 C54.9578527,269.948714 53.3611188,270.423419 51.8506949,270.423419 L51.8506949,271.157054 L60.9563933,271.157054 Z" id="VI" fill="#13FF00" fill-rule="nonzero"></path>
            <path d="M592.877345,288.623106 L592.877345,287.889471 C591.366921,287.889471 589.856498,287.414767 589.856498,285.127553 L589.856498,264.585788 C589.856498,262.34173 591.366921,261.867025 592.877345,261.867025 L592.877345,261.133391 L583.771647,261.133391 L583.771647,261.867025 C585.282071,261.867025 586.878805,262.34173 586.878805,264.585788 L586.878805,285.127553 C586.878805,287.414767 585.282071,287.889471 583.771647,287.889471 L583.771647,288.623106 L592.877345,288.623106 Z" id="I" fill="#13FF00" fill-rule="nonzero"></path>
            <path d="M706.382106,288.623106 L714.23631,264.456323 C714.969944,262.25542 716.782453,261.867025 718.249722,261.867025 L718.249722,261.133391 L708.367234,261.133391 L708.367234,261.867025 C710.783912,261.867025 712.898506,262.25542 712.164871,264.413168 L706.554726,281.027831 C705.993711,282.710875 705.691626,284.739159 705.562161,286.379047 L697.449027,261.133391 L691.450486,261.133391 L691.450486,261.867025 C692.917755,261.867025 694.773419,262.25542 695.463899,264.456323 L703.318103,288.623106 L706.382106,288.623106 Z M728.347985,288.623106 L728.347985,287.889471 C726.837561,287.889471 725.327137,287.414767 725.327137,285.127553 L725.327137,264.585788 C725.327137,262.34173 726.837561,261.867025 728.347985,261.867025 L728.347985,261.133391 L719.242286,261.133391 L719.242286,261.867025 C720.75271,261.867025 722.349444,262.34173 722.349444,264.585788 L722.349444,285.127553 C722.349444,287.414767 720.75271,287.889471 719.242286,287.889471 L719.242286,288.623106 L728.347985,288.623106 Z M740.647151,288.623106 L740.647151,287.889471 C739.136727,287.889471 737.626303,287.414767 737.626303,285.127553 L737.626303,264.585788 C737.626303,262.34173 739.136727,261.867025 740.647151,261.867025 L740.647151,261.133391 L731.541452,261.133391 L731.541452,261.867025 C733.051876,261.867025 734.64861,262.34173 734.64861,264.585788 L734.64861,285.127553 C734.64861,287.414767 733.051876,287.889471 731.541452,287.889471 L731.541452,288.623106 L740.647151,288.623106 Z M752.946317,288.623106 L752.946317,287.889471 C751.435893,287.889471 749.925469,287.414767 749.925469,285.127553 L749.925469,264.585788 C749.925469,262.34173 751.435893,261.867025 752.946317,261.867025 L752.946317,261.133391 L743.840618,261.133391 L743.840618,261.867025 C745.351042,261.867025 746.947776,262.34173 746.947776,264.585788 L746.947776,285.127553 C746.947776,287.414767 745.351042,287.889471 743.840618,287.889471 L743.840618,288.623106 L752.946317,288.623106 Z" id="VIII" fill="#13FF00" fill-rule="nonzero"></path>
            <path d="M847.398158,288.623106 L847.398158,287.889471 C845.887735,287.889471 844.377311,287.414767 844.377311,285.127553 L844.377311,264.585788 C844.377311,262.34173 845.887735,261.867025 847.398158,261.867025 L847.398158,261.133391 L838.29246,261.133391 L838.29246,261.867025 C839.802884,261.867025 841.399618,262.34173 841.399618,264.585788 L841.399618,285.127553 C841.399618,287.414767 839.802884,287.889471 838.29246,287.889471 L838.29246,288.623106 L847.398158,288.623106 Z M858.359521,288.623106 L858.359521,287.889471 C856.547012,287.889471 855.338673,287.630542 856.547012,285.688568 L862.675017,276.06501 L868.587248,285.645413 C869.795587,287.587387 868.716713,287.889471 867.076824,287.889471 L867.076824,288.623106 L876.743537,288.623106 L876.743537,287.889471 C875.233113,287.889471 873.03221,287.587387 871.823871,285.688568 L864.746456,274.166191 L871.090236,264.067929 C872.298575,262.125955 874.413169,261.867025 875.837283,261.867025 L875.837283,261.133391 L866.817894,261.133391 L866.817894,261.867025 C868.630403,261.867025 869.881897,262.125955 868.673558,264.067929 L863.538117,272.224218 L856.719632,261.133391 L850.548471,261.133391 L850.548471,261.867025 C851.972585,261.867025 854.130334,262.16911 855.295518,264.111084 L861.466678,274.123036 L854.173489,285.688568 C852.965149,287.630542 850.807401,287.889471 849.383287,287.889471 L849.383287,288.623106 L858.359521,288.623106 Z" id="IX" fill="#13FF00" fill-rule="nonzero"></path>
            <path d="M969.490757,292.895448 C975.532453,290.21984 979.545865,283.919214 979.545865,275.46084 C979.545865,267.002467 975.964003,261.262856 969.490757,258.457783 L969.231828,258.932487 C973.676789,261.392321 976.956567,265.060493 976.956567,275.46084 C976.956567,285.861188 973.202085,290.13353 969.231828,292.377588 L969.490757,292.895448 Z M992.621821,292.938603 L992.621821,258.544093 L991.068242,258.544093 L991.068242,292.938603 L992.621821,292.938603 Z M1014.19931,292.895448 L1014.45823,292.377588 C1010.48798,290.13353 1006.7335,285.861188 1006.7335,275.46084 C1006.7335,265.060493 1010.01327,261.392321 1014.45823,258.932487 L1014.19931,258.457783 C1007.72606,261.262856 1004.1442,267.002467 1004.1442,275.46084 C1004.1442,283.919214 1008.15761,290.21984 1014.19931,292.895448 Z" id=")|(" fill="#13FF00" fill-rule="nonzero"></path>
            <path d="M35.3870744,389.113968 L35.3870744,388.380334 C33.8766505,388.380334 32.3662265,387.905629 32.3662265,385.618416 L32.3662265,365.07665 C32.3662265,362.832592 33.8766505,362.357887 35.3870744,362.357887 L35.3870744,361.624253 L26.281376,361.624253 L26.281376,362.357887 C27.7917999,362.357887 29.3885337,362.832592 29.3885337,365.07665 L29.3885337,385.618416 C29.3885337,387.905629 27.7917999,388.380334 26.281376,388.380334 L26.281376,389.113968 L35.3870744,389.113968 Z M47.6862404,389.113968 L47.6862404,388.380334 C46.1758165,388.380334 44.6653926,387.905629 44.6653926,385.618416 L44.6653926,365.07665 C44.6653926,362.832592 46.1758165,362.357887 47.6862404,362.357887 L47.6862404,361.624253 L38.580542,361.624253 L38.580542,362.357887 C40.0909659,362.357887 41.6876998,362.832592 41.6876998,365.07665 L41.6876998,385.618416 C41.6876998,387.905629 40.0909659,388.380334 38.580542,388.380334 L38.580542,389.113968 L47.6862404,389.113968 Z M59.9854065,389.113968 L59.9854065,388.380334 C58.4749826,388.380334 56.9645587,387.905629 56.9645587,385.618416 L56.9645587,365.07665 C56.9645587,362.832592 58.4749826,362.357887 59.9854065,362.357887 L59.9854065,361.624253 L50.8797081,361.624253 L50.8797081,362.357887 C52.390132,362.357887 53.9868659,362.832592 53.9868659,365.07665 L53.9868659,385.618416 C53.9868659,387.905629 52.390132,388.380334 50.8797081,388.380334 L50.8797081,389.113968 L59.9854065,389.113968 Z" id="III" fill="#13FF00" fill-rule="nonzero"></path>
            <path d="M311.528527,462.477415 L319.382731,438.310632 C320.116366,436.109729 321.928874,435.721334 323.396143,435.721334 L323.396143,434.9877 L313.513655,434.9877 L313.513655,435.721334 C315.930334,435.721334 318.044927,436.109729 317.311293,438.267477 L311.701147,454.88214 C311.140132,456.565184 310.838047,458.593468 310.708582,460.233356 L302.595448,434.9877 L296.596908,434.9877 L296.596908,435.721334 C298.064177,435.721334 299.91984,436.109729 300.61032,438.310632 L308.464524,462.477415 L311.528527,462.477415 Z" id="V" fill="#13FF00" fill-rule="nonzero"></path>
            <path d="M387.610737,520.017373 L387.610737,519.283739 C386.100313,519.283739 384.589889,518.809034 384.589889,516.521821 L384.589889,495.980056 C384.589889,493.735997 386.100313,493.261293 387.610737,493.261293 L387.610737,492.527658 L378.505038,492.527658 L378.505038,493.261293 C380.015462,493.261293 381.612196,493.735997 381.612196,495.980056 L381.612196,516.521821 C381.612196,518.809034 380.015462,519.283739 378.505038,519.283739 L378.505038,520.017373 L387.610737,520.017373 Z M403.491765,520.017373 L411.345969,495.850591 C412.079604,493.649687 413.892113,493.261293 415.359382,493.261293 L415.359382,492.527658 L405.476894,492.527658 L405.476894,493.261293 C407.893572,493.261293 410.008165,493.649687 409.274531,495.807436 L403.664385,512.422099 C403.10337,514.105142 402.801286,516.133426 402.671821,517.773315 L394.558687,492.527658 L388.560146,492.527658 L388.560146,493.261293 C390.027415,493.261293 391.883079,493.649687 392.573558,495.850591 L400.427762,520.017373 L403.491765,520.017373 Z" id="IV" fill="#13FF00" fill-rule="nonzero"></path>
            <line x1="43.1549687" y1="258.210563" x2="200.670605" y2="110.404795" id="Line-5" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-1)"></line>
            <line x1="296.596908" y1="42.7162265" x2="200.670605" y2="110.404795" id="Line-5-Copy-8" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-2)"></line>
            <line x1="309.996525" y1="449.530924" x2="200.670605" y2="110.404795" id="Line-5-Copy-4" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-3)"></line>
            <line x1="722.845726" y1="275.676615" x2="857.345379" y2="275.676615" id="Line-5-Copy" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-4)"></line>
            <line x1="991.845031" y1="275.698193" x2="857.345379" y2="275.676615" id="Line-5-Copy-7" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-5)"></line>
            <line x1="296.596908" y1="42.7162265" x2="588.346074" y2="275.698193" id="Line-5-Copy-6" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-6)"></line>
            <line x1="396.20443" y1="506.96885" x2="857.345379" y2="271.157054" id="Line-5-Copy-2" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-7)"></line>
            <line x1="309.996525" y1="449.530924" x2="43.1549687" y2="375.448228" id="Line-5-Copy-3" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-8)"></line>
            <line x1="309.996525" y1="449.530924" x2="396.20443" y2="507.070883" id="Line-5-Copy-5" stroke="#13FF00" stroke-width="2" opacity="0.5" stroke-linecap="square" filter="url(#filter-9)"></line>
            <circle id="Oval-Copy" stroke="#13FF00" cx="296.330785" cy="43.1549687" r="43.1549687"></circle>
            <path d="M286.016748,56.4610841 L293.870952,32.2943016 C294.604587,30.0933982 296.417095,29.7050035 297.884364,29.7050035 L297.884364,28.971369 L288.001876,28.971369 L288.001876,29.7050035 C290.418555,29.7050035 292.533148,30.0933982 291.799514,32.2511466 L286.189368,48.8658096 C285.628353,50.5488534 285.326268,52.5771369 285.196803,54.2170257 L277.083669,28.971369 L271.085129,28.971369 L271.085129,29.7050035 C272.552397,29.7050035 274.408061,30.0933982 275.098541,32.2943016 L282.952745,56.4610841 L286.016748,56.4610841 Z M307.982627,56.4610841 L307.982627,55.7274496 C306.472203,55.7274496 304.961779,55.252745 304.961779,52.9655316 L304.961779,32.4237665 C304.961779,30.1797081 306.472203,29.7050035 307.982627,29.7050035 L307.982627,28.971369 L298.876928,28.971369 L298.876928,29.7050035 C300.387352,29.7050035 301.984086,30.1797081 301.984086,32.4237665 L301.984086,52.9655316 C301.984086,55.252745 300.387352,55.7274496 298.876928,55.7274496 L298.876928,56.4610841 L307.982627,56.4610841 Z M320.281793,56.4610841 L320.281793,55.7274496 C318.771369,55.7274496 317.260945,55.252745 317.260945,52.9655316 L317.260945,32.4237665 C317.260945,30.1797081 318.771369,29.7050035 320.281793,29.7050035 L320.281793,28.971369 L311.176095,28.971369 L311.176095,29.7050035 C312.686518,29.7050035 314.283252,30.1797081 314.283252,32.4237665 L314.283252,52.9655316 C314.283252,55.252745 312.686518,55.7274496 311.176095,55.7274496 L311.176095,56.4610841 L320.281793,56.4610841 Z" id="VII" fill="#13FF00" fill-rule="nonzero"></path>
        </g>
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
  <title>Decimal Labyrinth</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.3.1/p5.min.js" integrity="sha512-gQVBYBvfC+uyor5Teonjr9nmY1bN+DlOCezkhzg4ShpC5q81ogvFsr5IV4xXAj6HEtG7M1Pb2JCha97tVFItYQ==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="5.css">
  <script src="functions.js"></script>
  <style>

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

  <div id="ui">
    <div id="numogram"><?= $numogramSvg ?></div>
  </div>
  
  <div id="modal">
    <div id="modal-bg"></div>
    <div id="modal-content">
      <!--  
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">Ciao</div>
          <div class="col-6">Ciao</div>
        </div>
      </div>
      -->
    </div>
  </div>

<script>

  var persp = 250;
  var perspMin = 2000;
  var perspMax = 2;
  var body = document.body;
  var space = document.getElementById("space");
  var room = document.getElementById("room");
  var ui = document.getElementById("ui");
  var modal = document.getElementById("modal");
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

  body.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    var xNorm = apMap(mouseX, 0, w, -1, 1);
    var yNorm = apMap(mouseY, 0, h, 1, -1);


    // var coefX = 130; var coefY = -130;
    var coefX = 10; var coefY = -10;


    rotTargetY = coefX ? (2 * coefX / w * mouseX - coefX) : 0;
    rotTargetX = coefY ? (2 * coefY / h * mouseY - coefY) : 0;

    // room.style.transform = 'translate3d(0,0,0) '+'rotate3d(1,0,0,'+ rotTargetX + 'deg) rotate3d(0,1,0,'+ rotTargetY + 'deg) rotate3d(0,0,1,0)';

    // clearTimeout(timeout);
    // smoothlyRotateToTarget();
  });

  /*
  function smoothlyRotateToTarget () {
    // loopCount++;
    // console.log(loopCount);
    // var delay = 33;
    var delay = 100;
    var threshold = 2;
    rotCurrX += (rotTargetX - rotCurrX) * 0.0001;
    rotCurrY += (rotTargetY - rotCurrY) * 0.0001;
    room.style.transform = 'translate3d(0,0,0) '+'rotate3d(1,0,0,'+ rotCurrX + 'deg) rotate3d(0,1,0,'+ rotCurrY + 'deg) rotate3d(0,0,1,0)';
    if (Math.abs(rotCurrX - rotTargetX) > threshold || Math.abs(rotCurrY - rotTargetY) > threshold) {
      timeout = setTimeout(function () {
        smoothlyRotateToTarget();
      }, delay);
    }
  }
  */  

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
    if (e.key === "b") { $(modal).toggleClass("blurred"); }
    if (e.key === "o") { openContent("test content"); }
    if (e.key === "c") { closeModal(); }
  }
);

function draw () {

  var threshold = 2;
  rotCurrX += (rotTargetX - rotCurrX) * 0.01;
  rotCurrY += (rotTargetY - rotCurrY) * 0.01;
  // console.log(rotCurrY)
  room.style.transform = 'translate3d(0,0,0) '+'rotate3d(1,0,0,'+ rotCurrX + 'deg) rotate3d(0,1,0,'+ rotCurrY + 'deg) rotate3d(0,0,1,0)';
  // if (Math.abs(rotCurrX - rotTargetX) > threshold || Math.abs(rotCurrY - rotTargetY) > threshold) {
  //   timeout = setTimeout(function () {
  //     smoothlyRotateToTarget();
  //   }, delay);
  // }

}

function openContent (markup) {
  $(modal).removeClass("hide");
  $(ui).addClass("hide");
}

function closeModal () {
  $(modal).addClass("hide");
  $(ui).removeClass("hide");
}



</script>
</body>
</html>