<?php 
if($_SESSION['isAdmin']||$_SESSION['isPlanejador']):
 ?>

<button class="buttongeral btn btn-danger btn-xs glyphicon glyphicon-remove
	<?php echo($row['finalizada'] =='1' ? 'disabled' : '');?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>" 
	<?php echo($row['finalizada'] =="1" ? "disabled" : "");?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>
data-toggle="modal" data-target="#deletarPrevia-<?php echo $row['codprog'];?>"></button>

<button class="buttongeral btn btn-info btn-xs glyphicon glyphicon-cog
	<?php echo($row['finalizada'] =='1' ? 'disabled' : '');?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>" 
	<?php echo($row['finalizada'] =="1" ? "disabled" : "");?>
	<?php echo($row['desativado'] =='1' ? 'disabled' : '');?>
data-toggle="modal" data-target="#modificarPrevia-<?php echo $row['codprog'];?>"></button>

<?php endif; ?>


<button class="btn btn-warning btn-xs more glyphicon glyphicon-info-sign"></button>
