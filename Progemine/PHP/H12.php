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
<h1>Harjutus 12</h1>



<form method="post">
    Auto sõiduaeg: <br>
    <label for="start_time">Stardi aeg (hh:mm):</label>
    <input type="text" name="start_time" id="start_time" required minlength="5" maxlength="5" pattern="\d{2}:\d{2}" placeholder="nt 09:00"><br>
    <label for="end_time">Lõppaeg (hh:mm):</label>
    <input type="text" name="end_time" id="end_time" required minlength="5" maxlength="5" pattern="\d{2}:\d{2}" placeholder="nt 17:30"><br>
    <input type="submit" value="Arvuta sõiduaeg">
</form>



<?php
/* Jass Õunapuu 14.02.23 */





if(isset($_POST['start_time']) && isset($_POST['end_time'])) {
    if(strlen($_POST['start_time']) < 5 || strlen($_POST['end_time']) < 5) {
        echo "Sisestatud ajad peavad olema vähemalt viis sümbolit pikad.";
    } else {
        $start_time = new DateTime($_POST['start_time']);
        $end_time = new DateTime($_POST['end_time']);
        $diff = $start_time->diff($end_time);
        $hours = $diff->h;
        $minutes = $diff->i;
        echo "Sõiduaeg: " . $hours . " tundi ja " . $minutes . " minutit.";
    }
}





$naisedpalk= 0;
$mehedpalk= 0;
$mehedkokku= 0;
$naisedkokku= 0;
$mees= 0;
$naine= 0;

$allikas = 'failid/tootajad.csv';
$minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
$jrk = 1;
while(!feof($minu_csv)){
	$rida = fgetcsv($minu_csv, filesize($allikas),';');


    $tykk = explode(" ", $rida[0]);
	if($tykk[2]=="n"){
       $naisedkokku++;
        $naisedpalk += $tykk[3];
        
        if ($naine < $tykk[3]) {
            $naine = $tykk[3];} 
    }
    else{
        $mehedkokku++;
        $mehedpalk+= $tykk[3];
        
        if ($mees < $tykk[3]) {
            $mees = $tykk[3];}
    }



}
   
$nkeskmine = $naisedpalk / $naisedkokku;
echo "<br><br>naiste keskmine palk on: ".round($nkeskmine,0);

echo"<br>naiste kõrgeim palk on: ".$naine;


$mkeskmine = $mehedpalk / $mehedkokku;
echo "<br><br>meeste keskmine palk on: ". round($mkeskmine,0);

echo"<br>meeste kõrgeim palk on: ".$mees;

if ($nkeskmine < $mkeskmine) {
    echo"<br><br>jah, firmas on palju soo järgi diskrimineerimist.";

} else {
    echo"<br><br>ei, firmas ei ole üldse diskrimineerimist.";

}



fclose($minu_csv)





?>


</div>
</body>
</html>