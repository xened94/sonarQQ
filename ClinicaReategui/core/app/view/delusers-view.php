<?php

$user = UserData::getById($_GET["id"]);

$user->del();

Core::alert("Paciente eliminado Correctamente!");
print "<script>window.location='index.php?view=users';</script>";

?>