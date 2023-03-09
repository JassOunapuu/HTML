<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Harjutus</title>
</head>

<body>
<div class="container">

<h1>Harjutus 07</h1>



<?php
/* Jass Õunapuu 31.01.23 */
 

// Tervitus
echo "<br>Tervitus<br>";
function tervita($nimi) {
    echo "Tere, $nimi!";
  }
  
  $nimi = "päiksekesekene";
  tervita($nimi);


// Uudiskiri
echo "<br><br>Uudiskiri<br>";

function uudiskirja_liitumine() {
    echo '
    <form method="GET">
      <div class="form-group">
        <input type="text" id="Kasutajanimi">
        <small id="emailHelp" class="form-text text-muted">Sisesta oma email</small>
      </div>
      <button type="submit" class="btn btn-primary">Liitu</button>
    </form>';
  }
  
  uudiskirja_liitumine();

// Kasutajanimi ja email
echo "<br><br>Kasutajanimi ja email<br>";
echo'<form action = "#" method="get" class="form-group">
teie kasutajanimi: <input type="text" name = "l" required><br>
<input type="submit" value = "Sisesta" class = "btn btn-success">
</form>
';

if(isset($_GET['l']) ){

  $l = $_GET['l'];

function InimeseInfo($kasutaja="nimi") {
  $kasutaja = strtolower($kasutaja);
  $email = $kasutaja . "@hkhk.edu.ee";
  $kood = substr(md5($kasutaja), 0, 7);

  echo "<br> Kasutajanimi: " . $kasutaja . "\n";
  echo "<br> Email: " . $email . "\n";
  echo "<br> Kood: " . $kood . "\n";
}

$kasutajanimi = $l;
InimeseInfo($kasutajanimi);
}

// Arvud

echo "<br><br>Arvud<br>";
echo'<form action = "#" method="get" class="form-group">
vahemiku algus<input type="number" name = "h" required><br>
vahemiku lõpp<input type="number" name = "j" required><br>
vahemiku samm<input type="number" name = "k" required><br>
<input type="submit" value = "Sisesta" class = "btn btn-success">
</form>
';

if(isset($_GET['h']) ){

  $h = $_GET['h'];
  $j = $_GET['j'];
  $k = $_GET['k'];
  
function arvude_vahemik($algus, $lõpp, $samm = 1) {
  $arvud = array();
  for ($i = $algus; $i <= $lõpp; $i += $samm) {
      array_push($arvud, $i);
  }
  return implode(', ', $arvud);
}


echo"<br>";
echo arvude_vahemik($h, $j, $k);
}

// Ristkülik

echo "<br><br>Ristküliku pindala:<br>";

echo'<form action = "#" method="get" class="form-group">
<input type="number" name = "a" required><br>
<input type="number" name = "b" required><br>
<input type="submit" value = "arvuta" class = "btn btn-success">
</form>
';

if(isset($_GET['a']) ){

$a = $_GET['a'];
$b = $_GET['b'];



$ristkulik = 2*($a+$b);

echo "<br>Ristküliku pindala on ".$ristkulik;
}


// Isikukood

echo "<br><br>Isikukood:<br>";
echo'<form action = "#" method="get" class="form-group">
<input type="number" name = "c" required><br>
<input type="submit" value = "Sisesta" class = "btn btn-success">
</form>
';

if(isset($_GET['c']) ){

$isikukood = $_GET['c'];

  if (strlen($isikukood) != 11) {
    echo "Isikukood on vale pikkusega";
  }
  else{
  $sugu = (int) $isikukood[0] % 2 == 0 ? "Naine" : "Mees";
  $synniaasta = (int) substr($isikukood, 1, 2);
  $synnikuu = (int) substr($isikukood, 3, 2);
  $synnikuupaev = (int) substr($isikukood, 5, 2);
  $synniaasta += 2000;
  
  
  $synniaeg = "$synnikuupaev/$synnikuu/$synniaasta";
  
  echo "Sugu: $sugu, Sünniaeg: $synniaeg";
}
}

// Head mõtted
echo "<br><br>Head mõtted<br>";
function valiLause() {
  $alus = array("Ma", "Sina", "Meie");
  $oeldis = array("armastan", "vihkan", "hoian");
  $sihitis = array("kooke", "loomi", "lindu");

  $rand_alus = $alus[array_rand($alus)];
  $rand_oeldis = $oeldis[array_rand($oeldis)];
  $rand_sihitis = $sihitis[array_rand($sihitis)];

  $lause = "$rand_alus $rand_oeldis $rand_sihitis.";
  return $lause;
}

echo valiLause();


?>


</div>
</body>
</html>