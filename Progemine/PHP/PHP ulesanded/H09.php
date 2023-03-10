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
<h1>Harjutus 09</h1>

<?php
/* Jass Õunapuu 08.02.23 */
 
echo "<br><br>Nime formaatimine<br>";
echo'<form action = "#" method="get" class="form-group">
Lisa nimi: <input type="text" name = "l" required><br>
<input type="submit" value = "Sisesta" class = "btn btn-success">
</form>
';

if(isset($_GET['l']) ){

  $l = $_GET['l'];



  $nimi = ucfirst(strtolower($l));

  echo "Tere, {$nimi}!";

  echo "<br><br>Stalker<br>";
  $sisestus = $l;
  $stalker = "";
  
  for ($i = 0; $i < strlen($sisestus); $i++) {
      $stalker .= strtoupper($sisestus[$i]) . ".";
  }
  
  echo $stalker;

  echo "<br><br><br>Roppused<br>";

  $input = $l;
  $roppused = array("noob","kaka","apelsin","kuusemets","roppus","kristof", "sten");
  $output = $input;
  echo "<br>Roppsõnad on: <br>";

foreach($roppused as $ropp){
echo" ".$ropp;
}

  echo "<br><br> Sa ütlesid: <br>".$input;
  echo "<br>";
  echo "<br> Filtreeritud lause: <br>";
  foreach ($roppused as $sona) {
      $tarn = str_repeat("*", strlen($sona));
      $output = str_replace($sona, $tarn, $output);
  }
  
  echo $output;


  echo "<br><br><br>Email<br>";

  $nime = $l;
  
  $email = strtolower(str_replace(array("ä", "ö", "ü", "õ", " "), array("a", "o", "y", "o", "."), $nime)."@hkhk.edu.ee");
  
  echo $email;




}


?>


</div>
</body>
</html>