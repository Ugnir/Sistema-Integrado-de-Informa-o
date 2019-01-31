<?php 

$where = '';
  if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])){
      $where= "and (
          c.nome_centrab LIKE '%".$_GET['pesquisa']."%' or
          prev.num_om LIKE '%".$_GET['pesquisa']."%' or
          prev.textoTarefa LIKE '%".$_GET['pesquisa']."%' or
          prev.requisitante LIKE '%".$_GET['pesquisa']."%' or
          prev.gerencial LIKE '%".$_GET['pesquisa']."%' or
          prev.local LIKE '%".$_GET['pesquisa']."%' or
          prev.giop LIKE '%".$_GET['pesquisa']."% '
        )";
      // $where= "and ".$_GET['tipo']." LIKE '%".$_GET['pesquisa']."%'";
    }
  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where.= " and prev.dataAtividade BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where.= " and prev.dataAtividade >= '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where.= " and prev.dataAtividade >= '".$_GET['data_final']."'";

  }
  
// }
if(isset($_GET['pesquisa'])&& !empty($_GET['pesquisa'])||isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) || isset($_GET['data_final']) && !empty($_GET['data_final'])) {
  $sql="SELECT prev.*, c.nome_centrab AS centrab 
        FROM previa prev
        JOIN centrab c ON c.codecentrab = prev.id_centrab
        WHERE prev.num_om <> '' 
              AND prev.Tare <> ''"   
              .$where. 
        "ORDER BY prev.dataAtividade";

  $listaOs=$pdo->query($sql); 

}
  ?>