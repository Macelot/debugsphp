<?php
require('banco.php');

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

$sql = "INSERT INTO usuarios (nome, email) VALUES (?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute(array($nome,$email));

header('Location:lista.php');