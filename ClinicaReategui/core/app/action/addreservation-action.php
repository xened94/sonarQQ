<?php



$rx = ReservationData::getRepeated($_POST["pacient_id"],$_POST["medic_id"],$_POST["date_at"],$_POST["time_at"]);
if($rx==null){
$r = new ReservationData();

$r->pacient_id = $_POST["pacient_id"];
$r->medic_id = $_POST["medic_id"];
$r->date_at = $_POST["date_at"];
$r->time_at = $_POST["time_at"];
$r->user_id = $_SESSION["user_id"];

$r->status_id = $_POST["status_id"];
$r->payment_id = $_POST["payment_id"];
$r->price = $_POST["price"];

$r->symtoms = $_POST["symtoms"];



$r->add();

Core::alert("Agregado exitosamente!");
}else{
Core::alert("Error al agregar, Cita Repetida!");
}
Core::redir("./index.php?view=reservations");
?>