<?php

session_start();
session_destroy();
header('location: MyProfile.php');
?>
