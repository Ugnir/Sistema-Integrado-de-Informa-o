<?php
include "database.php";
include 'consPrevia.php';
include 'session_start.php'; 
// include 'consVerificaradm.php';



$arrCombo = array(
    "cancelada" => "Cancelada",
    "emitida"  => "Emitida",
    "naoemitida" => "Não Emitida"
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" co,k,ntent="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Programação GPI</title>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!--<script src="js/xlsx.js"></script>-->
  <!-- <script src="js/xlsx.full.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.6.0/jszip.min.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>
    <body>
      <?php include 'nav.php';

      ?>
      <div class="container" style="margin-top: 30px;">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
            <h4 style="text-align:center">Prévia Programação</h4>
            <!-- <pre> PEGAR DADOS DO COMPUTADOR
            <?php var_dump($_SERVER); ?>
            </pre> -->
            <div>
              <form class="form-inline">
               <form method="GET">
              <div class="form-group">
                <input type="text" class="form-control" name="pesquisa" id="pesquisa1" placeholder="O que busca?" value="<?php echo (isset($_GET['pesquisa']) ? $_GET['pesquisa'] : ''); ?>">
              </div>
              <label for="meeting1"></label>
              <input class="form-control" id="meeting1" type="date" style="height:34px;" name="data_inicial" value="<?php echo (isset($_GET['data_inicial']) ? $_GET['data_inicial'] : ''); ?>">
              <label for="meeting2"></label><input  class="form-control" id="meeting2" type="date" name="data_final" value="<?php echo (isset($_GET['data_final']) ? $_GET['data_final'] : ''); ?>" style="height:34px;"/>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#contagemServ">Informações</button>
              <?php include 'modalContagem.php'; ?>
            </form>
          </form>
          </div>
        </div>
      </div>
    </div>
    </div>
      <br>
    <!-- Fim barra navegação -->
    <div class="row">
      <div class="table-responsive col-md-12">
        <table class="table table-hover table-bordered table-condensed" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th>Número Ordem</th>
              <th>Texto OM</th>
              <th>OP</th>
              <th>Texto da Tarefa</th>
              <th>SPTWEB</th>
              <th>Centro de Trabalho</th>
              <th>Data de Solicitação</th>
              <th>Menu</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($listaOs)):?>
            <?php foreach($listaOs as $row): ?>
              <tr style="font-size: 11px" id="previaProg-<?php echo $row["codprog"]; ?>">
            <td><?php echo $row["num_om"]; ?>
              <div class="aparecerGeral oculta" style="padding-top:10px;" >
                <strong>Denominação:</strong>
              </div>
              <div class="aparecerGeral oculta" style="padding-top:35px;">
                <strong>Observações:</strong>
              </div>
            </td>
            <td>
              <?php echo $row["txtbreve"]; ?>
              <div class="aparecerGeral oculta" style="padding-top:10px;" >
                <?php echo $row["denominacao"]; ?>
              </div>
           </td>
           <td><?php echo $row["Tare"]; ?></td>
           <td>
            <?php echo $row["textoTarefa"]; ?>
            <div class="aparecerGeral oculta" style="padding-top:10px;" >
              <strong>Localização:</strong> 
              <?php echo $row["local"]; ?>
            </div>
          </td>
          <td style="width:160px">          
            <div>
                <strong style="float:left">PT :</strong>
                <?php echo $row["numpt"]; ?>
              </span>
            </div>
           </div>
           <div>
           <div class="aparecerGeral oculta left" style="padding-top:25px;" >
            <strong>Requisitante:</strong> 
            <?php echo $row["requisitante"]; ?>
           </div>
          </div>
          <div class="aparecerGeral oculta left" style="padding-top:10px;" >
            <strong>Libra:</strong> <?php echo $row["numlibra"]; ?>
          </div>
        </td>
      <td><?php echo $row["centrab"]; ?>
        <div class="aparecerGeral oculta left" style="padding-top:10px;" >
        </div>
      </td>
      
      <td style="text-align:center"><span class="alterarTexto"><?php echo date("d/m/Y",strtotime($row["dataAtividade"]));?></span></td>
     
      <td>


        <!-- botões -->
        <?php include 'botoesPrevia.php' ?>
        <!-- fim botões -->



        <!-- Inicio Modal -->
        <?php include 'modalPrevia.php'; ?>
        <!-- Fim Modal -->

      </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
   </tbody>
  </table>
  </div>
</div>


                    <!-- INICIO SCRIPTS  -->
<!-- jQuery (necessary for Bootstrap's JavaScript
plugins) --> <script src="js/jquery.min.js"></script> 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><!-- Include all
compiled plugins (below), or include individual files as needed --> <script
src="bootstrap/js/bootstrap.min.js"></script> <!--Script para ocultar-->
<script type="text/javascript" src="js/scripts.js"></script>
<script>
$(document).ready(function(){
$('#export_index').on('click', function(event) {
    event.preventDefault();
    // pega o form mais proximo do definido(neste caso select-change)
   var form = $(this).closest('form');
   
   form.attr("target","_blank");
   form.attr("action","exportProg.php");
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
<script>
$('.deletar-registro').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var idlinha=form.find('input[name="cod-linha"]').val();
  var formulario = form.serialize();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consDelPrevia_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      console.log(idlinha);
      $("#previaProg-"+idlinha).find(".alterarTexto").text("Excluido Registro");
     }
  });
});
</script>
<script>
$('.deletar-banco').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var idlinha=form.find('input[name="cod-linha"]').val();
  var formulario = form.serialize();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consDeltotalbanco_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      console.log(idlinha);
      $("#previaProg-"+idlinha).find(".alterarTexto").text("Excluida banco");
     }
  });
});

$('.alterar-registro').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var idlinha=form.find('input[name="code"]').val();
  var teste=form.find('select[name="centrabalho"]').val();
  var formulario = form.serialize();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consAttPrevia_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      console.log(idlinha);
      console.log(teste);
      $("#previaProg-"+idlinha).find(".alterarTexto").text("Registro Modificado");
     }
  });
});
$('.alterar-banco').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var idlinha=form.find('input[name="code"]').val();
    var teste=form.find('select[name="centrabalho"]').val();

  var formulario = form.serialize();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consAttTotalBanco_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      console.log(idlinha);
      $("#previaProg-"+idlinha).find(".alterarTexto").text("Banco Modificado");
     }
  });
});

$('.submit-uploadPrevia').on('click', function(event) {
  event.preventDefault();
  $.ajax({
    type: "POST",
    url: 'upload_previa_to_program_ajax.php',
    cache: false,
    success: function (data) {
      alert("Banco de dados incluso!");
      location.reload();
     }
  });
});
</script>
</body>
</html>

