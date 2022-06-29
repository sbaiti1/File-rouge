

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/header.css">
    
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="brand">bio & bien étre</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="huiles.php">nos huiles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="404.html">nos coffrets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">nos fournisseurs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Qui sommes-nous</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">blog</a>
              </li>
              
              
            </ul>
            <div class="icon mx-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
            </div>

            <div class="icon mx-3 mr-2" ><a href="cart.php">
              <svg id="cart" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
              </svg>
            </a></div>
            <!--<a href="logout.php" class="btn" id="signin" type="submit">log out</a href="signin.html">-->
            <div class="profile1" id="profile" style="background-image: url('imgs/<?php echo photo($_SESSION["prenom"])?>.jpg') ;"> </div>
          </div>
        </div>
      </nav>
</header>

<script>
  let host = window.location.host
  document.getElementById('profile').addEventListener('click',()=>{
    window.location.replace(`http://${host}/user.php`);
  })
</script>


</body>
</html>