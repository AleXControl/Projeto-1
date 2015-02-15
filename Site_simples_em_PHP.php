<style type="text/css">
    .p1{border: solid 1px black; text-align: center}
    #x1{background: gray; height: 100px}
    #x2{background: silver; width: 120px;}
    #x3{background: #99ccff; width: 580px; height: 350px}
    
</style>
<table align="center">
    <tr>
        <td colspan="2" class="p1" id="x1">Site de Teste</td>
    </tr>
    <tr>
        <td class="p1" id="x2">
            <a href="principal.php?x=home">Home</a>
            <br/>
            <a href="principal.php?x=empresa">Empresa</a>
            <br/>
            <a href="principal.php?x=produtos">Produtos</a>
            <br/>
            <a href="principal.php?x=servicos">Serviços</a>
            <br/>
            <a href="principal.php?x=contato">Contato</a>
            <br/>
        </td>
        <td class="p1" id="x3">
            <?php
            if(isset($_REQUEST['x'])){
                $link=$_REQUEST['x'];
                switch($link){
                    case"inicio": include("inicio.php");break;
                    case"fotos": include("fotos.php");break;
                    case"noticias": include("noticias.php");break;
                    default: include("inicio.php");
                }
            }
            else{
    echo "Sejam Bem vindos ao Site!!!";
            }
            ?>
            </td>
    </tr>
</table>