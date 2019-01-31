<?php 
include 'database.php';

    $fechamento = $pdo->prepare('SELECT * FROM atividades WHERE desativado = :setado ');
      $dataParametro=array(
        ':setado'=>"0");
      $fechamento->execute($dataParametro);
      //conta o numero de registros obtidos
      $rows = $fechamento->rowCount();
      if($rows >= 1){
       $dbh = $pdo->prepare('UPDATE atividades set finalizada = "1"  WHERE num_om = :om1 and Tare = :oper');

        $dataBind=array(
          ':oper'=>$_POST['oper1'],
          ':om1'=>$_POST['om'],

        );
        
        $dbh->execute(
          $dataBind
        );
      }







 ?>