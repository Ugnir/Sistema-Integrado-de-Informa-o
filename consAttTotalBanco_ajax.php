<?php 
include 'database.php';

            $verCentro=$pdo->query("SELECT codecentrab FROM centrab WHERE nome_centrab ='".$_POST['centrabalho']."'");
            $recID=$verCentro->fetch()[0];

 $dbh = $pdo->prepare('UPDATE previa set dataAtividade = :data , requisitante = :requisitante, id_centrab= :cent  WHERE num_om = :om1 and Tare = :oper1');
        $dataBind = array(
          ':om1'=>$_POST['om'],
          ':oper1'=>$_POST['oper'],
          ':data' =>$_POST['datasolicitada'],
          ':requisitante' =>$_POST['requisitante'],
          ':cent' =>$recID,
        );
      
      $dbh->execute(
        $dataBind
      );


	?>

