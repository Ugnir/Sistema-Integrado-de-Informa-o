<?php
	include 'database.php';

        $sql =$pdo->prepare("UPDATE atividades set justificativa_detalhe = :change WHERE codprog = :idlinha ");
        $param=array(
          ':change'=>$_POST['selecao'],
          ':idlinha'=>$_POST['id_linha']
          );
        $sql->execute($param);
 ?>