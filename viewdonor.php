<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Donors</title>
    <link rel="stylesheet" href="viewdonor.css">
    <!-- eth bootstrap inte -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->
    <!--  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&display=swap');
    </style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,200&display=swap');
</style>
</head>
<body>

    <h3>Donor Table</h3>
     
    <div class="table-details">

        <table class="content-table">
            <thead>
                <tr>
                    <th>DAadhaarNumber</th>
                    <th>DFName</th>
                    <th>DLName</th>
                    <th>DAge</th>
                    <th>DGender</th>
                    <th>BMI</th>
                    <th>DAddress</th>
                    <th>DCNumber</th>
                    <th>DBType</th>
                    <th>SID</th>
                    <th>TimeStamp</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    include "conn.php";
                    session_start(); 
                    // echo $_SESSION['SID'];
                    error_reporting(0);
                    $sid=$_SESSION['SID'];
                    // if($sid='smitha')
                    // {
                      $sql="SELECT * FROM DONOR order by SID";
                    // }
                    // else
                    // {
                    //   $sql = "SELECT * FROM DONOR where SID='$sid'";
                    // }
                    // "SELECT * FROM patient WHERE D_id = ".$_SESSION['doctor_id'];
                    $result=mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<td>" . $row['DAadhaarNumber'] . "</td>";
                        echo "<td>" . $row['DFName'] . "</td>";
                        echo "<td>" . $row['DLName'] . "</td>";
                        echo "<td>" . $row['DAge'] . "</td>";
                        echo "<td>" . $row['DGender'] . "</td>";
                        echo "<td>" . $row['BMI'] . "</td>";
                        echo "<td>" . $row['DAddress'] . "</td>";
                        echo "<td>" . $row['DCNumber'] . "</td>";
                        echo "<td>" . $row['DBType'] . "</td>";
                        echo "<td>" . $row['SID'] . "</td>";
                        echo "<td>" . $row['TimeStamp'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
          </tbody>

    </table>
    </div>
</body>
</html>

<!-- <table class="content-table">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Name</th>
      <th>Points</th>
      <th>Team</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Domenic</td>
      <td>88,110</td>
      <td>dcode</td>
    </tr>
    <tr class="active-row">
      <td>2</td>
      <td>Sally</td>
      <td>72,400</td>
      <td>Students</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Nick</td>
      <td>52,300</td>
      <td>dcode</td>
    </tr>
  </tbody>
</table> -->