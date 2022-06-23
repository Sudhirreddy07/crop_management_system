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
  background-color:#45a049;
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

$sql = "SELECT c.id,c.userid,c.name,c.sdate,c.edate,c.cdiscription,c.image
        FROM crop c,fmembers fm 
         WHERE c.userid=fm.userid AND c.userid='$fname' and fname='$fname'";
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
        <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <b>delete Successfully</b></div>
          <?php }
    }
        ?>

<tr>
		<th>UserId</th>
	  <th>Name</th>
    <th>Start Date</th>
	  <th>End Date</th>
	  <th>Discription</th>
  	<th>Image</th>
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
  <td><a href="deletecrop.php?id=<?php echo $row["id"] ?>" ><input type="submit"  value="Delete" class="btn-login"  /></a> 
    <a href="editinfo.php?id=<?php echo $row["id"] ?>" ><input type="submit"  value=" Edit " class="btn-login"  /></a> </td>


</tr>
	<?php
		}
	?>
</table>
<?php
	} else {
			echo "0 results";
	}
  $sql = "SELECT c.id,c.userid,c.name,c.sdate,c.edate,c.cdiscription,c.image
          FROM crop c,fmembers fm 
          WHERE c.userid=fm.userid AND c.userid='$fname' and fname='$fname'";
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
<?php

} 
?>