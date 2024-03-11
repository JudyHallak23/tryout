<?php
include("materialsCorona.php");
SESSION_START();

if(!isset($_SESSION['listCity'])){
	$_SESSION['listCity']= new listData();
}
$city1= $_SESSION['listCity'];
?>