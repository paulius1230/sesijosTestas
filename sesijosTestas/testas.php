<?php

  include 'prisijungimasPrieDb.php';
  
 
  
  if (isset($_POST["slapukas"])) { 
  $vartotojas = $_POST['vartotojas'];
  $slaptazodis = $_POST['slaptazodis'];
      
      
  $sql = "SELECT vartotojas, slaptazodis FROM users WHERE vartotojas LIKE '$vartotojas' AND slaptazodis LIKE '$slaptazodis' ";
  $result = mysqli_query($link, $sql);
  
  if(mysqli_num_rows($result) == 1){
  setcookie("vartotojas", $vartotojas, time() + 60 * 60 * 24 * 365);
  header("Location: pagrindinis.php");
  }
  
  if(mysqli_num_rows($result) == 0){
      echo "<h1>Tokio vartotojo nera</h1>";
  }
  
  }
  
  if(isset($_POST["testas"])){
  header("Location: 1_klausimas.php");
}

?>


