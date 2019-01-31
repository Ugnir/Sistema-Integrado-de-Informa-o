<?php 
include 'database.php';

$aprovada=$pdo->prepare('UPDATE solicitadas set situacao = "Reprovada" where codSolicitadas = :solicitacao');
$dados=array(
	':solicitacao'=>$_POST['cod-linha'],
	);
$aprovada->execute($dados);

 ?>