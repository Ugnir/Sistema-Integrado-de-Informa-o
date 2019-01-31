 
<?php  
include 'database.php';
// **********************************DELETE****************************************
      $verificar = $pdo->prepare('SELECT * FROM atividades WHERE num_om = :om1 AND Tare=:oper AND desativado= :setado');
      $dados=array(
        ':setado'=>"0",
        ':om1'=>$_POST['om'],
        'oper'=>$_POST['oper1'],
        );
      $verificar->execute($dados);
      //conta o numero de registros obtidos
      $rows = $verificar->rowCount();
            echo $rows;
      if($rows >= 2){
      $dbh = $pdo->prepare('DELETE FROM atividades WHERE codprog = :codigo');

      $dataBind=array(
        ':codigo'=>$_POST['code'],
      );
      
      $dbh->execute(
        $dataBind
      );
    }else{
      $dbh = $pdo->prepare('INSERT INTO retiradas(numOM,texto_breve,oper,texto_tarefa,centro_trabalho,dataRetirada,motivo,histUsuario)
             VALUES (:numom1,:txt1,:op1,:txtarefa1,:ctrab1,:data1,:motivo1,:user1)');

      $dataBind=array(
        ':numom1'=>$_POST['om'],
        'op1'=>$_POST['oper1'],
        'txt1'=>$_POST['denominacao1'],
        'txtarefa1'=>$_POST['breve1'],
        'ctrab1'=>$_POST['centrab1'],
        'data1'=>$_POST['dataAtv'],
        'motivo1'=>$_POST['justdel'],
        'user1'=>$_POST['user'],
      );
       $dbh->execute(
        $dataBind
      );

    

      $deletar = $pdo->prepare('DELETE FROM atividades WHERE num_om = :om1 AND Tare=:oper');

      $parametros=array(
        ':om1'=>$_POST['om'],
        'oper'=>$_POST['oper1']
      );
       $deletar->execute(
        $parametros
      );

    }


 ?>

