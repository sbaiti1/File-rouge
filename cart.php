<?php
session_start();
include "includes/functions.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
<?php 
  if (isset($_SESSION["prenom"])) {
    include "header.php";

  }
  else{
    echo '<div w3-include-html="header.html"></div>';
  }
  
  
  ?>

    <main class="container mt-5">
        <h1 class="text-center">Your shopping cart</h1>
        
        <div class="container d-flex align-items-center justify-content-center">
        <ul class="" id="list">
            
            </ul>
            
        </div>

        
        <div id="total"></div>
        </div>
        <div class="btns"><button id="clear">clear</button></div>
    </main>

   
    

    <div w3-include-html="footer.html"></div>
    <script src="js/script.js"></script>
    <script src="js/cart.js"></script>
    <script>
        includeHTML();
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>