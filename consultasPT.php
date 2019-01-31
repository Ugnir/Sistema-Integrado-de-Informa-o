<?php 
$where = '';
if ($_SERVER["REQUEST_METHOD"]=='GET') {
  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where= " and dataAtividade BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where= " and dataAtividade = '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where= " and dataAtividade = '".$_GET['data_final']."'";

  }
}

  $status1 =$pdo->prepare("SELECT c.nome_centrab AS centrab, status, COUNT(status) AS count FROM
                           atividades a INNER JOIN centrab c ON c.codecentrab = a.id_centrab WHERE
                           a.status IS NOT NULL and a.status != '' $where GROUP BY a.id_centrab, a.status");

  $status1->execute();

  $dadosgraph=[];

  foreach ($status1 as $value1) {
    $dadosgraph[$value1['centrab']][] = [
      'status'=>$value1['status'],
      'count'=>$value1['count'],
    ];
  }
  // echo "<pre>";
  // print_r($status1);
  // echo "</pre>";
 ?>