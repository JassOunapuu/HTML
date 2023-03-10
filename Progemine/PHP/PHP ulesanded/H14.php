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
<h1>Harjutus 14</h1>

<form method="post">
  <label for="image">Select an image:</label>
  <select name="image" id="image">
    <?php
      $images = glob("img/*.{jpg,png,gif}", GLOB_BRACE);
      foreach ($images as $image) {
        $image_name = basename($image);
        echo "<option value='$image'>$image_name</option>";
      }
    ?>
  </select>
  <input type="submit" value="Show">
</form>



<?php
/* Jass Õunapuu 02.03.23 */


if (!empty($_POST['image'])) {
    $image = $_POST['image'];
    echo "<img src='$image' width=200 height=200>";
  }

$kaust = 'img/';

$failid = glob($kaust."*.{jpg,jpeg,gif,png}", GLOB_BRACE); //tagastab kõik jpg, jpeg, gif ja png failid selles kaustas

$index = array_rand($failid);
$pildi_aadress = $failid[$index];

$max_laius = 200;
$max_korgus = 200;

$num_cols = 3;
$num_rows = ceil(count($failid)/$num_cols);
echo '<table>';
for ($i = 0; $i < $num_rows; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $num_cols; $j++) {
        $index = $i + $j*$num_rows;
        if ($index < count($failid)) {
            $pildi_aadress = $failid[$index];
            $pildi_andmed = getimagesize($pildi_aadress);

            $laius = $pildi_andmed[0];
            $korgus = $pildi_andmed[1];
            $formaat = $pildi_andmed[2];

            if($laius <= $max_laius && $korgus<=$max_korgus){
                $vahe = 1;    
            } elseif($laius>$korgus){
                $vahe = $max_laius/$laius;    
            } else {
                $vahe = $max_korgus/$korgus;    
            }
            $pisi_laius = round($laius*$vahe);
            $pisi_korgus = round($korgus*$vahe);

            echo "<td><a href='$pildi_aadress'><img width='$pisi_laius' src='$pildi_aadress'></a></td>";
        } else {
            echo '<td></td>';
        }
    }
    echo '</tr>';
}
echo '</table>';


?>


</div>
</body>
</html>