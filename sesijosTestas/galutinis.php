<?php

include 'prisijungimasPrieDb.php';

if(isset($_POST["slapukas_15"])){
session_start();
$_SESSION["15_atsakymas"] = $_POST["15_atsakymas"];
}

 if(empty($_SESSION)){
     header("Location: pagrindinis.php");
 }
  
$atsMasyvas = array(1 => 4, 12, 30, 40, 27, 28, 44, 345, 214, 1074, 703, 1274, 6722, 11327, 95268);
$rez = 0;
$paz = 0;
$neteisingaiAtsakytiKlausimai = array();
$blogiAtsakymai = array();
$teisingiAtsakymai = array();
$klausimai_atsakymai = array();

for($i = 1; $i <= 15; $i++){
    $klausimai_atsakymai[] = $i . "_" . $_SESSION[$i."_atsakymas"];
    if( $_SESSION[$i."_atsakymas"] == $atsMasyvas[$i]){
        $rez++;
    } else {
        $neteisingaiAtsakytiKlausimai[] = $i;
        $blogiAtsakymai[] = $_SESSION[$i."_atsakymas"];
        $teisingiAtsakymai[] = $atsMasyvas[$i];
    }
}


$paz = ($rez / 15) * 10;
echo "<h1>Pažymys: " . round($paz) . "</h1>";
if($paz == 10){
   echo "<h1 style='color: green;'>Į visus klausimus atsaket teisingai</h1><br>";
} else {
   echo "<h1>Neteisingai atsakyti klausimai:</h1><br>";
}


if(isset($_SESSION)){
$sql3 = "INSERT INTO rezultatai(klausimai_atsakymai, pazymys, vartotojo_vardas) VALUES ('".implode(" ", $klausimai_atsakymai)."', '".$paz."', '".$_COOKIE["vartotojas"]."')"; 
mysqli_query($link, $sql3);
}


  
for($i=0, $count = count($neteisingaiAtsakytiKlausimai); $i<$count;$i++) {
 $reiksme = $neteisingaiAtsakytiKlausimai[$i];
 $reiksme2 = $blogiAtsakymai[$i];
 $reiksme3 = $teisingiAtsakymai[$i];
 
 $sql2 = "SELECT nr, klausimas FROM klausimai WHERE nr = $reiksme";
 $resultSet2 =  mysqli_query($link, $sql2);

 if ($resultSet2) {
 while ($row2 = mysqli_fetch_array($resultSet2, MYSQLI_ASSOC)) {
 echo "<b style='color:red;font-size:32px;'>" .  $row2["nr"] . ". " . $row2["klausimas"] . "</b><br>";
 echo "<b style='color:#8b0000;font-size:32px;'>" . "Jūsų atsakymas: " . $reiksme2 . "</b><br>";
 echo "<b style='color:green;font-size:32px;'>" . "Teisingas atsakymas: " . $reiksme3 . "</b><br><br>";
 }
 }
 }
 
 echo '<form action="pagrindinis.php" method="POST">';
 echo '<input type="submit" value="Grįžti į pagrindinį puslapį">';
 echo '</form>';

 if(isset($_SESSION)){
    session_destroy();
 }



  
  
?>


