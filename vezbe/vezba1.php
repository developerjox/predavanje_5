<?php

$broj_1 = $_GET["broj_1"];
$parnostBroja = $broj_1 % 2;

if($parnostBroja == 0) {
  echo "Paran broj";
} else {
  echo "Neparan broj";
}

?>