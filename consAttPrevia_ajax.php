<?php 
include 'database.php';

            $verCentro=$pdo->query("SELECT codecentrab FROM centrab WHERE nome_centrab ='".$_POST['centrabalho']."'");
            $recID=$verCentro->fetch()[0];

 $dbh = $pdo->prepare('UPDATE previa set dataAtividade = :data , requisitante = :requisitante, id_centrab= :cent  WHERE codprog = :codigo');
        $dataBind = array(
          ':codigo'=>$_POST['code'],
          ':data' =>$_POST['datasolicitada'],
          ':requisitante' =>$_POST['requisitante'],
          ':cent' =>$recID,
        );
      
      $dbh->execute(
        $dataBind
      );


	?>

