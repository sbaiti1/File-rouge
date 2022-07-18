<?php 
include "dbcon.php";

// sql to delete a record
$sql = "DELETE FROM USERS WHERE lastname='nainia'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();