<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" >
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="z/engine1/jquery.js"></script>

	<script lang="javascript">
	
		function validacao(){
			nome=document.form1.txtnome.value;
			email=document.form1.txtemail.value;
			assunto=document.form1.txtassunto.value;
			mensagem=document.form1.txtmsg.value;
			
			if(nome==""){
				alert("Coloque seu nome");
				document.form1.txtnome.focus();
			}
			else if(email==""){
				alert("Coloque seu e-mail");
				document.form1.txtemail.focus();
			}
			else if(assunto==""){
				alert("Coloque um assunto");
				document.form1.txtassunto.focus();
			}
			else if(mensagem==""){
				alert("Digite uma mensagem");
				document.form1.txtmsg.focus();
			}

			else{
				document.form1.submit();
			}
		}
	</script>
</head>
<body>
	<header>
		<ul>
			<li><a href="projeto-1.php" >Home</a></li>
		</ul>
		<div id="tel">
			<div id="c2">
				<form action="recebe.php" method="post" name="form1">
					<table>
						<tr>
							<td>Nome:</td>
							<td colspan="3" id="campo"><input name="txtnome" type="text" class="i1"/></td>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td colspan="3"><input name="txtemail" type="text" class="i1"/></td>
						</tr>
						<tr>
							<td>Assunto:</td>
							<td colspan="3"><input name="txtassunto" type="text" class="i1"/></td>
						</tr>
						<tr>
							<td>Mensagem:</td>
							<td colspan="3"><textarea name="txtmsg" cols="56" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="button" value="Enviar"  class="btn" onclick="validacao();"/></td>
							<td colspan="2" id="apagar"><input type="reset" value="Apagar"  class="btn"/></td>
						</tr>
					</table>					
				</form>
			</div>
		</div>
		<hr/>
	
</body>

<footer>
	<div id="rodape"> Todos os direitos reservados - <?php $ano=date("Y"); echo"$ano<hr/>"; ?></div>
</footer>


</html>
