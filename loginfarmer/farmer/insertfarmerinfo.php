<?php
$userid=val($_POST["userid"]);
$name=val($_POST["name"]);
$phonenumber=val($_POST["phonenumber"]);
$Address=val($_POST["Address"]);
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
$sql="insert into farmer(userid,name,phonenumber,Address,image) values('$userid','$name','$phonenumber','$Address','$image')";
if($conn->query($sql)==TRUE)
{
    header("Location:farmerinfo.php?message=successfully");
}else{
    header("Location:farmerinfo.php?message=error");
}
$conn->close();
?>
