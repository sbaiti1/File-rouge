<?php 
include "includes/edit.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/modifier.css">
    <title>modifer</title>
</head>
<body>

    <div class="container">
      <h1 class="text-center">Modifier votre informations</h1>

        <form class="row g-3" action="includes/edit.php" method="post">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nom</label>
              <input type="text" class="form-control" id="inputEmail4" name="nom" value="<?php  print $lastname  ?>">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Prenom</label>
              <input type="text" class="form-control" id="inputPassword4" name="prenom" value="<?php print $firstname ?>">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputAddress" name="email" value="<?php print $email ?>" >
            </div>
            <div class="col-12">
              <label for="pswd" class="form-label">Password</label>
              <input type="password" class="form-control" name="pswd" id="pswd" placeholder="entrer votre mot de passe" value="">
            </div>
            
            <div align="right" class="col-12 mt-4 ">
              <a href="user.php" id="anu" name="annuler">annuler</a>
              <button type="submit" id="submit" name="submit" class="btn btn-primary">modifier</button>
            </div>
          </form>
    </div>

    <script src="js/eror.js"></script>
    
</body>
</html>