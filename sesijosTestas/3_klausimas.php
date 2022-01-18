<?php
session_start();

include 'prisijungimasPrieDb.php';
$sql = "SELECT klausimas FROM klausimai WHERE nr = 3";
$k = mysqli_query($link, $sql);
if ($k) { 
while ($row = mysqli_fetch_array($k, MYSQLI_ASSOC)) {
    $klausimas = $row["klausimas"];
}
}

if(isset($_POST["slapukas_2"])){
$_SESSION["2_atsakymas"] = $_POST["2_atsakymas"];
}
?>



<?php

if(isset($_COOKIE["vartotojas"]) && isset($_POST["slapukas_2"])){

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Testas (15 klausimų) <br><br> 3/15</h1> <br>
        <form action="4_klausimas.php" method="POST">
        <h2> <?php echo $klausimas; ?> </h2>
        <input type="text" name="3_atsakymas">
        <input type="hidden" name="slapukas_3">
        <input type="submit" value="Pateikti">
        </form>
        
    </body>
</html>

<?php } else{
    echo "<h1>Klaida</h1>";
}