
<?php 
include 'database.php';
  if(isset($_POST['datasolicitada']) && !empty($_POST['datasolicitada']) && isset($_POST['requisitante']) && !empty($_POST['requisitante'])) {
     
      $fechamento = $pdo->prepare('SELECT * FROM atividades WHERE desativado = :setado ');
      $dataParametro=array(
        ':setado'=>"0");
      $fechamento->execute($dataParametro);
      //conta o numero de registros obtidos
      $rows = $fechamento->rowCount();
      if($rows >= 1){    
        $dbh = $pdo->prepare('UPDATE atividades set dataAtividade = :data , requisitante = :requisitante WHERE codprog = :codigo');
        $dataBind = array(
          ':codigo'=>$_POST['code'],
          ':data' =>$_POST['datasolicitada'],
          ':requisitante' =>$_POST['requisitante']
        );
      
      $dbh->execute(
        $dataBind
      );
    }
}
 ?>