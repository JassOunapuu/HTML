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




<menu>
<a href="failid/index.php">avaleht</a> |
<a href="failid/index.php?leht=portfoolio">portfoolio</a> |
<a href="failid/index.php?leht=kontakt">kontakt</a> |
<a href="failid/index.php?leht=epood">e-pood</a>
</menu>



<?php
/* Jass Õunapuu 24.01.23 */

if(!empty($_GET['leht'])){
    include($_GET['leht'].'.php');
    } else {


echo"<h1>Avaleht</h1>";



$nimi = "Imre";
$aasta = 200;
$tahtkuju = "hobueesel";
echo "Nimi:".$nimi. "<br>Aasta:".$aasta."<br>Tähtkuju ".$tahtkuju."<br>";


echo '"It\'s my life" - Dr. Alban <br>';

echo "(\(\\<br>";
echo "(-.-)<br>";
echo 'o_(")(")<br>';
}


?>


</div>
</body>
</html>