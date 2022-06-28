<?php 
include "dbcon.php";
session_start();
$user_id = $_SESSION["id"];


$sql = "SELECT * FROM USERS WHERE id='$user_id' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "   " . "email :" .$row["email"] . " " ."mdp: " . $row["pswd"] . "<br>";
    $id = $row["id"];
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $email = $row["email"];
    $pswd = $row["pswd"];
    }
  }

  if(isset($_POST['submit']) && ($_POST['pswd'] != $pswd)){
    header('location:../modifier.php?error=password');
    echo 'fuuuuuck';
    
  }

else if (isset($_POST['submit']) && ($_POST['pswd'] == $pswd)){

  $new_nom = $_POST['nom'];
  $new_prenom = $_POST['prenom'];
  $new_email = $_POST['email'];

  //check errors
  require_once 'functions.php';

    if (emptyInputSignup($new_nom,$new_prenom,$new_email,$_POST['pswd']) !== false) {
      header("location:../modifier.php?error=emptyInput");
      exit();
    }

    if (invalidemail($new_email) !== false) {
      header("location:../modifier.php?error=nonvalidemail");
      exit();
    }
  $sql = "UPDATE USERS SET lastname = '$new_nom' WHERE id='$user_id'";
  mysqli_query($conn, $sql);
  $_SESSION['nom'] = $new_nom;
  $_SESSION['prenom'] = $new_prenom;
  $_SESSION['email'] = $new_email;
  header('location:../user.php');
  
}

