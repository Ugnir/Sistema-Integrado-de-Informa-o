<?php
require_once 'plugins/Classes/PHPExcel.php';

include 'database.php';

$where='';
  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where.= " and atv.dataAtividade BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where.= " and atv.dataAtividade >= '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where.= " and atv.dataAtividade >= '".$_GET['data_final']."'";

  }
  
$sql=$pdo->prepare("SELECT atv.num_om,atv.Tare,atv.textoTarefa,atv.gerencial,atv.status,atv.dataAtividade,atv.numpt,atv.numlibra,atv.requisitante,atv.giop,c.* 
  FROM atividades atv JOIN centrab c ON c.codecentrab = atv.id_centrab WHERE 1=1'' ".$where."
   ORDER BY dataAtividade");
$sql->execute();



$excel=[];
$i=0;
foreach ($sql as $planilha) {
  if ($i==0) {
    $i++;
    $nomeCentrab=$planilha["nome_centrab"];
}

$excel[]=[
    "date" => $planilha["dataAtividade"],
    "om"=> $planilha["num_om"],
    "oper"=> $planilha["Tare"],
    "tarefa"=> $planilha["textoTarefa"],
    "statusGeral"=> $planilha["status"],
    "gerencia"=> $planilha["gerencial"],
    "requisitante"=> $planilha["requisitante"],
    "libra"=> $planilha["numlibra"],
    "centrabalho"=> $nomeCentrab,
  ];

}

$objPHPExcel= new PHPExcel();
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Data');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'OM');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'Operação');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'Tarefa');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'Status');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'centrab');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', 'Gerencia');

$linha=2;
foreach ($excel as $row){

     $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$linha,date("d/m/Y",strtotime($row["date"])));
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$linha,$row['om']);
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$linha,$row['oper']);
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$linha,$row['tarefa']);
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$linha,$row['statusGeral']);
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$linha,$row['centrabalho']);
     $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$linha,$row['gerencia']);
     $linha++;
}

$file = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="Geral.xls"');

	ob_end_clean();

	$file->save('php://output');

 ?>