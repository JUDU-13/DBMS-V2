<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Panel</title>
    <link rel="stylesheet" href="searchpanel.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&display=swap');
    </style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,200&display=swap');
</style>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <h1>Welcome To The Search Panel</h1>
    <p>Enter a particular bloodgroup to see the details of volunteers in our database! </p>

    <form method="post" action="searchpanel.php">
    <div class="search_wrap search_wrap_3">
        <div class="search_box">
            <input type="text" name="bloodgp" class="input" placeholder="Enter Blood Group Eg. A+,B+">
            <button type="submit" class="btn btn_common">
                <i class="fas fa-search"></i>
            </button>
        </div>


    </form>
            <br><br>
            <div class="table-details">
            <table class="content-table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    include "conn.php";
                    if(isset($_POST['bloodgp']))
                    {
                        $bg=$_POST['bloodgp'];
                        $sql="SELECT DFName,DLName,DCNumber FROM `DONOR` where DBType like '$bg' ";
                        error_reporting(0);
                        $result=mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<td>" . $row['DFName'] . "</td>";
                            echo "<td>" . $row['DLName'] . "</td>";
                            echo "<td>" . $row['DCNumber'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tr>
            </tbody>
            </table>
                </div>
            </div>

</body>
</html>