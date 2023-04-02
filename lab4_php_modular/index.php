<?php

if (isset($_REQUEST['mod'])) {
    $mod = $_REQUEST['mod'];
} else {
    $mod = 'home';
}

switch ($mod) {
  case "home":
    require("home.php");
    break;
  case "tambah":
    require("tambah.php");
    break;
  case "about":
    require("about.php");
    break;
  default:
    require("home.php");
}
?>
