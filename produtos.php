<!DOCTYPE html>
<html>
<head lang="pt-br" >
	<meta charset="utf-8">
	<title>Produtos | SSB</title>
	<link rel="stylesheet" type="text/css" href="estilocss.css">
	<link href="https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet">
</head>
<body>
	<main>
		<header class="divquem">
			<H2>
				PRODUTOS
			</H2>
			<h2>Os melhores doces caseiros da região</h2>
		</header>
		
		<?php  
		include ("dados.php");
		foreach ($dados as $value): array_map('htmlentities', $value);
			?>
			<div = class="tableprod">
				<table>					
					<tbody>
						<tr style="color:black">
							<td><strong><a href="index.php?produtos=detalhesprodutos.php&id=1"><?=$dados[0]["nome"];?></a></strong><br>
								<a href="index.php?produtos=detalhesprodutos.php&id=1">
								<img height="150" src="<?=$dados[0]["photo"];?>" class= "testt"></a><br>
								<?=$dados[0]["descricao"];?> 
							</td>
							<td><strong><a href="index.php?produtos=detalhesprodutos.php&id=2"><?=$dados[1]["nome"];?></a></strong><br>
								<a href="index.php?produtos=detalhesprodutos.php&id=2">
								<img height="150" src="<?=$dados[1]["photo"];?>" class= "testt"></a><br>
								<?=$dados[1]["descricao"];?>
							</td>
						</tr>
					</tbody>
				</tr>
			</table> 
			
			<table>
				<thead>
					<tr>
						<th></th>

						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr style="color:black">
						<td><strong><a href="index.php?produtos=detalhesprodutos.php&id=3"><?=$dados[2]["nome"];?></a></strong><br>
							<a href="index.php?produtos=detalhesprodutos.php&id=3">
							<img height="150" src="<?=$dados[2]["photo"];?>" class= "testt"></a><br>
							<?=$dados[2]["descricao"];?>
						</td>
						<td><strong><a href="index.php?produtos=detalhesprodutos.php&id=4"><?=$dados[3]["nome"];?></a></strong><br>
							<a href="index.php?produtos=detalhesprodutos.php&id=4">
							<img height="150" src="<?=$dados[3]["photo"];?>" class= "testt"></a><br>
							<?=$dados[3]["descricao"];?>
						</td>
					</tr>
				</tbody>
			</tr>
		</table>
		<?php break ?>
	<?php endforeach ?>
</div>

</main>
</body>
</html>