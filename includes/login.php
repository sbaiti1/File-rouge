<?php
session_start();
?>

<?php

include "dbcon.php";


if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    require_once 'functions.php';

  if(emptyInputLogin($email,$pswd) !== false) {
    header("location:../signin.html?error=emptyInput");
    exit();
  }


    $sql = "SELECT id, firstname, lastname , email FROM USERS WHERE email='$email' AND pswd='$pswd'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   $_SESSION["id"] = $row["id"] ;
    $_SESSION["prenom"] = $row["firstname"] ;
    $_SESSION["nom"] = $row["lastname"] ;
    $_SESSION["mail"] = $row["email"] ;
    header("location:../user.php");
  }
  header("location:../user.php");
}
 else{
  header("location:../signin.html?error=WrongEmailOrPwd");
}


    /*echo "$email";
    echo "$pswd";*/

}