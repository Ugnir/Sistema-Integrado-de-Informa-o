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


  $status2 =$pdo->prepare("SELECT gerencial, status, COUNT(status) AS count FROM atividades WHERE status IS NOT NULL and status != '' ".$where." GROUP BY gerencial,status");
  $status2->execute();

  $dadosgraph2=[];

  foreach ($status2 as $value2) {
    $dadosgraph2[$value2['gerencial']][] = [
      'status'=>$value2['status'],
      'count'=>$value2['count'],
    ];
  }
  // echo "<pre>";
  // print_r($status1);
  // echo "</pre>";
 ?>