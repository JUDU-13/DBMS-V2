<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&display=swap');
    </style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,200&display=swap');
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="staffdashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body>

    <header>

        <nav>
            <ul>
                <li><a href="viewdonor.php">View Donor</a></li>
                <li><a href="viewpatient.php">View Patient</a></li>
                <a class="cta" href="index.html"><button>Logout</button></a>  
            </ul>
        </nav>

        
   </header>

   <div class="title">
   <p meth0d=get>Welcome&nbsp</p>
   <?php 
   session_start();
    include "conn.php";
    echo $_SESSION['SName'];
    ?>
   </div>

 <div class="box">
    
     <a href="donorform.html" class="item1">
            <p class="box_text">NEW DONOR</p>  
     </a>
    

    <a href="patientform.html" class="item2">  
        <p class="box_text">NEW PATIENT</p>
    </a>
  </div>
    

</body>
</html>