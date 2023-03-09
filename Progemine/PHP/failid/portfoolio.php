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

<h1>Portfoolio</h1>

<?php
/* Jass Õunapuu 24.01.23 Ülesanne*/

echo "<h2>Tehted</h2>";

$arv1 = 5;
$arv2 = 8;
printf("%d+%d=%d <br>", $arv1, $arv2, $arv1 + $arv2);
printf("%d-%d=%d <br>", $arv1, $arv2, $arv1 - $arv2);
printf("%d*%d=%d <br>", $arv1, $arv2, $arv1 * $arv2);
printf("%d/%d=%d <br>", $arv1, $arv2, $arv1 / $arv2);

echo "<h2>Teisendamine</h2>";

$mm = 200;
$cm = round($mm /10,2);
$m = round($mm / 1000,2);
printf("%dmm>%dcm <br>", $mm, $cm);
printf("%dmm>%0.2fm <br>", $mm, $cm);

echo "<h2>Täisnurkne kolmnurk</h2>";

$k1 = 100;
$k2 = 50;
$k3 = sqrt(pow($k1,2)+pow($k1,2));
$s = sqrt(3)/4*pow($k1, 2);
$p = $k1 + $k2 +$k3;

printf ("Täisnurkse kolmnurga ümbermõõt on %d <br>",$p);
printf ("Täisnurkse kolmnurga pindala on %d <br>",$s);
?>



</body>
</html>