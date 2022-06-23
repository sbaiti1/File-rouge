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

    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    $sql = "SELECT id, firstname, lastname FROM USERS WHERE email='$email' AND pswd='$pswd'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    header("location:../user.php");
  }

} else {
  echo "mot de passe incoret";
}

    /*echo "$email";
    echo "$pswd";*/

}