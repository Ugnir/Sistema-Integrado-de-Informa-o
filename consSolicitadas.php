<?php 
$where = '';
// SE TIVER UMA PESQUISA "GET" ENTRARÁ NO IF E IRÁ CONCATENAR OS VALORES DE ACORDO COM AS VARIAVES ALTERANDO A VARIAVEL "$sql" 
if ($_SERVER["REQUEST_METHOD"]=='GET') {
  if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])){
      $where= "and (
          centrabOM LIKE '%".$_GET['pesquisa']."%' or
          numOM LIKE '%".$_GET['pesquisa']."%' or
          txtOPER LIKE '%".$_GET['pesquisa']."%' or
          txtOM LIKE '%".$_GET['pesquisa']."%' or
          dataOM LIKE '%".$_GET['pesquisa']."%'
        )";
      // $where= "and ".$_GET['tipo']." LIKE '%".$_GET['pesquisa']."%'";
    }
  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where.= " and  dataOM BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where.= " and dataOM >= '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where.= " and dataOM <= '".$_GET['data_final']."'";

  }
}

  $sql="SELECT * FROM solicitadas WHERE 1=1 ".$where;

  $listaOs=$pdo->query($sql); 

 ?>