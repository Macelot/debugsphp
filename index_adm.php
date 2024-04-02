<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conecta</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post">
			<input type="text" name="buscar">
			<input type="submit" value="ok">
		</form>
	</div>
	<div class="row">
		<div class="col">
			<a href="index_adm.php?ativo=1">Ativados</a>
			<a href="index_adm.php?ativo=0">Desativados</a>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<table class="table table-hover">
			  <thead>
				<tr>
				  <th scope="col">Id</th>
				  <th scope="col">Nome</th>
				  <th scope="col">e-mail</th>
				  <th scope="col">Operações</th>
				</tr>
			  </thead>
				<?php
				require('banco.php');
				$buscar="";
				if(isset($_POST['buscar'])){
					$buscar=($_POST['buscar']);
				}
				$sql = "SELECT * FROM usuarios WHERE nome like ('%$buscar%') OR email like ('%$buscar%') ORDER BY nome DESC";

				if(isset($_GET['ativo'])){
					if($_GET['ativo']==1){
						$sql = "SELECT * FROM usuarios WHERE ativo=1 AND (nome like ('%$buscar%') OR email like ('%$buscar%') ) ORDER BY nome DESC";
					}
					if($_GET['ativo']==0){
						$sql = "SELECT * FROM usuarios WHERE ativo=0 AND (nome like ('%$buscar%') OR email like ('%$buscar%') )ORDER BY nome DESC";
					}
				}
				
				$stmt = $conn->query($sql);
				while($linha=$stmt->fetch()){
					echo "  <tbody>";
					echo "    <tr>";
					echo "<td> ".$linha['id']."</td>";
					echo "<td>".mb_convert_case($linha['nome']." ",MB_CASE_TITLE,'UTF-8')."</td>";
					echo "<td>".mb_convert_case($linha['email']." ",MB_CASE_LOWER,'UTF-8')."</td>";
					echo "<td> <a href='pag_editar.php?id=".$linha['id']."'> Editar</a> ";
					if($linha['ativo']==0){
						echo " <a href='acao_ativar.php?id=".$linha['id']."'> Ativar </a> </td>";
					}
					echo "</tr>";
				}
				
				?>
			  </tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<a href="pag_novo.php">Novo</a>
	</div>
	<div class="row">
		<a href="lista.php">Index Normal</a>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>









