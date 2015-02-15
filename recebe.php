<ul>
	<a href="projeto-1.php" >Home</a>
	<a href="Contato.php" >Contato</a>
</ul>


<?php
$txtnome=$_POST['txtnome'];
$txtemail=$_POST['txtemail'];
$txtassunto=$_POST['txtassunto'];
$txtmsg=$_POST['txtmsg'];

echo "Dados enviados com sucesso!!! <br/><br/>Abaixo seguem os dados que você enviou: <br/><br/>";

echo"<b>Nome: </b> $txtnome <br/>";
echo"<b>E-mail: </b> $txtemail <br/>";
echo"<b>Assunto: </b> $txtassunto <br/>";
echo"<b>Mensagem: </b> $txtmsg <br/>";

echo"<hr/>";

?>


<footer>
	<div id="rodape"> Todos os direitos reservados - <?php $ano=date("Y"); echo"$ano<hr/>"; ?></div>
</footer>
