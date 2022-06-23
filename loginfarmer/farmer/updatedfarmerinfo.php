<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crops";

$userid=val($_POST["userid"]);
$name=val($_POST["name"]);
$phonenumber=val($_POST["phonenumber"]);
$Address=val($_POST["Address"]);
$image=val($_POST["image"]);
$id=val($_POST["id"]);
function val($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Connection failed".$conn->connect_error);
}
$sql="UPDATE farmer SET userid='$userid',name='$name',phonenumber='$phonenumber',Address='$Address',image='$image' WHERE id='$id' ";

if($conn->query($sql)===TRUE){
header("location:farmerinfo.php?message=successfully");
}
else {
  echo "ERROR".$conn->error;
  $conn->close();
}
?>
