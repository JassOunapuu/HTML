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
<h1>Harjutus 08</h1>

<?php
/* Jass Õunapuu 08.02.23 */
 

echo "<br><br>Sünniaeg<br>";
echo'<form action = "#" method="get" class="form-group">
teie sünnipäev (nt. 31.12.2000): <input type="text" name = "l" required><br>
<input type="submit" value = "Sisesta" class = "btn btn-success">
</form>
';

if(isset($_GET['l']) ){

  $l = $_GET['l'];

$datetime1 = new DateTime();
$datetime2 = new DateTime($l);

$interval = $datetime1->diff($datetime2);

echo"<br>";
echo $interval->format('oled %y. aasta vanune');

}


echo "<br><br>Kooliaasta<br>";
$datetime3 = new DateTime();
$datetime4 = new DateTime("2023-06-01");

$interval = $datetime3->diff($datetime4);
$lopuni = $interval->format("%a");

echo "2023 kooliaasta lõpuni on jäänud " . $lopuni . " päeva.";


echo "<br><br>Aastaaja pilt<br>";


$praeguneKuu = date("n");

if ($praeguneKuu >= 3 && $praeguneKuu <= 5) {
    echo '<img src="img/kevad.jpg" alt="Kevad">';
} elseif ($praeguneKuu >= 6 && $praeguneKuu <= 8) {
    echo '<img src="img/suvi.jpg" alt="Suvi">';
} elseif ($praeguneKuu >= 9 && $praeguneKuu <= 11) {
    echo '<img src="img/sugis.jpg" alt="Sügis">';
} else {
    echo '<img src="img/talv.jpg" alt="Talv">';
}


?>


</div>
</body>
</html>