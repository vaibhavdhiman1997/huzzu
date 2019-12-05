<?php
$con = mysqli_connect("localhost","root","","huzzu");
if(isset($_REQUEST['SignUp'])){
$Uname = $_POST['Uname']; 
$Uemail = $_POST['Uemail']; 
$UContactNo = $_POST['UContactNo']; 
$Upass = $_POST['Upass']; 
$UConfirmpass = $_POST['UConfirmpass'];
$qselect = "SELECT `Email`,`ContactNo` FROM `usermasterinfo` WHERE `Email`='$Uemail' OR `ContactNo`='$UContactNo'";
$resselect = mysqli_query($con, $qselect);
$num_rows = mysqli_num_rows($resselect);
if($num_rows > 0){
  $rows = mysqli_fetch_assoc($resselect);
  if(($rows['Email'] == $Uemail) && ($rows['ContactNo'] == $UContactNo)){
    ?> <script>
   alert("Email And Number Already Exist");
     </script> <?php
  }
  else if($rows['Email'] == $Uemail){
    ?> <script>
   alert("Email Already Exist");
   window.location.href="index.php";
     </script> <?php
  }
  else if($rows['ContactNo'] == $UContactNo){
    ?> <script>
   alert("Number Already Exist");
   window.location.href="index.php";
     </script> <?php
  }
}
else if($num_rows == 0){
if($Upass==$UConfirmpass){
  $query = "INSERT INTO `usermasterinfo`(`Name`, `Email`, `ContactNo`, `Password`) VALUES ('$Uname','$Uemail','$UContactNo','$Upass')";
  $res = mysqli_query($con, $query);
  if($res){
    ?>
    <script>
     alert("Thank You For SignUp");
     window.location.href="index.php";
    </script>
     <?php
  }
}
}
}
?>

