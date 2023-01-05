<?php
include "conn.php";
session_start();

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['uname'])&&isset($_POST['password'])){ 
  $user = validate( $_POST['uname']);
  $pass = validate( $_POST['password']);	

}
$sql = "SELECT * FROM  STAFF WHERE SID ='$user' AND Password='$pass'";
// echo"$sql";
// echo"$sql";

$result = mysqli_query($con,$sql);

// echo "$sql";
if(mysqli_num_rows($result)==1)
{
  // echo "string";
  $row =mysqli_fetch_assoc($result);
  if($row['SID']==$user && $row['Password']==$pass)
  {
    $_SESSION['SID']=$row['SID'];
    // echo $_SESSION['SID'];
    $_SESSION['SName']=$row['SName'];
    header("Location: staffdashboard.php");
    exit();
  }
  else
  {
    header("Location: loginUI.html");
    exit();
    echo "Wrong Password Or UID";

  }
}
?>