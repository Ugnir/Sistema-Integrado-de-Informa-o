<?php

// **********************************FILTROS****************************************
// concatenar e sempre prestar atenção nos espaçamentos
// declara variavel como nada.
$where = '';
// SE TIVER UMA PESQUISA "GET" ENTRARÁ NO IF E IRÁ CONCATENAR OS VALORES DE ACORDO COM AS VARIAVES ALTERANDO A VARIAVEL "$sql" 
if ($_SERVER["REQUEST_METHOD"]=='GET') {
  if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])){
      $where= "and (
          c.nome_centrab LIKE '%".$_GET['pesquisa']."%' or
          atv.num_om LIKE '%".$_GET['pesquisa']."%' or
          atv.textoTarefa LIKE '%".$_GET['pesquisa']."%'
        )";
      // $where= "and ".$_GET['tipo']." LIKE '%".$_GET['pesquisa']."%'";
    }
  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where.= " and atv.dataAtividade BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where.= " and atv.dataAtividade >= '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where.= " and atv.dataAtividade <= '".$_GET['data_final']."'";

  }
}


if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])||isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) || isset($_GET['data_final']) && !empty($_GET['data_final'])) {
  $sql="SELECT atv.*, c.nome_centrab AS centrab 
        FROM atividades atv
        JOIN centrab c ON c.codecentrab = atv.id_centrab
        WHERE atv.num_om <> '' 
              AND atv.status = 'Cancelada'
              AND atv.Tare <> '' "   
              .$where. 
        "ORDER BY atv.dataAtividade";

  $listaOs=$pdo->query($sql); 
}
?>