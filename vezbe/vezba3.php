<?php
if(isset($_GET["broj_1"]) && isset($_GET["broj_2"])) {
  $prviBroj = $_GET["broj_1"];
  $drugiBroj = $_GET["broj_2"];
}

if(!is_numeric($prviBroj) && !is_numeric($drugiBroj)) {
  echo "Nije integer";
}

$zbir = $prviBroj + $drugiBroj;

echo $zbir;



?>