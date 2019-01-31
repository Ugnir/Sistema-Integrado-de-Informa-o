<?php
// DUVIDAS
// Melhorar footer.
// criar relatorio de ordens finalizadas no grafico.
// verificar programação semanal.
// só alimentar e planejadores selecionam datas?




// *****************************************INICIO GRAFICO******************************************
// CONECTOU O BANCO:
	include 'database.php';
	include 'session_start.php'; 
	// include 'consVerificaradm.php';

// FEZ PESQUISA EM TABELA "CENTRAB"
$sql2= "SELECT * FROM centrab";
$listaCentrab =$pdo->query($sql2);

// COMEÇOU A REALIZAR PESQUISA:
$where = '';
if ($_SERVER["REQUEST_METHOD"]=='GET') {

  if(isset($_GET['data_inicial']) && !empty($_GET['data_inicial']) && isset($_GET['data_final']) && !empty($_GET['data_final'])) {
    $where.= " AND atv.dataAtividade BETWEEN '".$_GET['data_inicial']."' and '".$_GET['data_final']."'";

  }elseif (isset($_GET['data_inicial'])&& !empty($_GET['data_inicial'])) {
    $where.= " AND atv.dataAtividade >= '".$_GET['data_inicial']."'";

  }elseif(isset($_GET['data_final'])&& !empty($_GET['data_final'])) {
    $where.= " AND atv.dataAtividade <= '".$_GET['data_final']."'";

  }
}
// VARIAL PARA SELETOR
$id_centrab= isset($_GET['centroTrabalho']) ? $_GET['centroTrabalho']: 1 ;

// AGRUPAMENTO E CALCULO.

$sql="SELECT atv.*,c.*, SUM(atv.horaexec) as executa
      FROM atividades atv
      JOIN centrab c ON c.codecentrab = atv.id_centrab
      WHERE
      	atv.id_centrab = {$id_centrab}
      	AND atv.finalizada = 1"
      	.$where.
  	  " GROUP BY atv.dataAtividade
       ORDER BY atv.dataAtividade";

$Calculo=$pdo->query($sql);
$Contador=$Calculo->rowCount();
// refinamento dos dados
$grafData=[];
 // echo "<pre>";
// IF $I==0  da um loop verificando o resultado da consulta e trazendo o centro de trabalho (nome_centrab) e grafData refina os dados.
$i=0;
foreach ($Calculo as $atv) {
	if ($i==0) {
		$i++;
		$nomeCentrab=$atv["nome_centrab"];
	}
	$grafData[]=[
		"om"=> intval($atv["num_om"]),
		"planejado" => intval($atv["hh_total"]),
		"restante" => intval($atv["hh_total"])-intval($atv["executa"]),
		"executado" => intval($atv["executa"]),
		"date" => $atv["dataAtividade"],
	];

	}	

$grafDataJson=json_encode($grafData);


 ?>
<!DOCTYPE html>
<html>
	<head>
		  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" co,k,ntent="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Gráficos</title>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">
  <!--<script src="js/xlsx.js"></script>-->
  <!-- <script src="js/xlsx.full.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.6.0/jszip.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->



		<title>Verificação de rendimento</title>
		<meta name="description" content="chart created using amCharts live editor" />

		<!-- amCharts javascript sources -->
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
		<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>


		<!-- amCharts javascript code -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"categoryField": "date",
					"dataDateFormat": "YYYY-MM-DD",
					"theme": "light",
					"categoryAxis": {
						"parseDates": true
					},
					"chartCursor": {
						"enabled": true
					},
					"chartScrollbar": {
						"enabled": true
					},
					"trendLines": [],
					"graphs": [
						{
							"bullet": "round",
							"id": "planejado",
							"title": "Total HH",
							"valueField": "planejado"
						},
						{
							"bullet": "square",
							"id": "executado",
							"title": "Executado",
							"valueField": "executado"
						},
						{
							"bullet": "triangleDown",
							"lineColor": "red",
							"id": "restante",
							"title": "Restante",
							"valueField": "restante"
						},
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "hTotal",
							"title": "Hora Total"
						}
					],
					"allLabels": [],
					"balloon": {},
					"legend": {
						"enabled": true,
						"useGraphSettings": true
					},
					"titles": [
						{
							"id": "graphRend",
							"size": 15,
							"text": ""
						}
					],
					"dataProvider": <?php echo $grafDataJson; ?>
				}
			);
		</script>






	</head>
	<body>
		<?php include 'nav.php' ?>

		<div class="container" style="margin-top: 30px;">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<h4 style="text-align:center; margin-left:5%;">Gráfico de Rendimento</h4>
					<!-- <pre> PEGAR DADOS DO COMPUTADOR
					<?php var_dump($_SERVER); ?>
					</pre> -->


					<form class="form-inline text-center" method="GET">
						<div class="form-group">

							<select name="centroTrabalho" class="form-control">
								<?php foreach ($listaCentrab as $row): ?>
									<option <?php echo $row['codecentrab'] == $id_centrab ? 'selected' : ''; ?> value="<?php echo $row["codecentrab"]; ?>"><?php echo $row["nome_centrab"];?></option>
								<?php endforeach; ?>
							</select>
							<label for="meeting1"></label>
							<input class="form-control" id="meeting1" type="date" style="height:34px;" name="data_inicial" value="<?php echo (isset($_GET['data_inicial']) ? $_GET['data_inicial'] : ''); ?>">
							<label for="meeting2"></label>
							<input   class="form-control" id="meeting2" type="date" name="data_final" value="<?php echo (isset($_GET['data_final']) ? $_GET['data_final'] : ''); ?>" style="height:34px;"/>
						</div>
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span>
						</button>
						<a class="btn btn-default" data-toggle="modal" data-target="#grafInfoModal">
							Mais informações
						</a>
					</form>
				</div>
			</div>
		</div>

		<div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>

		<!-- modal -->
		<div class="modal fade" id="grafInfoModal">

			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<!--Cabeçalho-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span>&times;</span>
						</button>
						<h4 class="modal-title" >Informações:</h4>
						<br>
						<?php if ($Contador>=1): ?>
							<h5 style="text-align:center"><?php echo $nomeCentrab ?></h5>
						<?php endif ?>
					</div>
					<div class="modal-body">
						<table class="table table-hover table-bordered table-condensed" cellspacing="0" cellpadding="0">
							<thead>
								<tr>
									<th>Data</th>
									<th>Ordem</th>
									<th>HH Total</th>
									<th>Executado</th>
									<th>Restante</th>
								</tr>
							</thead>
							<tbody class="table">
								<?php foreach ($grafData as $row):?>
									<tr>
										<td><?php echo date("d/m/Y",strtotime($row["date"]));?></td>
										<td><?php echo $row['om']; ?></td>
										<td><?php echo $row['planejado']; ?></td>
										<td><?php echo $row['executado']; ?></td>
										<td><?php echo $row['restante']; ?></td>
									</tr>
								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Sair
						</button>
					</div>
				</div>
			</div>
		</div>

	</body>




	                    <!-- INICIO SCRIPTS  -->
<!-- jQuery (necessary for Bootstrap's JavaScript
plugins) --> <script src="js/jquery.min.js">
</script> <!-- Include all
compiled plugins (below), or include individual files as needed -->
 <script
src="bootstrap/js/bootstrap.min.js"></script>
</html>