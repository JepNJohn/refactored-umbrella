<?php
    require_once ".\includes\partials/header.php";

if( isset($_SESSION["loggedIn"])){

    if($_SESSION["loggedIn"] == 1){
    header("location:index.php");
    }
}
?>
<?php 


?>


<div class="loginImg">
<h1 class="loginH1">Cool Login</h1>
    <form class="loginForm" class="form-horizontal" action="loginHandler.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>






<?php
    require_once ".\includes\partials/footer.php";   
?>