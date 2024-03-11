<?php
include("InitialSessionCity.php");
if(isset($_POST['addcity'])){
	if(!empty($_POST['city'])){
		$city= new City($_POST['city']);
		$city1->listCity[$city1->nbcity++] = $city;
		print_r($city1->listCity);
	}
}

if(isset($_POST['principlemenu'])){
	header("Location:coronaMenu.php");
}
?>