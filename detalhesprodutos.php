<!DOCTYPE html>
<html>
<head lang="pt-br" >
	<meta charset="utf-8">
	<title>Detalhes de produto | SSB</title>
	<link rel="stylesheet" type="text/css" href="estilocss.css">
	<link href="https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet">
</head>
<body>
	<main>
		<div class="divquem">
			<H2><strong>DETALHES DO PRODUTOS</strong></H2>
			
		</div>
		
		<div class="formcontato2">
		<?php  
		include ("dados.php");
		if (isset($_GET['id']) && !empty($_GET['id'])) {
			$id = $_GET['id'];                
		} else{
			return 0;   
		} 

		foreach ($dados  as $value) {
			if ($value["id"] == $id) {		
				?>
				<div class="div23">

					<img align="left" src="<?=$value["photo"];?>" class= "testt1"> 
					<h2><?=$value["nome"];?></h2><br>
					<?=$value["descricao"];?> <br>					
					Digite a quantidade:<input type="input" name="Quantidade" placeholder="Quantidade">
					<br>

					<button>Comprar</button>
				</div>
				<?php
			}else {
			//
			}
		}
		?>
		<a href="index.php?produtos=produtos.php"><button>Voltar</button></a>
		</div>
		
	</main>
</body>
</html>