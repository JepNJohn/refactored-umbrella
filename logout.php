<?php
    require_once ".\includes\partials/header.php";


if(isset($_POST["logout"])){

  if($_SESSION["loggedIn"] = 1){
      session_destroy();  
      header("location:index.php");  
  }
 
   
}
?>


<div class="loginImg">
<h1 class="loginH1">Logga ut </h1>
    <form class="loginForm" method="post" class="form-horizontal" action="logout.php">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="logout" value="send" id="logoutBtn" class="btn btn-default">Logout</button>
    </div>
  </div>
</form>
</div>






<?php
    require_once ".\includes\partials/footer.php";   
?>