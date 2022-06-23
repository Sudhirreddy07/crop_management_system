<?php
$cropid=val($_POST["cropid"]);
$userid=val($_POST["userid"]);
$name=val($_POST["name"]);
$sdate=val($_POST["sdate"]);
$edate=val($_POST["edate"]);
$cdiscription=val($_POST["cdiscription"]);
$image=val($_POST["image"]);
function val($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
$servername="localhost";
$username="root";
$password="";
$dbname="crops";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$sql="insert into crop(cropid,userid,name,sdate,edate,cdiscription,image) values('$cropid','$userid','$name','$sdate','$edate','$cdiscription','$image')";
if($conn->query($sql)==TRUE)
{
    header("Location:crops.php?message=successfully");
}else{
    header("Location:crops.php?message=error");
}
$conn->close();
?>
