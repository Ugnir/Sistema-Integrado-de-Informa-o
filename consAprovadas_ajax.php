<?php 

include 'database.php';

$verCentro=$pdo->prepare("SELECT codecentrab FROM centrab WHERE nome_centrab = :centro_trabalho");
$verificar=array(
':centro_trabalho'=>$_POST['centrabOM1'],
  );
$verCentro->execute($verificar);
            $recID=$verCentro->fetch()[0];

          $data1=explode("/",$_POST['dataOM1']);
          $data1=$data1[2]."-".$data1[1]."-".($data1[0]);

 $dbh = $pdo->prepare('INSERT INTO atividades
         (num_om,denominacao,txtbreve,Tare,id_centrab,local,textoTarefa,dataAtividade,numlibra,numpt,requisitante,horaexec,gerencial,finalizada,desativado,
          status,giop,justificativa,justificativa_detalhe,criticidadept)VALUES
         (:num1,
           :denomi1,
          :txtordem1,
           :tare1,
           :centrab1,
           :localordem,
           :txtbreve1,
           :data1,
            :libra1 ,
            :pt1 ,
            :requisitante1,
            :hora1,
          :gerencial1,
          :fin1,
          :desativ1,
           :status1,
            :giop1,
             :justificativa1,
             :justificativa_detalhe1,
              :criticidade1 )');


      $dataBind=array(
        ':data1'=>($data1),
        ':requisitante1'=>$_POST['requisitanteOM1'],
        ':hora1'=>$_POST['hh1'],
        ':num1' =>$_POST['om'],
        ':tare1' =>$_POST['operOrdem'],
        ':txtordem1' =>$_POST['txtordem'],
        ':txtbreve1' =>$_POST['textOper'],
        ':denomi1' =>$_POST['denomi'],
        ':libra1' =>$_POST['numlibraOM'],
        ':pt1' =>$_POST['ptOM1'],
        ':centrab1' => ($recID),
        ':gerencial1' =>$_POST['ger1'],
        ':localordem' =>$_POST['local1'],
        ':fin1' =>"0",
        ':desativ1' =>"0",
        ':status1' =>"",
        ':giop1' =>"",
        ':justificativa1' =>utf8_encode(""),
        ':justificativa_detalhe1' =>utf8_encode(""),
        ':criticidade1' =>"0",

      );
      $dbh->execute($dataBind);

$deletarAprovada=$pdo->prepare("DELETE FROM solicitadas WHERE codSolicitadas = :code");
$ver=array(
':code'=>$_POST['cod-linha'],
  );
      $deletarAprovada->execute(
        $ver
           );


 ?>