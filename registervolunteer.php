<?php

session_start();
include "./DB/DbConnection.php";

$sql='INSERT INTO donor VALUES ("'.$_POST['dId'].'","'.$_POST['dFname'].'","'.$_POST['dLname'].'", '.$_POST['dAge'].',"'.$_POST['DBloodGroup'].'", "'.$_POST['dSex'].'","'.$_POST['dAddress'].'","'.$_POST['dCity'].'", '.$_POST['dPincode'].', '.$_POST['dPhoneNo'].') ';

echo $sql."<br><br>";
mysqli_query($connection,$sql);
echo "<br><br>";
echo mysqli_error($connection);

$sql1='INSERT INTO volunteer VALUES ("'.$_POST['dId'].'","'.$_POST['dId'].'")';
mysqli_query($connection,$sql1);
echo "<br><br>";
echo mysqli_error($connection);

?>