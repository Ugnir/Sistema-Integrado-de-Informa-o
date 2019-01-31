<?php       
include 'database.php';

$deletar = $pdo->prepare('DELETE FROM previa WHERE num_om=:om1 AND Tare= :oper');

$parametros=array(
	':om1'=>$_POST['om'],
	':oper'=>$_POST['oper1'],
	);
$deletar->execute(
	$parametros
	);




	?>

