<?php
$points = 0;
if (isset($_GET["q1"])) {
  $points ++;
}

if (!isset ($_GET["q2[0]"]) && !isset ($_GET["q2[1]"]) && isset ($_GET["q2[2]"]) && isset($_GET["q2[3]"])) {
  $points ++;
}

if (isset($_GET['q3a']) && isset($_GET['q3b']) && !isset($_GET['q3c']) && !isset($_GET['q3d']) && isset($_GET['q3e']) && isset($_GET['q3f']) && isset($_GET['q3g'])
&& !isset($_GET['q3h'])) {
  $points += 3;
}

if ($_GET["q4"] == "leiji matsumoto") {
  $points += 2;
}

if ($_GET["q5"] == "5") {
  $points += 2;
}

require_once("head.html");
if ($points == 1) {
  echo "<h3>Tu as $points point !</h3>";
  # code...
} else {
  echo "<h3>Tu as $points points !</h3>";
}
require_once("foot.html");
