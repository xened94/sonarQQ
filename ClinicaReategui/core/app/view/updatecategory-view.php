<?php

if(count($_POST)>0){
	$user = CategoryData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->update();

Core::alert("Categoría Actualizada Correctamente!");
print "<script>window.location='index.php?view=categories';</script>";


}


?>