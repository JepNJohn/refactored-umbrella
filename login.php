<?php
    require_once ".\includes\partials/header.php";

if( isset($_SESSION["loggedIn"])){

    if($_SESSION["loggedIn"] == 1){
    header("location:index.php");
    }
}
if(!empty($_POST)){

  $email = $_POST['email'];
  $password = $_POST['password'];

   $SQL = "SELECT * FROM users";

   $result = $mysqli->query($SQL);

   $row = mysqli_fetch_assoc($result);

   $validPass = password_verify($password,$row['password']);

   if($row){
     if(password_verify($password, $row['password'])){
       $_SESSION['loggedIn'] = 1;
       $_SESSION['id'] = $row['id'];
       header("location:index.php");
     }else{
       echo("error som fan här asså");
     }
     }
   
}
?>
<?php 
    

?>


<div class="loginImg">
<h1 class="loginH1">Cool Login</h1>
    <form class="loginForm" method="post" class="form-horizontal" action="login.php">
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
      <button type="submit" value="send" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>






<?php
    require_once ".\includes\partials/footer.php";   
?>