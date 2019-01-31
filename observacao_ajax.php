<?php
	include 'database.php';

        $sql =$pdo->prepare("UPDATE atividades set observacao = :change WHERE codprog = :idlinha ");
        $param=array(
          ':change'=>$_POST['observPT'],
          ':idlinha'=>$_POST['id-linha']
          );
        $sql->execute($param);
 ?>