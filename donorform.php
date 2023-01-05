<?php
session_start(); 
include "conn.php";


function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$Fname = validate( $_POST['Fname']);
$Lname = validate( $_POST['Lname']);
$Age = validate( $_POST['Age']);
$Num = validate( $_POST['Num']);
$ADN = validate( $_POST['ADN']);
$BG = validate( $_POST['BG']);
$Add = validate( $_POST['Add']);
$Hei = validate( $_POST['Hei']);
$Wei = validate( $_POST['Wei']);
$gender = validate( $_POST['gender']);
$sid=$_SESSION['SID'];
$bmi =($Wei/($Hei*$Hei));
$sql="INSERT INTO DONOR (`DAadhaarNumber`, `DFName`, `DLName`, `DAge`, `DGender`, `BMI`, `DAddress`, `DCNumber`, `DBType`, `SID`) VALUES ('$ADN', '$Fname', '$Lname', '$Age', '$gender', '$bmi', '$Add', '$Num', '$BG','$sid')"; 

$result=mysqli_query($con,$sql);
unset($_POST);
header("Location: staffdashboard.php");

 ?>