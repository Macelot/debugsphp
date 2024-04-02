<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insere</title>
</head>
<body>
<?php
require('banco.php');

$sql = "DROP TABLE usuarios";
$stmt = $conn->query($sql);

$comando="CREATE TABLE if not exists `usuarios` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`idade` integer(11) DEFAULT NULL,
	`email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
	`fone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
	`senha` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
	`foto` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
	`ativo` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;";

$conn->query($comando);

$nomes = array("Romeu Almeida","Manuel Carneiro","Lia Pereira","Daniel Melo","Leonor Torres","Miguel Ramos","João Matos","Filipe Melo","Lara Lopes");
$idades = array(14,15,15,16,17,18,19,15,20);
	
$sql = "TRUNCATE usuarios";
$stmt = $conn->query($sql);
$stmt->execute();

for($i=0;$i<count($nomes);$i++){
	$sql = "INSERT INTO usuarios (nome, idade, email) VALUES (?,?,?)";
	$stmt = $conn->prepare($sql);
	$email=str_replace(" ","",$nomes[$i]);
	$stmt->execute(array($nomes[$i],$idades[$i],$email.'@gmail.com'));
}

echo "Deu certo";

?>
</body>
</html>









