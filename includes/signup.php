<?php
session_start();
?>

<?php

include "dbcon.php";

if(isset($_POST["submit"])){
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    $_SESSION["prenom"] = $prenom ;
    $_SESSION["nom"] =  $nom ;
    $_SESSION["mail"] = $email ;

    require_once 'functions.php';

    if (emptyInputSignup($nom,$prenom,$email,$pswd) !== false) {
      header("location:../register.html?error=emptyInput");
      exit();
    }

    if (invalidemail($email) !== false) {
      header("location:../register.html?error=nonvalidemail");
      exit();
    }

    createUser($conn,$nom,$prenom,$email,$pswd);
    
    header("location:../user.php");


    /*$sql = "INSERT INTO USERS (firstname, lastname, email , pswd)
    VALUES ('$prenom', '$nom', '$email' , '$pswd')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }*/

 
    $conn->close();
    



}else{
    header("location:../register.html");
    exit();
}