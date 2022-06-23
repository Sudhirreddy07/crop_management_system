<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crops";

$name=val($_POST["cropid"]);
$name=val($_POST["userid"]);
$name=val($_POST["name"]);
$sdate=val($_POST["sdate"]);
$edate=val($_POST["edate"]);
$cdiscription=val($_POST["cdiscription"]);
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
$sql="UPDATE crop SET cropid='$cropid',userid='$userid',name='$name',sdate='$sdate',edate='$edate',cdiscription='$cdiscription',image='$image' WHERE id='$id' ";

if($conn->query($sql)===TRUE){
header("location:cropinfo.php?message=successfully");
}
else {
  echo "ERROR".$conn->error;
  $conn->close();
}
?>
