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
<h1>Harjutus 03</h1>

<form action = "#" method="get" class="form-group">
<input type="number" name = "a" required><br>
<input type="number" name = "b" required><br>
<input type="number" name = "h" required><br>
<input type="submit" value = "arvuta" class = "btn btn-success">
</form>



<?php
/* Jass Õunapuu 24.01.23 Ülesanne*/

if(isset($_GET['a']) ){

    $a = $_GET['a'];
    $b = $_GET['b'];
    $h = $_GET['h'];
    
    $romb = 4*$a;
    $trapets = (($a*$b)/2)*$h;
    
    echo "<br>Trapetsi pindala on ".$trapets. "<br>Rombi ümbermõõt on " .$romb;
    
}

?>


</div>
</body>
</html>