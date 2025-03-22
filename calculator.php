<?php

// globalne varijable - varijable koje su dostupne na svakom serveru u svakom trenutku
// primeri -> $_SERVER, $_GET, $_POST, $_REQUEST...
// one su uvek associjativni array

//var_dump($_GET);

$broj_1 = $_GET["broj_1"];
$broj_2 = $_GET["broj_2"];
$operacija = $_GET["operacija"];

if($operacija == 1) {
  $sabiranje = $broj_1 + $broj_2;
  echo $sabiranje;
} else {
  $oduzimanje = $broj_1 - $broj_2;
  echo $oduzimanje;
}



?>