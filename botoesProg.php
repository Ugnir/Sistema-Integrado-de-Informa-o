<?php 
if($_SESSION['isAdmin']||$_SESSION['isPlanejador']):
 ?>
<button class="buttongeral btn btn-success btn-xs glyphicon glyphicon-plus-sign
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>" 
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>
data-toggle="modal" data-target="#adicionarServ<?php echo $row['codprog'];?>"></button>

<button class="buttongeral btn btn-danger btn-xs glyphicon glyphicon-remove
	<?php echo($row['finalizada'] =='1' ? 'disabled' : '');?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>" 
	<?php echo($row['finalizada'] =="1" ? "disabled" : "");?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>
data-toggle="modal" data-target="#deletarServ<?php echo $row['codprog'];?>"></button>

<button class="buttongeral btn btn-info btn-xs glyphicon glyphicon-cog
	<?php echo($row['finalizada'] =='1' ? 'disabled' : '');?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>" 
	<?php echo($row['finalizada'] =="1" ? "disabled" : "");?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>
data-toggle="modal" data-target="#modificar<?php echo $row['codprog'];?>"></button>

<?php endif; ?>

<button class="btn btn-warning btn-xs more glyphicon glyphicon-info-sign"></button>

<?php 
if($_SESSION['isAdmin']||$_SESSION['isPlanejador']||$_SESSION['isExecutante']):
 ?>

<button class="buttongeral btn btn-primary btn-xs btn-primary glyphicon glyphicon-ok
	<?php echo($row['finalizada'] =='1' ? 'disabled' : '');?>"
	<?php echo($row['finalizada'] =="1" ? "disabled" : "");?>
data-toggle="modal" data-target="#finalizar<?php echo $row['codprog'];?>"></button>
<?php endif; ?>


<!-- TESTE COM CHECKBOX -->
<!--             <input type="checkbox"
            id="checkbox<?php echo $row['codprog'] ?>" 
            onclick="save_checkbox($(this).attr('data-finalizada'),'<?php echo $row['codprog'] ?>');" 
            data-finalizada="<?php echo $row['finalizada'] ?>"
            <?php echo($row['finalizada'] ? "checked" : "");?>>
 -->                    <!-- A linha acima significa um IF, sendo que FINALIZA é o dado predefinido do BANCO(nesse exemplo 0), se o valor for verdadeiro, o mesmo se torna (checked ou "1") -->
 <!-- FIM DO TESTE COM CHECKBOX/AJAX -->