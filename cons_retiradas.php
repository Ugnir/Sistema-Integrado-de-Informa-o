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
          ret.numOM LIKE '%".$_GET['pesquisa']."%' or
          ret.texto_breve LIKE '%".$_GET['pesquisa']."%'or
          ret.texto_tarefa LIKE '%".$_GET['pesquisa']."%'or
          ret.histUsuario LIKE '%".$_GET['pesquisa']."%'
        )";
      // $where= "and ".$_GET['tipo']." LIKE '%".$_GET['pesquisa']."%'";
    }
  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where.= " and ret.dataRetirada BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where.= " and ret.dataRetirada >= '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where.= " and ret.dataRetirada <= '".$_GET['data_final']."'";

  }
}


if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])|| isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) || isset($_GET['data_final']) && !empty($_GET['data_final'])) {
  $sql="SELECT ret.*, c.nome_centrab AS centrab 
        FROM retiradas ret
        JOIN centrab c ON c.codecentrab = ret.centro_trabalho
        WHERE ret.numOM <> '' 
              AND ret.oper <> '' "   
              .$where. 
        "ORDER BY ret.dataRetirada";

  $listaOs=$pdo->query($sql); 
}
?>