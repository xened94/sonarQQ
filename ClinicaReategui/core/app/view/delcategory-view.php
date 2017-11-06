<?php

$category = CategoryData::getById($_GET["id"]);
$category->del();


Core::alert("Categorií eliminada Correctamente!");
print "<script>window.location='index.php?view=categories';</script>";

?>