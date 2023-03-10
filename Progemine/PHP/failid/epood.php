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
<h1>Harjutus 04</h1>

<form action = "#" method="get" class="form-group">
arv 1/vanus/külje väärtus/juubel <input type="number" name = "a" required><br>
arv 2/vanus/külje väärtus/KT hinne <input type="number" name = "b" required><br>
<input type="submit" value = "arvuta" class = "btn btn-success">
</form>

<?php
/* Jass Õunapuu 26.01.23 */

if(isset($_GET['a']) ){

$a = $_GET['a'];
$b = $_GET['b'];
$jaga = 0;

/*Jagamine*/

if ($b==0){ echo "<br> Nulliga ei saa jagada";}



else{ $jaga = $a/$b; 
echo "<br> Jagamistehte vastus on ".$jaga;

/*Vanus*/
if($a < $b){ echo "<br> Arv 2 on vanem kui arv 1"; }
else{echo "<br> Arv 1 on vanem kui arv 2";}

/*ruut ja ristkülik*/
if($a == $b){echo "<br> see on ruut";}
else{echo "<br> See on ristkülik";}

/*juubel*/
if($a%5==0){echo "<br> juubel!";}
else{echo "<br> ei ole juubel :'(";}

/*Hinne*/

switch ($b){
case $b >= 10; 
echo"<br> Hinne on SUPER!";
break;
case $b >= 5 && $b <= 9:
echo"<br> Hinne on TEHTUD!";
break;
case $b <= 4; 
echo"<br> Hinne on KASI!";
break;
default:
echo "Sisesta oma punktid";
}
}



}

?>


</div>
</body>
</html>