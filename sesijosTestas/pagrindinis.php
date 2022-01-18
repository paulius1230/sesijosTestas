<?php
include 'prisijungimasPrieDb.php';



  if(isset($_POST["pazymiai"])){
  $vartotojas = $_COOKIE['vartotojas'];
  $sql4 = "SELECT pazymys FROM rezultatai WHERE vartotojo_vardas = '$vartotojas' ";
  $rz4 = mysqli_query($link, $sql4);
  
  if(mysqli_num_rows($rz4) > 0){
    echo "<h1>Pazymiai:</h1>";
    while ($row4 = mysqli_fetch_array($rz4, MYSQLI_ASSOC)) {
      echo "<h2>" . $row4['pazymys'] . "</h2>";      
    }
  }
  else{
    echo "<h1>Pazymių nera</h1>";  
  }
}


?>

<?php
if(isset($_COOKIE['vartotojas'])){
?>

<!DOCTYPE html>
<html>

<body>
    
    <form action="pagrindinis.php" method="POST">
        <input type="submit" name="pazymiai" value="perziureti savo pazymius">
    </form>
    <br>
     <form action="testas.php" method="POST">
         <input type="submit" name="testas" value="pradeti testa">
    </form>
   
    
    
</body>

</html>

<?php } else {
    echo "<h1>Klaida</h1>";
}