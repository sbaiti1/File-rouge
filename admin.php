
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>amdin page</title>
</head>
<body>
    <h1>Hello admin</h1>
</body>
</html>

<?php 
include 'includes/dbcon.php';



$sql = "SELECT * FROM USERS";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped'><tr><th scope='col'>ID</th><th scope='col'>Name</th><th scope='col'>email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr  scope='row'><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>
