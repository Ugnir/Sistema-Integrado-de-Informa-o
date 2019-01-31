<?php 
  include 'database.php';

        $sql =$pdo->prepare("UPDATE atividades set giop = :change WHERE codprog = :idlinha ");
        $param=array(
          ':change'=>$_POST['seletorGiop'],
          ':idlinha'=>$_POST['id_linha']
          );
        $sql->execute($param);

 ?>