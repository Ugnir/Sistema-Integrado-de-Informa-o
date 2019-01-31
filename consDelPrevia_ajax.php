<?php       
include 'database.php';

$deletar = $pdo->prepare('DELETE FROM previa WHERE codprog=:code');

$parametros=array(
	':code'=>$_POST['cod-linha'],
	);
$deletar->execute(
	$parametros
	);




	?>

