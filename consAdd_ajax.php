<?php // **********************************INSERT****************************************
include 'database.php';

  if(isset($_POST['datasolicitada2']) && !empty($_POST['datasolicitada2']) && isset($_POST['requisitante2']) && !empty($_POST['requisitante2'])) {
     
      $fechamento = $pdo->prepare('SELECT * FROM atividades WHERE desativado = :setado ');
      $dataParametro=array(
        ':setado'=>"0");
      $fechamento->execute($dataParametro);
      //conta o numero de registros obtidos
      $rows = $fechamento->rowCount();
      if($rows >= 1){  
        $dbh = $pdo->prepare('INSERT INTO atividades
         (num_om,denominacao,txtbreve,Tare,id_centrab,local,textoTarefa,dataAtividade,
          numlibra,numpt,requisitante,horaexec,gerencial,status,giop,justificativa,justificativa_detalhe,criticidadept)VALUES
         (:num1,:denomi1, :txtbreve1,:tare1,:centrab1,:local1,:tarefa1,:data1, :libra1 ,:pt1 ,:requisitante1,:hora1,
          :gerencial1, :status1, :giop1, :justificativa1,:justificativa_detalhe1, :criticidade1 )');


      $dataBind=array(
        ':data1'=>$_POST['datasolicitada2'],
        ':local1'=>$_POST['local2'],
        ':requisitante1'=>$_POST['requisitante2'],
        ':hora1'=>$_POST['hh'],
        ':num1' =>$_POST['om'],
        ':tare1' =>$_POST['operacao'],
        ':denomi1' =>$_POST['denominacao1'],
        ':txtbreve1' =>$_POST['breve1'],
        ':libra1' =>$_POST['numlibra1'],
        ':pt1' =>$_POST['numpt1'],
        ':centrab1' =>$_POST['centrab1'],
        ':tarefa1' =>$_POST['txtoper1'],
        ':gerencial1' =>$_POST['ger1'],
        ':status1' =>$_POST['statuss'],
        ':giop1' =>$_POST['giopp'],
        ':justificativa1' =>utf8_encode($_POST['just1']),
        ':justificativa_detalhe1' =>utf8_encode($_POST['justdetal1']),
        ':criticidade1' =>$_POST['crit1'],

      );
      $dbh->execute(
        $dataBind
        
     );
          
  }
}

 ?>
