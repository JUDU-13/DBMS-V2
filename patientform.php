<?php 
include "conn.php";
session_start();	


function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
$PFname = validate( $_POST['PFname']);
$PLname = validate( $_POST['PLname']);
$PAge = validate( $_POST['PAge']);
$PNum = validate( $_POST['PNum']);
$PADN = validate( $_POST['PADN']);
$PBG = validate( $_POST['PBG']);
$PAdd = validate( $_POST['PAdd']);
$PBR = validate( $_POST['PBR']);
$PGender = validate( $_POST['PGender']);
$sid=$_SESSION['SID'];

$sql = "INSERT INTO PATIENT(`PAadharNumber`, `PFName`, `PLName`, `PAge`, `PGender`, `PCNumber`, `PAddress`, `PBType`, `SID`, `BloodRequired`) VALUES ('$PADN', '$PFname', '$PLname', '$PAge', '$PGender', '$PNum', '$PAdd', '$PBG', '$sid', '$PBR')";
$result=mysqli_query($con,$sql);
unset($_POST);
header("Location: staffdashboard.php");



 ?>