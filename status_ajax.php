<?php
	include 'database.php';

        $sql =$pdo->prepare("UPDATE atividades set status = :change WHERE codprog = :idlinha ");
        $param=array(
          ':change'=>$_POST['selecao'],
          ':idlinha'=>$_POST['id_linha']
          );
        $sql->execute($param);
  
 ?>