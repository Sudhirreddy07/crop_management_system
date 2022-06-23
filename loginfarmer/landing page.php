<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];

?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        header {
            background-color: #171e2e;
            padding: 12px;
            text-align: left;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-decoration: aqua;
        }
        
        
        
        body {
            margin: 010px;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
            overflow: hidden;
            background-color: #1d273f;
        }
        
        .topnav a.login {
            float: right;
            color: #f2f2f2;
            padding: 14px 16px;
        }
        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            border-radius: 5px;
            color: #171e2e;
        }
        
        .topnav a.active {
            border-radius: 5px;
            background-color: #aa0452;
            margin-block-start: inherit;
            color: white;
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Float four columns side by side */
        
        .column {
            float: left;
            width: 25%;
            padding: 010px 5px;
        }
        
        .row {
            margin: 0 -5px;
        }
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive columns */
        
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 10px;
            }
        }
        /* Style the counter cards */
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(107, 53, 53, 0.2);
            padding: 1px;
            text-align: center;
            background-color: #171e2e;
            color: white;
        }
    
        body{
            background-image: url("banner.JPG");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100% 100% ;
		}
    
    </style>
</head>
</head>

    
   

<body>
<header >CROP MANAGEMENT SYSTEM</header>

<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a class="CROPS" href="crop/crops.php">CROPS</a>
    <a class="FARMER INFO" href="farmer/farmerinfo.php">FARMER INFO</a>
    <a style=" margin-top: 1px; margin-left:1000px; float:right;" class="Logout" href="logout.php">LOGOUT</a>
    
</div>
<div class="container mt-2">
  <hr>
</div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crops";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
          die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
        }?>
        <h2 class="text-center text-primary">Farmer Name: <?php echo $fname;echo " "; ?></h2>
        <?php
        $sql="SELECT * FROM fmembers where fname='$fname'";
        $result=$conn->query($sql);
          $result = mysqli_query($conn,$sql);
      ?>
                      <?php
                          $rows=mysqli_fetch_assoc($result);
                      ?>
                      <div class="container mt-4">
                      <div class="row">
                          <div class="col">
                              <div class="table-responsive-sm">
                              <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                                  <thead style="color : black;">
                                      <tr>
                                      <th scope="col" class="text-center py-2">Name</th>
                                      <td class="text-center py-2"><?php echo $rows['fname']; ?></td>
                                      <th scope="col" class="text-center py-2">Phone Number</th>
                                      <td class="text-center py-2"><?php echo $rows['phonenumber'];?></td>
                                    </tr>
                                    <tr>
                                      <th scope="col" class="text-center py-2">Address</th>
                                      <td class="text-center py-2"><?php echo $rows['Address']?></td>
                                      <th scope="col" class="text-center py-2">Mail</th>
                                      <td class="text-center py-2"><?php echo $rows['mail']?></td>
                                      </tr>
                                   
                                    <tr>
                                      
                                    <th scope="col" class="text-center py-2">View Crops</th>
                                    <td class="text-center py-2"><a href="crop/cropinfo.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-outline-primary"><b>VIEW</b></button></a>
                                       
                                      <th scope="col" class="text-center py-2">View Farmer Contact</th>
                                      <td class="text-center py-2"><a href="farmer/viewfarmerinfo.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-outline-primary"><b>VIEW</b></button></a>
                                      </tr>
                                  </thead>
                                              </table>
                                              </div>
                                          </div>
                                      </div>
                                   </div>
                                   <div class="container mt-4  ">
                                   <div class="bg-dark text-white rounded">
                                     <center>
                                     <p>Copyright &copy; 2021 DBP2021-C18(Sudhir Vardhan Reddy H & Sanjay H S). All rights reserved.</p>
                                   </center>
                                   </div>
                                 </div>
</body>
</html>

<?php

} 
?>
