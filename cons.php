<?php
if ($_SERVER["REQUEST_METHOD"]=='POST') {
  if ($_POST["form"]=='disable') {
      $Query =$pdo->prepare("SELECT * FROM usuarios WHERE login = :user and senha = :password and perfil ='1'");
      $log=array(
      ':user'=>filter_var($_POST['user']),
      ':password'=>filter_var(md5($_POST['password'])),
      );
      $Query->execute($log);
      $user = $Query->fetch(PDO::FETCH_ASSOC);    
      $RowCount = $Query->rowCount();


      if($RowCount == 1){
        $where='';
        if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
          $where.= " and dataAtividade BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

        }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
          $where.= " and dataAtividade >= '".$_GET['data_inicial']."'";

        }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
          $where.= " and dataAtividade >= '".$_GET['data_final']."'";

        }
        // print_r('UPDATE atividades set desativado = "1" WHERE 1=1 '.$where);
      $fechamento = $pdo->prepare('SELECT * FROM atividades WHERE desativado = :setado '.$where);
      $dataParametro=array(
        ':setado'=>"0");
      $fechamento->execute($dataParametro);
      //conta o numero de registros obtidos
      $rows = $fechamento->rowCount();
      if($rows > 0){
        echo "1";
        $sql =$pdo->prepare('UPDATE atividades set desativado = "1" WHERE 1=1 '.$where);
        $sql->execute();
        $mensagem= "fechado";
      }
      else{
        echo "2";
        $sql =$pdo->prepare('UPDATE atividades set desativado = "0" WHERE 1=1 '.$where);
        $sql->execute();
        $mensagem= "aberto";
      }
    if ($mensagem =="fechado") {
      echo "<script>alert('Programação fechada com sucesso.');</script>";
    }else{
      echo "<script>alert('Programação aberta com sucesso.');</script>";
        }
      }
  }
}


// **********************************FILTROS****************************************
// concatenar e sempre prestar atenção nos espaçamentos
// declara variavel como nada.
$where = '';
// SE TIVER UMA PESQUISA "POST" ENTRARÁ NO IF E IRÁ CONCATENAR OS VALORES DE ACORDO COM AS VARIAVES ALTERANDO A VARIAVEL "$sql" 
// if ($_SERVER["REQUEST_METHOD"]=='GET') {
  if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])){
      $where= "and (
          c.nome_centrab LIKE '%".$_GET['pesquisa']."%' or
          atv.num_om LIKE '%".$_GET['pesquisa']."%' or
          atv.textoTarefa LIKE '%".$_GET['pesquisa']."%' or
          atv.requisitante LIKE '%".$_GET['pesquisa']."%' or
          atv.gerencial LIKE '%".$_GET['pesquisa']."%' or
          atv.local LIKE '%".$_GET['pesquisa']."%' or
          atv.giop LIKE '%".$_GET['pesquisa']."%' or
          atv.criticidadept LIKE '%".$_GET['pesquisa']."%' or
          atv.desativado LIKE '%".$_GET['pesquisa']."% '
        )";
      // $where= "and ".$_GET['tipo']." LIKE '%".$_GET['pesquisa']."%'";
    }
  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where.= " and atv.dataAtividade BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where.= " and atv.dataAtividade >= '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where.= " and atv.dataAtividade >= '".$_GET['data_final']."'";

  }
  
// }
if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])||isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) || isset($_GET['data_final']) && !empty($_GET['data_final'])) {
  $sql="SELECT atv.*, c.nome_centrab AS centrab 
        FROM atividades atv
        JOIN centrab c ON c.codecentrab = atv.id_centrab
        WHERE atv.num_om <> '' 
              AND atv.Tare <> ''"   
              .$where. 
        "ORDER BY atv.dataAtividade";

  $listaOs=$pdo->query($sql); 

}
  ?>