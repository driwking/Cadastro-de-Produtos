<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../componentes/logo.png" type="image/x-icon">

	<title> Overview das vendas<title>
</head>
<body>
<h1>aaa</h1>


</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	    <?php echo "<style>"?> 
			<?php 
				include_once '/xampp/htdocs/php/Cadastro-de-Produtos/front-end/componentes/menu.css'
			?>
			<?php  
				include_once '/xampp/htdocs/php/Cadastro-de-Produtos/front-end/componentes/menu-lateral.css'
			?> 
    <?php echo "</style>"?>
</head>
<body>
	<?php require_once '../componentes/menu-topo.php';?>

	<?php require_once '../componentes/menu-lateral.php';?>
	
<section class="sec-conteudo">
    <h1>CADASTRO DE CLIENTE</h1>
    
    <div class='div-formulario'>
    <form>
        <label>Nome:</label><input type="text">
        <label>Endereço:</label><input type="text"><label>Nº</label><input type="number">
        <label>Telefone:</label><input type="text">
    </form>
    </div>

    <button class="botao" type="submit">CADASTRAR</button>
</section>
</section>
</main>

</body>
</html>
