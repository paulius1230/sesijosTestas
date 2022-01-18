<?php
session_start();

include 'prisijungimasPrieDb.php';
$sql = "SELECT klausimas FROM klausimai WHERE nr = 4";
$k = mysqli_query($link, $sql);
if ($k) { 
while ($row = mysqli_fetch_array($k, MYSQLI_ASSOC)) {
    $klausimas = $row["klausimas"];
}
}

if(isset($_POST["slapukas_3"])){
$_SESSION["3_atsakymas"] = $_POST["3_atsakymas"];
}
?>



<?php

if(isset($_COOKIE["vartotojas"]) && isset($_POST["slapukas_3"])){

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Testas (15 klausimų) <br><br> 4/15</h1> <br>
        <form action="5_klausimas.php" method="POST">
        <h2> <?php echo $klausimas; ?> </h2>
        <input type="text" name="4_atsakymas">
        <input type="hidden" name="slapukas_4">
        <input type="submit" value="Pateikti">
        </form>
        
    </body>
</html>

<?php } else{
    echo "<h1>Klaida</h1>";
}