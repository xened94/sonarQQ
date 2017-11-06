<?php

$user = ReservationData::getById($_GET["id"]);
$user->del();

Core::alert("Cita Eliminada Exitosamente!");
print "<script>window.location='index.php?view=reservations';</script>";

?>