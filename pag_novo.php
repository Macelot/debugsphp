<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <form action="acao_grava.php" method="post">
                Nome:<input type="text" class="form form-control" name="nome" id="" placeholder="Digite seu nome"> 
                E-mail:<input type="text" class="form form-control" name="email" id="" placeholder="Digite seu e-mail"> 
                <input type="submit" value="Gravar">
            </form>
            <a href="lista.php">Voltar</a>
        </div>
    </div>
</body>
</html>