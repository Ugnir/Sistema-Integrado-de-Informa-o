<?php 
include 'database.php';

$dbh = $pdo->prepare('UPDATE atividades set continuacaoServ = :cont  WHERE codprog = :code1 ');
	$dataBind = array(
		':cont'=>$_POST['seletor_fim_atividade'],
		':code1'=>$_POST['code'],
		);

	$dbh->execute(
		$dataBind
		);

 ?>