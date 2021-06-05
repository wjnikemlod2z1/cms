<?php
session_start();
session_destroy(); //销毁session
header('location:login.php');
?>