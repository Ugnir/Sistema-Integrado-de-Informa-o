<?php 
include 'database.php';

$dbh = $pdo->prepare('UPDATE atividades set criticidadept = :crit , numpt=:pt WHERE codprog = :codigo');
        $dataBind = array(
          ':codigo'=>$_POST['id_linha'],
          ':crit' =>$_POST['criticidade'],
          ':pt'=>$_POST['numeropt'],
        );
      
      $dbh->execute(
        $dataBind
      );


      echo json_encode($_POST);
    



 ?>