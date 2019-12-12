<?php
    require_once ".\includes\partials/header.php";   
?>

<div class="loginImg">
<h1 class="loginH1">Register please</h1>
    <form class="loginForm" class="form-horizontal" method="post" action="register.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-12" for="pwd">Confirm Password:</label>
    <div class="col-sm-10">
      <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="confirm password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" value="send" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
<?php
if(!empty($_POST)) //Om förmuläret är skickat
 {
     //variabler
     $ConfirmPassword = $_POST["confirmPassword"];
     $password = $_POST["password"];
     $email = $_POST["email"];
     $hashPass = password_hash($password,PASSWORD_BCRYPT);
     
     if($password != $ConfirmPassword)
     {
         echo "Match the password please";
     }
     else
     {
      //Sätter in email och lösenord i users table och krypterar lösenordet med BCRYPT.
         $SQl2 = $mysqli->query("INSERT INTO users (email,password) VALUES ('$email','$hashPass')");
         header("location:login.php");
        
     }
     
 }
    ?>




<?php
    require_once ".\includes\partials/footer.php";   
?>