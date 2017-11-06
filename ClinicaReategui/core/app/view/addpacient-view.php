<?php


if(count($_POST)>0){
	$user = new PacientData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->gender = $_POST["gender"];
	$user->day_of_birth = $_POST["day_of_birth"];
	$user->alergy = $_POST["alergy"];
	$user->address = $_POST["address"];
	$user->phone = $_POST["phone"];

	$user->add();


Core::alert("Paciente Agregado Correctamente!");
print "<script>window.location='index.php?view=pacients';</script>";


}


?>