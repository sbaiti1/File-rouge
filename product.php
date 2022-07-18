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
    <link rel="stylesheet" href="css/product.css">
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
    

    <div class="container d-flex justify-content-center  ">
      <div class="pic" id='pic'>
      <img src="imgs/massage2.jpg" height="450px" alt="">
      </div>
      <div class="prdct">
        <h1 id='title'>Huille de massage</h1>
        <div class="d-flex align-items-center ">
          <h2 class=" mt-3 px-1" id='price'>120</h2>
        <div class="icons px-4">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star"></i>
        </div>
        </div>
        <div class="check mt-3">
          <i class="bi bi-check2"></i> <span>in stock and ready to ship</span>
        </div>
        <div class="demo mt-4">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ex aliquam blanditiis laborum nulla in laudantium, facere a reprehenderit molestiae Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, pariatur.</p>
        </div>
        <div class="btns">
          <button class="add" id="add">add to cart</button>
         <i class="bi bi-suit-heart" id="heart"></i>
        </div>
      </div>


    </div>

    


    <div w3-include-html="footer.html"></div>

    <script src="js/prdct.js"></script>
  <script src="js/script.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/**.js"></script>

<script>
    includeHTML();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
 
   <!-------->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>