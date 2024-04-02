<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php
require('banco.php');
$buscar = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$sql = "SELECT * FROM usuarios WHERE id = $buscar";
$stmt = $conn->query($sql);
while($linha=$stmt->fetch()){
    $n=$linha['nome'];
    $e=$linha['email'];
}
    
?>
<div class="container">
	<div class="row">
        <form action="acao_altera.php" method="post">
            <input type="hidden" name="id" id="" value="<?php echo $buscar?>">
            Nome:<input type="text" name="nome" id="" placeholder="Digite seu nome" value="<?php echo $n?>"> 
            E-mail:<input type="text" name="email" id="" placeholder="Digite seu e-mail" value="<?php echo $e?>"> 
            <input type="submit" value="Gravar">
        </form>
        <a href="lista.php">Voltar</a>
    </div>
</div>
</body>
</html>