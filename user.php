

<?php
session_start();
include "includes/functions.php"

?>


<?php include "header.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>


 <div class="container mt-2 d-flex">
   
   <div class="pic mt-5 py-5  shadow-sm p-3 mb-5 bg-body rounded">
   <div class="text-center">
    <!--<img class="uimg " src="imgs/pr.jpg" alt="">-->
    <div class="d-flex justify-content-center"><div class="profile" id="profile" style="background-image: url('imgs/<?php echo photo($_SESSION["prenom"])?>.jpg') ;"></div></div>
    
   <h2 class="py-3"><?php echo  $_SESSION["prenom"]  ." ". $_SESSION["nom"]; ?></h2>
   <p> <?php echo $_SESSION["mail"]; ?></p>
  </div>
 <div class="btns mt-4 d-flex justify-content-center align-items-center">
 <a href="modifier.php" id="edit">modifier profile</a>
  <a href="includes/logout.php" id="logout">Se déconnecter</a>
 </div>
    
   </div>

   <div class="divs mt-5">
   <div class=" info   shadow-sm p-3 mb-4 bg-body rounded">
     <h4>Bonjour <?php echo $_SESSION["prenom"] ?></h4>
     <div class="icons mt-4 d-flex justify-content-center">
       <div>
       <i class="bi bi-bell"></i> <br>
       <label for="">Notifications</label>
       </div>

       <div>
       <i class="bi bi-suit-heart"></i> <br>
       <label for="">Favorits</label>
       </div>

       <div>
       <i class="bi bi-gift"></i> <br>
       <label for="">Coupons</label>
       </div>

       <div>
       <i class="bi bi-headset"></i> <br>
       <label for="">Services</label>
       </div>


     
     </div>
   </div>
   <!--info2-->
   <div class=" infos shadow-sm p-3 mb-3 bg-body rounded">
     <h4>Mes commandes</h4>

     <div class="icons mt-5 d-flex justify-content-center">
       <div>
       <i class="bi bi-credit-card"></i> <br>
       <label for="">Non payées</label>
       </div>

       <div>
       <i class="bi bi-box-seam"></i> <br>
       <label for="">En cours de traitement</label>
       </div>

       <div>
       <i class="bi bi-truck"></i> <br>
       <label for="">Expédiées</label>
       </div>

       <div>
       <i class="bi bi-arrow-return-left"></i> <br>
       <label for="">Retour</label>
       </div>


     
     </div>
   </div>
   </div>
 </div>
   
    

<script src="js/cart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>