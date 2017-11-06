<?php

$client = PacientData::getById($_GET["id"]);
$client->del();

Core::alert("Paciente eliminado Correctamente!");
print "<script>window.location='index.php?view=pacients';</script>";


?>