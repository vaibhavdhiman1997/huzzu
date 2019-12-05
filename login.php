<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
      <div class="col-sm-4 col col-md-5">
          <h1 style="font-family: 'Open Sans', sans-serif; font-size: 25px;">Register User Signin Here</h1>
        <form action="" method="post" onsubmit="signinfunc()">
        <div>
            <label for="">Email</label>
            <input type="email" class="form-control" id="email" name="Lemail" required>
            <span class="text-danger text-bold" id="spemail"></span>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" class="form-control" id="pass" name="Lpass">
            <span class="text-danger text-bold" id="spemail"></span>
            <input type="submit" class="btn btn-outline-primary mt-3" style="width: 100px;" value="SignIn" name="SignIn" required>
            <!-- <strong class="mx-3">Don't have an account</strong><a href="" data-toggle="modal" data-target="#exampleModal">SignUp</a> -->
        </div>
        </form> 
            <hr>
            <span>New User SignUp Here</span>
            <a href="index.php" class="btn btn-outline-primary">SignUp</a> 
      </div>
</div>    
</body>
</html>

<!-- Login Page php -->
<?php
$con = mysqli_connect("localhost","root","","huzzu");
if(isset($_REQUEST['SignIn'])){
$lemail = $_POST['Lemail'];
$lpass = $_POST['Lpass'];
$query = "SELECT * FROM `usermasterinfo` WHERE `Email`='$lemail' AND `Password`='$lpass'";
$lres = mysqli_query($con, $query);
$numrows = mysqli_num_rows($lres);
$lrow = mysqli_fetch_assoc($lres);
if($numrows > 0){
  $_SESSION['name'] = $lrow['Name'];
  $_SESSION['id'] = $lrow['id'];
    ?>
    <script>
        window.location.href = "welcome.php";
    </script>
    <?php
}
else{
  ?>
  <script>
  alert("credential not matched");
  </script>
  <?php
}
}
?>
<!-- Login Page php End -->