<?php
require('banco.php');

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

$sql = "UPDATE usuarios SET nome=?,email=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute(array($nome,$email,$id));

header('Location:lista.php');
