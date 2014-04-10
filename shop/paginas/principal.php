<?php
	require_once("../config/masterconfig.php");
	if($_GET['compra_tipo'] == 0) { $titulo = $StringBonus; $img = "img/cashs_exemplo.png"; }
	if($_GET['compra_tipo'] == 1) { $titulo = $StringGolds; $img = "img/golds_exemplo.png"; }
?>
<div class="paginas">
	<p><b>Bem Vindo ao Webshop do <?php echo $nome; ?> - [<?php echo $titulo; ?>]</b></p>
    <table align="center">
    <tr>
        <td><p><b>Voc&ecirc; selecionou o shop de <?php echo $titulo; ?></b></p></td>
    </tr>
    <tr>
        <td valign="top"><img src="<?php echo $img; ?>" style="border-radius: 3px;" /></td>
    </tr>
    </table>
    
    <p><b>Estátisticas</b></p>
	<p id='titens'>Carregando...</p>
	<p id='tcompras'>Carregando...</p>
</div>
<script>
carregar('config/funcs.php?func=1','titens','GET');
carregar('config/funcs.php?func=2','tcompras','GET');
</script>