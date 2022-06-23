<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['fname']);

header("location:../../cms?logout=true");
?>
