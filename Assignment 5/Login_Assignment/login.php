<?php 

session_start();


$Email=$_POST['Email'];
$Password=$_POST['Password'];


$user=[
'email'=> $Email,
'Name'=>'Elham',
'Account'=>'Admin',


];

$_SESSION['auth_user']=$user;
$_SESSION['authenticated']=true;

header('location: MyProfile.php');
?>

