<!DOCTYPE html>
<html>
<head lang="pt-br" >
	<meta charset="utf-8">
	<title>Sweet Shop Backes</title>
	<link rel="stylesheet" type="text/css" href="estilocss.css">
	<link href="https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet">
	<div class="cabecalho">
        <nav class="menu-princ">
            <img src="images/logotipo.png" class="logotipobackes">
            <div class="li-princ">
                <ul class="opcoes-princ">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?quemsomos=sobrenos.php">QUEM SOMOS</a></li>
                    <li><a href="index.php?produtos=produtos.php">PRODUTOS</a></li>
                    <li><a href="index.php?produtos=contato.php">CONTATO</a></li>

                </ul>
            </div>
        </nav>
    </head>
    <body class="bodyexemple">
      <main>   
        <div class="mainexemple">
            <?php
            if (isset($_GET['quemsomos']) && !empty($_GET['quemsomos'])) {
                $quemsomos = $_GET['quemsomos'];
                include ($quemsomos);    
            } else{
                
            }   
            if (isset($_GET['produtos']) && !empty($_GET['produtos'])) {
                $produtos = $_GET['produtos'];
                include ($produtos);    
            } else{
           // echo "PAG PRINCIPAL2";
            }
            ?>
        </div>
    </main>
    


    <div class="footer">
      RA: 20119218-5	<br>
      Nome: Elivan Fengler Backes <br>
      Unicesumar <br>
      SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET <br>
      <strong>© SWEET SHOP BACKES</strong>
  </div>
</body>
</html>

