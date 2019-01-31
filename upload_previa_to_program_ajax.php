<?php
	include 'database.php';

    $db=$pdo->prepare('INSERT INTO atividades (num_om,denominacao,txtbreve,
      Tare,textoTarefa,id_centrab,local,dataAtividade,numlibra,numpt,requisitante,
      horaexec,gerencial,finalizada,desativado,status,giop,justificativa,justificativa_detalhe,criticidadept,continuacaoServ,observacao) 
      SELECT num_om,denominacao,txtbreve,Tare,textoTarefa,id_centrab,local,dataAtividade,
      numlibra,numpt,requisitante,horaexec,gerencial,finalizada,desativado,status,giop,
      justificativa,justificativa_detalhe,criticidadept,continuacaoServ,observacao 
      FROM previa');
    $db->execute();


    $del=$pdo->prepare('DELETE FROM previa');
    $del->execute();
   
?>