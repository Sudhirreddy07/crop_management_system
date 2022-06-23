<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'crops');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$userid = mysqli_real_escape_string($mysqli, $_POST['userid']);
$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$phonenumber = mysqli_real_escape_string($mysqli, $_POST['phonenumber']);
$Address = mysqli_real_escape_string($mysqli, $_POST['Address']);
$mail = mysqli_real_escape_string($mysqli, $_POST['mail']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);


//VALIDATION

if (strlen($userid) < 2) {
	echo 'userid';
} elseif (strlen($fname) < 2) {
    echo 'fname';
} elseif (strlen($phonenumber) < 2) {
    echo 'phonenumber';
} elseif (strlen($Address) < 2) {
    echo 'Address';
} elseif (strlen($mail) <= 4) {
    echo 'eshort';
} elseif (strlen($password) <= 4) {
    echo 'pshort';
	function val($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

//VALIDATION

} else {

	//PASSWORD ENCRYPT
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	$query = "SELECT * FROM cmembers WHERE mail='$mail'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);

		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO cmembers (userid,fname,phonenumber,Address,mail, password) VALUES ('$userid','$fname','$phonenumber','$Address','$mail', '$spassword')");

			if ($insert_row) {

				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['userid'] = $userid;
				$_SESSION['fname'] = $fname;
				$_SESSION['phonenumber'] = $phonenumber;
				$_SESSION['Address'] = $Address;
				

				echo 'true';

			}

		} else {

			echo 'false';

		}

}

?>
