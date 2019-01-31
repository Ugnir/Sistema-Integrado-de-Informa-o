<?php 
include 'database.php';

      $continuarServ= $pdo->prepare('SELECT * FROM atividades WHERE codprog = :code1 AND continuacaoServ = "nao" ');
      $dataParametro=array(
		':code1'=>$_POST['code'],
		);
      $continuarServ->execute($dataParametro);
      //conta o numero de registros obtidos
      $rows = $continuarServ->rowCount();
      if($rows >= 1){
		$dbh = $pdo->prepare('UPDATE atividades set horaexec = :sethora , justificativa_detalhe=:just_detal , finalizada="1" WHERE num_om = :om1 AND Tare=:oper');
		$dataBind = array(
			':sethora'=>$_POST['setarhora'],
			':just_detal' =>$_POST['justMI'],
			':om1'=>$_POST['om'],
			':oper'=>$_POST['oper1'],
			);

		$dbh->execute(
			$dataBind
			);
	}else{
		$dbh = $pdo->prepare('UPDATE atividades set horaexec = :sethora , justificativa_detalhe=:just_detal , finalizada="1" WHERE codprog= :idcod');
		$dataBind = array(
			':sethora'=>$_POST['setarhora'],
			':just_detal' =>$_POST['justMI'],
			':idcod'=>$_POST['code'],
			);
		$dbh->execute(
			$dataBind
			);
	}



 ?>