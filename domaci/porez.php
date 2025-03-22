<?php

$cena_proizvoda = $_GET["cena_proizvoda"];
$izbor_proizvoda = $_GET["izbor_proizvoda"];
$porez = $_GET["porez"];

if($izbor_proizvoda == 1) {
  $cena = $cena_proizvoda + 50;
} else{
  $cena = $cena_proizvoda + 350;
}

if(isset($porez)) {
  $porez = $cena * 0.1;
  $cena = $cena + $porez;  
}

echo $cena;

?>