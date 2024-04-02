<?php
require('banco.php');

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$sql = "UPDATE usuarios set ativo='0' WHERE id=".$id;
$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location:index_adm.php');