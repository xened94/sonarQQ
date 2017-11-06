<?php

$client = MedicData::getById($_GET["id"]);
$client->del();

Core::alert("Médico eliminada Correctamente!");
print "<script>window.location='index.php?view=medics';</script>";



?>