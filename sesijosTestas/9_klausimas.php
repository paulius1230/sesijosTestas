<?php
session_start();

include 'prisijungimasPrieDb.php';
$sql = "SELECT klausimas FROM klausimai WHERE nr = 9";
$k = mysqli_query($link, $sql);
if ($k) { 
while ($row = mysqli_fetch_array($k, MYSQLI_ASSOC)) {
    $klausimas = $row["klausimas"];
}
}

if(isset($_POST["slapukas_8"])){
$_SESSION["8_atsakymas"] = $_POST["8_atsakymas"];
}
?>



<?php

if(isset($_COOKIE["vartotojas"]) && isset($_POST["slapukas_8"])){

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Testas (15 klausimų) <br><br> 9/15</h1> <br>
        <form action="10_klausimas.php" method="POST">
        <h2> <?php echo $klausimas; ?> </h2>
        <input type="text" name="9_atsakymas">
        <input type="hidden" name="slapukas_9">
        <input type="submit" value="Pateikti">
        </form>
        
    </body>
</html>

<?php } else{
    echo "<h1>Klaida</h1>";
}