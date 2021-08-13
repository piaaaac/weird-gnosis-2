<?php

// -------------------------------------------------------------------
// ABSOLUTE PATHS
// About setting absolute paths read these 2 answers:
// https://stackoverflow.com/a/10425153/2501713
// https://stackoverflow.com/a/18220999/2501713
// Use SITE_ROOT to reference resources
// Use SITE_URL to redirect

$env = "dev_local";
$site_url = "http://localhost:8888/weird-gnosis-2/prod";

if(false !== strpos($_SERVER['HTTP_HOST'], "impakt.nl")){

  $env = "prod";
  $site_url = "https://weirdgnosis.impakt.nl";

} elseif(false !== strpos($_SERVER['HTTP_HOST'], "alexpiacentini")){

  $env = "dev_ap";
  $site_url = "https://www.alexpiacentini.com/test/weird-gnosis/prod";

}

define ( 'WG_SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] );
define ( 'WG_SITE_URL',  $site_url );

// echo "<br>server: ". $_SERVER['HTTP_HOST'];
// echo "<br>env: ". $env;
// echo "<br>WG_SITE_ROOT: ". WG_SITE_ROOT;
// echo "<br>WG_SITE_URL: ". WG_SITE_URL;
// echo "<br>";
// exit();

?>