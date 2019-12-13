



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">JSINC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <?php
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 1) {
  ?>
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="games.php">SPEL</a>
      <a class="nav-item nav-link" href="#">Forum</a>
      <a class="nav-item nav-link" href="#">Admin</a>
      <a class="nav-item nav-link" href="logout.php">Logga ut</a>

  <?php
  } else{
    ?>
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="register.php">Register</a>
      <a class="nav-item nav-link" href="login.php">Login</a>

    <?php
  }
  ?>
     
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>