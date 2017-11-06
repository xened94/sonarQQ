<?php

if(count($_POST)>0){
	$user = PacientData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->gender = $_POST["gender"];
	$user->day_of_birth = $_POST["day_of_birth"];
	$user->alergy = $_POST["alergy"];
	$user->address = $_POST["address"];
	$user->phone = $_POST["phone"];
	$user->update();

Core::alert("Paciente actualizado Correctamente!");
print "<script>window.location='index.php?view=pacients';</script>";


}


?>