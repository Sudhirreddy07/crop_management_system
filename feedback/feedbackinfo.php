<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
  table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
  text-align: left;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
body{
        background-image: url('FEEDBACK.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:100% 100% ;
    }
  </style>

</head>
<h3><a href="../feedback/feedback.php" style="float:right;"><input type="submit"  value="BACK" class="btn-login"  /></a></h3>

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

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

?>
<center><br>
<table width=100% >

</center>
<?php
if(isset($_GET["message"])){
  if($_GET["message"]=="successfully")
  {?>
    <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" >&times;</a>
      <b>Update Successfully</b></div>
      <?php }
}
    ?>
    <?php
    if(isset($_GET["message"])){
      if($_GET["message"]=="delete")
      {?>
        <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" >&times;</a>
          <b>delete Successfully</b></div>
          <?php }
    }
        ?>
	

	  
	  <tr>
		<th>Name</th>
		<th>Email</th>
    <th>Subject</th>
</tr>

<?php
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
	?>

 <tr>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["mail"]; ?></td>
      <td><?php echo $row["subject"]; ?></td>
</tr>
	<?php
		}
	?>
</table>
<?php
	} else {
			echo "0 results";
	}
  $sql = "SELECT * FROM feedback";
  $result = $conn->query($sql);
		$row = mysqli_num_rows($result);
    ?>
    <br>
    <table width="300" border="1" cellspacing="1" cellpadding="1">
      <tr>
    <td>Total Number of Feedback</td>
    <td><?php echo $row ?></td>
    </tr>
  </table>
  <?php

$conn->close();
?>
</html>
