<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient</title>
    <link rel="stylesheet" href="viewpatient.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&display=swap');
    </style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,200&display=swap');
</style>
</head>
<body>

    <h3>Patient Table</h3>
     
    <div class="table-details">

        <table class="content-table">
        <thead>
        <tr>
        <th>AadhaarNumber</th>
        <th>FName</th>
        <th>LName</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Contact-Number</th>
        <th>Address</th>
        <th>Blood-Group</th>
        <th>Staff_ID</th>
        <th>Amount of Blood</th>
        <th>TimeStamp</th>
        </tr>
        </thead>
        <?php
        include "conn.php";
        session_start(); 
        error_reporting(0);
        $sid=$_SESSION['SID'];
        $sql="SELECT * FROM PATIENT order by SID";
        $result=mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {
            echo "<td>" . $row['PAadharNumber'] . "</td>";
            echo "<td>" . $row['PFName'] . "</td>";
            echo "<td>" . $row['PLName'] . "</td>";
            echo "<td>" . $row['PAge'] . "</td>";
            echo "<td>" . $row['PGender'] . "</td>";
            echo "<td>" . $row['PCNumber'] . "</td>";
            echo "<td>" . $row['PAddress'] . "</td>";
            echo "<td>" . $row['PBType'] . "</td>";
            echo "<td>" . $row['SID'] . "</td>";
            echo "<td>" . $row['BloodRequired'] . "</td>";
            echo "<td>" . $row['TimeStamp'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
    
</body>
</html>