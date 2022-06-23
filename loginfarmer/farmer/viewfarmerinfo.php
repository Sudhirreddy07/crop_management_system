<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];

?>
<html>
<head>
<style>
 
 input[type=submit] {
   background-color: #45a049;
   color: white;
   padding: 12px 20px;
   border: none;
   border-radius: 4px;
   cursor: pointer;
 }
 
 input[type=submit]:hover {
   background-color: #45a049;
 }
 table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
 </style>
<meta name="viewport" content="width=device-width,initial-scale=1.0">


</head>
<h3><a href="../../loginfarmer/landing page.php" style="float:right;"><input type="submit"  value="BACK" class="btn-login"  /></a></h3>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crops";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="    SELECT f.id,f.userid,f.name,f.phonenumber,f.Address,f.image
          FROM farmer f,fmembers fm  
          where f.userid=fm.userid AND f.userid='$fname' and fname='$fname'";
$result = $conn->query($sql);

?>
<table width=100%>
<?php
if(isset($_GET["message"])){
  if($_GET["message"]=="successfully")
  {?>
    <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <b>Update Successfully</b></div>
      <?php }
}
    ?>
    <?php
    if(isset($_GET["message"])){
      if($_GET["message"]=="delete")
      {?>
        <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <b>delete Successfully</b></div>
          <?php }
    }
        ?>

  <tr>
		<th>ID</td>
		<th>User Id</th>
    <th>Name</th>
    <th>Phone Number</th>
		<th>Address</th>
    <th>Image</th>
    </tr>
    <?php
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
	?>

<tr>
  <td><?php echo $row["id"]; ?></td>
  <td><?php echo $row["userid"]; ?></td>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["phonenumber"]; ?></td>
  <td><?php echo $row["Address"]; ?></td>
  <td><?php echo "<img src='".$row['image']."' style='width:200px',height:200px;>" ?></td>
  <td><a href="deletefarmerinfo.php?id=<?php echo $row["id"] ?>" ><input type="submit"  value="Delete" class="btn-login"  /></a> 
    <a href="editfarmerinfo.php?id=<?php echo $row["id"] ?>" ><input type="submit"  value=" Edit " class="btn-login"  /></a> </td>
</tr>
	<?php
		}
	?>
</table>
<?php
	} else {
			echo "0 results";
	}
  $sql = "  SELECT f.id,f.userid,f.name,f.phonenumber,f.Address,f.image
  FROM farmer f,fmembers fm  
  where f.userid=fm.userid AND f.userid='$fname' and fname='$fname'";
  $result = $conn->query($sql);
		$row = mysqli_num_rows($result);
    ?>
    <br>
    <table width="300" border="1" cellspacing="1" cellpadding="1">
      <tr>
    <td>Total Number of Register</td>
    <td><?php echo $row ?></td>
    </tr>
  </table>
  <?php

$conn->close();
?>
</html>
<?php }
?>