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
<h1>Harjutus 13</h1>


    <?php
/* Jass Õunapuu 14.02.23 */
 

if(isset($_FILES['pilt']) && $_FILES['pilt']['error'] == 0) {
    $allowed = array('jpg', 'jpeg');
    $extension = pathinfo($_FILES['pilt']['name'], PATHINFO_EXTENSION);
    if(!in_array(strtolower($extension), $allowed)) {
        echo '<p>ainult JPG ja JPEG failid on lubatud.</p>';
    } else {
        echo '<p>Üleslaaditud pilt:</p>';
        echo '<img src="'.htmlspecialchars($_FILES['pilt']['tmp_name']).'" />';
    }
} else {
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<label for="pilt">Vali pilt (ainult JPG ja JPEG formaadis):</label>';
    echo '<input type="file" name="pilt" id="pilt" />';
    echo '<input type="submit" value="Üleslaadimine" />';
    echo '</form>';
}



?>


</div>
</body>
</html>