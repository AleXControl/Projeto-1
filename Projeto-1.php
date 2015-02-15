<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Curso de Bootstrap" />
<meta name="viewport" content="width-device-width, initial-scale=1" />
<title> Curso de Bootstrap </title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<link rel="stylesheet" href="style.css" />

</head>

<body>

	<div class="conteiner-fluid">
		<div class="row-fluid">
		  <div class="span8 cor1">
			<h1>Conteúdo</h1>
			<td class="p1" id="x2">
            <a href="projeto-1.php?x=home">Home</a>
            <br/>
            <a href="empresa.php?x=empresa">Empresa</a>
            <br/>
            <a href="produtos.php?x=produtos">Produtos</a>
            <br/>
            <a href="servicos.php?x=servicos">Serviços</a>
            <br/>
            <a href="contato.php?x=contato">Contato</a>
            <br/>
       		</td>
		
		  </div>
		  <div class="span4 cor2">
		  	<h1>mensagem</h1>
			<p>Bem vindos a nosso site.</p>
		  </div>
		</div>
	</div>

<script type="text/javascript" src="js.bootstrap.js" />


<footer>
	<div id="f_c">
	<h2>Tel.:+55 (11) 4114.5355<br/> 
	E-mail: <a href="mailto:contato@xcontroleventos.com">contato@xcontroleventos.com</a></h2>
	</div>
	<nav id="conectado">
	<h1>mantenha-se conectado</h1>
	<ul>
		<li><a href="http://www.facebook.com/xcontrol"><img src="img/redes sociais/face.png" alt=""></a></li>
		<li><a href="#"><img src="img/redes sociais/google.png" alt=""></a></li>
		<li><a href="#"><img src="img/redes sociais/linked.png" alt=""></a></li>
		<li><a href="#"><img src="img/redes sociais/pic.png" alt=""></a></li>
		<li><a href="#"><img src="img/redes sociais/skype.png" alt=""></a></li>
		<li><a href="#"><img src="img/redes sociais/twitter.png" alt=""></a></li>
	</ul>
	</nav>
	
	<div id="rodape"> Todos os direitos reservados - <?php $ano=date("Y"); echo"$ano<hr/>"; ?></div>
	</footer>


<!--
<div>
<script>

</script>
<center>
Todos os direitos reservados - <?php $ano=date("Y");
echo"$ano<hr/>"; ?>
</center>
</div>
-->
</body>
</html>
