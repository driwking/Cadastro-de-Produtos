<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../componentes/logo.png" type="image/x-icon">
	<title>Document</title>
	    <?php echo "<style>"?> 
			<?php 
				include_once '/xampp/htdocs/php/Cadastro-de-Produtos/front-end/componentes/menu.css'
			?>
			<?php  
				include_once '/xampp/htdocs/php/Cadastro-de-Produtos/front-end/componentes/menu-lateral.css'
			?> 
    <?php echo "</style>"?>

	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<?php require_once	 '../componentes/menu-topo.php';?>

	<?php require_once '../componentes/menu-lateral.php';?>
	
<section class="sec-conteudo">
    <h1>CADASTRO DE CLIENTE</h1>
    
    <div class='div-formulario'>	
    <form>

        <div class="div-endereco"> <label>Nome:</label><input type="text"></div>
        <div class="div-endereco"><label>Endereço:</label><input type="text"><label>Nº</label><input type="number"></div>
		<div class="div-endereco"><label>Telefone:</label><input type="text"></div>
    </form>
    </div>

    <button class="botao" type="submit">CADASTRAR</button>
</section>
</section>
</main>

</body>
</html>
