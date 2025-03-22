<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porez</title>
  <style>
    </style>
</head>
<body>
  <form action="porez.php" method="GET">
    <input type="text" name="cena_proizvoda" placeholder="Unesite cenu proizvoda">
    <select name="izbor_proizvoda" id="">
      <option value="1">Hrana</option>
      <option value="2">Oprema za racunare</option>
    </select>
    <input type="checkbox" name="porez">
    <label for="checkbox">Izracunaj porez</label>
    <button>Izracunaj cenu</button>
  </form>
</body>
</html>