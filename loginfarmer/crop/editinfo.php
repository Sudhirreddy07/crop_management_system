
<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname = "crops";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed!".$conn->connect_error);
}
$id = $_GET["id"];
$sql="SELECT * FROM crop WHERE id='$id' ";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $cropid=$row["cropid"];
    $userid=$row["userid"];
    $name=$row["name"];
    $sdate=$row["sdate"];
    $edate=$row["edate"];
    $cdiscription=$row["cdiscription"];
    $image=$row["image"];

  }
}
else {
  echo " 0 Result";
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>crops</title>
    <style> 
    body{
        background-image: url('cropbackground.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:100% 100% ;
    }
    header {
            background-color: #171e2e;
            padding: 12px;
            text-align: left;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-decoration: aqua;
        }
        .LOGOUT {
            background-color: #ddd;
            border-radius: 60px;
            color: #0f1011;
            width: 5%;
            float: right;
            top: 0%;
            right: 0%;
            padding: 5px; font-size: 30;
        }
        input[type=submit]{
               background-color: #264ea5;
               color: white;
               padding: 12px 20px;
               border: none;
               border-radius: 4px;
               cursor: pointer;
        }
            input[type=submit]:hover {
               background-color: #264ea5;
        }
        input[type=text], input[type=date],input[type=file] {
                width: 10%; 
                padding: 5px; 
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical 
                }
       
    </style>    
    </head>
<body>
   <header>INSERT THE CROP DETAILS</header> <h3><a href="../../loginfarmer/crop/cropinfo.php" style="float: right;"><input type="submit" name="view" value="BACK" class="btn-login"  /></a></h3>
  
        <div class="topnav">
          
        </div>
 
            <form  action="updatedcropinfo.php" method="post">
                <div class="form_text">
                <h1> Enter The Crop ID</h1> <input type="text" id="cropid" name="cropid" placeholder="ID" value="<?php echo $cropid ;?>" style="animation: reverse;" required>
                <h1> Enter The Farmer User ID</h1> <input type="text" id="userid" name="userid" placeholder="ID" value="<?php echo $userid;?>" style="animation: reverse;" required>
                    <h1> Enter The Crop Name</h1> <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $name;?>" style="animation: reverse;" required>
                    <h1> Enter The Crop Available Period</h1> <input type="date" id="sdate" name="sdate" placeholder="Period" value="<?php echo $sdate;?>" style="animation: reverse;" required> 
                    <input type="date" id="edate" name="edate" placeholder="Period" value="<?php echo $edate;?>" style="animation: reverse;" required>
                    <h1> Enter The Crop Discription</h1> <input type="text"  id="cdiscription" name="cdiscription" placeholder="discription" value="<?php echo $cdiscription;?>" style="animation: reverse;" required>
                    <h1> Enter The Crop Image</h1> <input type="file"  id="image" name="image" placeholder="Add image" value="<?php echo $image;?>" style="animation: reverse;" required>
                    <input type="submit"  name="submit" value="submit" class="btn-login" />
                 </div>
            </form>
    </div>
    
</body>        
</html>



