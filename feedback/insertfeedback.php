<?php
$userid=val($_POST["userid"]);
$name=val($_POST["name"]);
$mail=val($_POST["mail"]);
$subject=val($_POST["subject"]);
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
$sql="insert into feedback(userid,name,mail,subject) values('$userid','$name','$mail','$subject')";
if($conn->query($sql)==TRUE)
{
    header("Location:feedback.php?message=successfully");
}else{
    header("Location:feedback.php?message=error");
}
$conn->close();
?>
