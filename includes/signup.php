<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FileRouge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    require_once 'functions.php';

    if (emptyInputSignup($nom,$prenom,$email,$pswd) !== false) {
      header("location:../register.html?error=emptyInput");
      exit();
    }

    if (invalidemail($email) !== false) {
      header("location:../register.html?error=nonvalidemail");
      exit();
    }

    createUser($conn,$nom,$prenom,$emai,$pswd);
    
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