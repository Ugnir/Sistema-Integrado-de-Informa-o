<?php 
include 'database.php'; 
include 'session_start.php'; 
include 'consultasPT.php';
include 'consultaGerencia.php';
// include 'consVerificaradm.php';


$sql=("SELECT atv.num_om,atv.Tare,atv.textoTarefa,atv.gerencial,atv.dataAtividade, atv.status,c.* 
  FROM atividades atv JOIN centrab c ON c.codecentrab = atv.id_centrab WHERE status IS NOT NULL and status != '' ".$where."
   ORDER BY gerencial");

 $executar=$pdo->query($sql);

$infograph=[];
$i=0;
foreach ($executar as $graphpt) {
  if ($i==0) {
    $i++;
    $nomeCentrab=$graphpt["nome_centrab"];
}

$infograph[]=[
    "date" => $graphpt["dataAtividade"],
    "om"=> $graphpt["num_om"],
    "oper"=> $graphpt["Tare"],
    "tarefa"=> $graphpt["textoTarefa"],
    "statusGeral"=> $graphpt["status"],
    "gerencia"=> $graphpt["gerencial"],
    "centrabalho"=> $nomeCentrab,
  ];
}

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!--<script src="js/xlsx.js"></script>-->
  <!-- <script src="js/xlsx.full.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.6.0/jszip.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  <meta name="description" content="chart created using amCharts live editor" />
    <!-- amCharts javascript sources -->
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
  <script src="https://www.amcharts.com/lib/4/charts.js"></script>
  <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript
plugins) --> <script src="js/jquery.min.js">
</script> <!-- Include all
compiled plugins (below), or include individual files as needed -->
  <script>
$(document).ready(function(){
  $("#btn2").click(function(){
    $(".gerencia").hide();
    $(".disciplina").show();
  });
  $("#btn1").click(function(){
    $(".disciplina").hide();
    $(".gerencia").show();
  });
});

</script>
  </head>



  <body>
    <?php include 'nav.php' ?>
        <div class="container" style="margin-top: 30px;">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <h4 style="text-align:center; margin-left:5%;">Gráfico de Controle</h4>
          <!-- <pre> PEGAR DADOS DO COMPUTADOR
          <?php var_dump($_SERVER); ?>
          </pre> -->


          <form class="form-inline text-center" method="GET">
            <div class="form-group">
              <label for="meeting1"></label>
              <input class="form-control" id="meeting1" type="date" style="height:34px;" name="data_inicial" value="<?php echo (isset($_GET['data_inicial']) ? $_GET['data_inicial'] : ''); ?>">
              <label for="meeting2"></label><input   class="form-control" id="meeting2" type="date" name="data_final" value="<?php echo (isset($_GET['data_final']) ? $_GET['data_final'] : ''); ?>" style="height:34px;"/>
            </div>
            <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-search"></span>
            </button>

            <a class="btn btn-default" data-toggle="modal" data-target="#grafInfoStatus">
                            Mais informações
            </a>
            <button type="button" class="btn btn-default" >
              <a  style="color:black" id="export_statusExcel" class="fas fa-print"></a></a>
            </button>
            <li class="btn btn-default dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" style="color:black;" >Defina <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a id="btn1">Por Gerência</a></li>
                  <li><a id="btn2">Por Disciplina</a></li>
              </ul>
            </li>
          </form>
        </div>
      </div>
    </div>
  
    <div id="chartdiv_disciplina" class="disciplina" style="width: 100%; height: 500px; background-color: #FFFFFF; display:none" ></div>
    <div id="chartdiv_gerencia" class="gerencia" style="width: 100%; height: 500px; background-color: #FFFFFF;" ></div>



<div class="modal fade" id="grafInfoStatus">
      <div class="modal-dialog">
        <div class="modal-content modal-ajust">

          <!--Cabeçalho-->
          <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
            <h4 class="modal-tittle" >Informações:</h4>
            <br>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>OM</th>
                  <th>Operação</th>
                  <th>Tarefa</th>
                  <th>Status</th>
                  <th>Gerencia</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($infograph as $row):?>
                  <tr>
                    <td><?php echo date("d/m/Y",strtotime($row["date"]));?></td>
                    <td><?php echo $row['om']; ?></td>
                    <td><?php echo $row['oper']; ?></td>
                    <td><?php echo $row['tarefa']; ?></td>
                    <td><?php echo $row['statusGeral']; ?></td>
                    <td><?php echo $row['centrabalho']; ?></td>
                    <td><?php echo $row['gerencia']; ?></td>
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
      </form>
    </div>



  </body>

  <script>
$(document).ready(function(){
$('#export_statusExcel').on('click', function(event) {
    event.preventDefault();
    // pega o form mais proximo do definido(neste caso select-change)
   var form = $(this).closest('form');
   
   form.attr("target","_blank");
   form.attr("action","exportar.php");
   form.submit();
   form.attr("action","");
   form.attr("target","");

   var excel = $(this).val();

   var excelform = form.serialize();
   console.log('formulario',excelform);
   // $.get("exportar.php", excelform,function(data){
      // });
  // window.open("http://127.0.0.1:8080/edsa-controle/exportar.php?".excelform,"_blank");
   });
 });

  </script>
<!-- POR GERENCIA -->
<script>
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv_gerencia", am4charts.XYChart);

chart.data=[
  <?php foreach ($dadosgraph2 as $key2 => $value2) {
    echo "{";
    echo "'gerencial': '".$key2."', ";
    foreach ($value2 as $status2) {
    echo "'".$status2['status']."': ".$status2['count'].", ";
    }
    echo "},";
  }; ?>
];
// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "gerencial";
categoryAxis.parseDates = true;
categoryAxis.renderer.grid.template.location = 1;



var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.inside = true;
valueAxis.renderer.labels.template.disabled = true;
valueAxis.min = 0;

// Create series
function createSeries(field, name) {
  
  // Set up series
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.name = name;
  series.dataFields.valueY = field;
  series.dataFields.categoryX = "gerencial";
  series.sequencedInterpolation = true;
  
  // Make it stacked
  series.stacked = true;
  
  // Configure columns
  series.columns.template.width = am4core.percent(20);
  series.columns.template.tooltipText = "[bold]{name}[/]\n[font-size:14px]{categoryX}: {valueY}";
  
  // Add label
  var labelBullet = series.bullets.push(new am4charts.LabelBullet());
  labelBullet.label.text = "{valueY}";
  labelBullet.locationY = 0.5;

  chart.scrollbarX = new am4core.Scrollbar();
  
  return series;
}

createSeries("Cancelada", "Canceladas");
createSeries("Emitida", "Emitidas");
createSeries("NE", "Não Emitidas");


// Legend
chart.legend = new am4charts.Legend();
</script>

<!-- POR DISCIPLINA -->



<script>
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv_disciplina", am4charts.XYChart);

chart.data=[
  <?php foreach ($dadosgraph as $key => $value) {
    echo "{";
    echo "'centrab': '".$key."', ";
    foreach ($value as $status) {
    echo "'".$status['status']."': ".$status['count'].", ";
    }
    echo "},";
  }; ?>
];
// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "centrab";
categoryAxis.parseDates = true;
categoryAxis.renderer.grid.template.location = 1;



var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.inside = true;
valueAxis.renderer.labels.template.disabled = true;
valueAxis.min = 0;

// Create series
function createSeries(field, name) {
  
  // Set up series
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.name = name;
  series.dataFields.valueY = field;
  series.dataFields.categoryX = "centrab";
  series.sequencedInterpolation = true;
  
  // Make it stacked
  series.stacked = true;
  
  // Configure columns
  series.columns.template.width = am4core.percent(20);
  series.columns.template.tooltipText = "[bold]{name}[/]\n[font-size:14px]{categoryX}: {valueY}";
  
  // Add label
  var labelBullet = series.bullets.push(new am4charts.LabelBullet());
  labelBullet.label.text = "{valueY}";
  labelBullet.locationY = 0.5;

  chart.scrollbarX = new am4core.Scrollbar();
  
  return series;
}

createSeries("Cancelada", "Canceladas");
createSeries("Emitida", "Emitidas");
createSeries("NE", "Não Emitidas");


// Legend
chart.legend = new am4charts.Legend();
</script>


 <script src="bootstrap/js/bootstrap.min.js"></script>


</html>