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
<h1>Harjutus 06</h1>

<form action = "#" method="get" class="form-group">
Ruudu külg <input type="number" name = "a" required><br>
Ruudu külg 2 <input type="number" name = "b" required><br>
<input type="submit" value = "arvuta" class = "btn btn-success">
</form>
<?php
/* Jass Õunapuu 31.01.23 */


// 1-100
echo "<br>1-100<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . ". ";
    if ($i % 10 == 0) {
        echo "<br>";
    }
}

// horisontaalne rida
echo "<br>horisontaalne rida<br>";
for ($i = 0; $i < 10; $i++) {
    echo "*";
  }

// vertikaalne rida
echo "<br>vertikaalne rida<br>";
for($rida=1; $rida<=5; $rida++){ 
    echo '*<br>';
   }


// ruut
echo "<br>ruut<br>";
if(isset($_GET['a']) ){

    $a = $_GET['a'];
    $b = $_GET['b'];
    for($rida=1; $rida<=$a; $rida++){ 
        for($veerg=1; $veerg<=$b; $veerg++){ 
        echo '*'; 
        }
        echo '<br>';
       }
}

// kahanev
echo "<br>";
    for($i=1;$i<=10;$i++){
        echo $i.'<br>';
    }

// kolm
echo "<br>kolm<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . "\n";
    }
}

// Poisid ja tüdrukud
echo "<br><br>Poisid ja tüdrukud<br>";
$tüdrukud = array("Liisu", "Mari", "Kadi");
$poisid = array("Jaan", "Toomas", "Indrek");

$paarid = array();
for ($i=0; $i < count($tüdrukud); $i++) { 
  $paarid[] = array($tüdrukud[$i], $poisid[$i]);
}

foreach ($paarid as $paar) {
  echo implode(" ja ", $paar) . "<br>";
}


// // Poisid ja tüdrukud 2
echo "<br>Poisid ja tüdrukud 2<br>";

$tüdrukud = array("Liisu", "Mari", "Kadi");
$poisid = array("Jaan", "Toomas", "Indrek");


$Tcopy = $tüdrukud;
$Pcopy = $poisid;


$paarid = array();


while (!empty($Tcopy) && !empty($Pcopy)) {
$Rtüdruk = array_rand($Tcopy);
$Rpoiss = array_rand($Pcopy);
  
   $paarid[] = array($Tcopy[$Rtüdruk], $Pcopy[$Rpoiss]);
  
  unset($Tcopy[$Rtüdruk]);
  unset($Pcopy[$Rpoiss]);
}

foreach ($paarid as $paar) {
  echo $paar[0] . " - " . $paar[1] . "<br>";
}








?>



</div>
</body>
</html>