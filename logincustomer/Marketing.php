<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
input[type=submit] {
               background-color: #264ea5;
               color: white;
               padding: 12px 20px;
               border: none;
               border-radius: 4px;
               cursor: pointer;
               float: right;
        }
input[type=submit]:hover {
      background-color: #264ea5;
       }
body{
	background-image: url('marketing.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size:100% 100% ;
	}
</style>

</head>
<h3><a href="../logincustomer/viewinformation.php"><input type="submit" name="view" value="BACK" class="btn-login"  /></a></h3>
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

$sql = "SELECT c.userid,c.name,c.sdate,c.edate,c.cdiscription,c.image,f.phonenumber 
		FROM crop c,farmer f,fmembers fm 
		WHERE c.userid=f.userid AND c.userid=fm.userid AND c.id=c.id " ;
$result = $conn->query($sql);

?>


	
<table style="width:100%">
<tr>
		<th>Farmer Name</th>
        <th>Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Discription</th>
        <th>Image</th>
        <th>Contact</th>
		</tr>
		<?php
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
	?>
 
<tr>
		<td><?php echo $row["userid"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["sdate"]; ?></td>
		<td><?php echo $row["edate"]; ?></td>
		<td><?php echo $row["cdiscription"]; ?></td>
		<td><?php echo "<img src='".$row['image']."' style='width:200px',height:200px;>" ?></td>
		<td><?php echo $row["phonenumber"]; ?></td>
</tr>
	 
   
   

	<?php
		}
	?>
</table>
<?php
	} else {
			echo "0 results";
	}
	$sql = "SELECT c.userid,c.name,c.sdate,c.edate,c.cdiscription,c.image,f.phonenumber 
	        FROM crop c,farmer f,fmembers fm 
	        WHERE c.userid=f.userid AND c.userid=fm.userid AND c.id=c.id"; 
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
