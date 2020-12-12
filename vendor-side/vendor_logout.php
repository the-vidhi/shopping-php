<?php
session_start();
session_destroy();
header('location:vendor_login.php');
?>