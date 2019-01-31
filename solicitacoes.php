<?php
include "database.php";
include 'session_start.php'; 
include 'consSolicitadas.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" co,k,ntent="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Solicitações</title>

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
      <?php include 'nav.php' ?>

      <div class="container" style="margin-top: 30px;">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
            <h4 style="text-align:center">Solicitações Fora da Programação</h4>
            <!-- <pre> PEGAR DADOS DO COMPUTADOR
            <?php var_dump($_SERVER); ?>
            </pre> -->
            <div>
              <form class="form-inline">
               <form method="GET">
              <div class="form-group">
                <input type="text" class="form-control" name="pesquisa" placeholder="O que busca?" value="<?php echo (isset($_GET['pesquisa']) ? $_GET['pesquisa'] : ''); ?>">
              </div>
              <label for="meeting1"></label>
              <input class="form-control" id="meeting1" type="date" style="height:34px;" name="data_inicial" value="<?php echo (isset($_GET['data_inicial']) ? $_GET['data_inicial'] : ''); ?>">
              <label for="meeting2"></label><input   class="form-control" id="meeting2" type="date" name="data_final" value="<?php echo (isset($_GET['data_final']) ? $_GET['data_final'] : ''); ?>" style="height:34px;"/>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
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
              <th>Centrab</th>
              <th>Data de Solicitação</th>
              <th>Justificativas</th>
              <th>Situação OP</th>
              <th>Situação GER</th>
              <th style="text-align:center">Aprovação</th>

            </tr>
          </thead>
          <tbody>
               <!-- <pre>
              <?php print_r($row); ?>
            </pre> -->
            <?php foreach($listaOs as $row): ?>
            <tr style="font-size: 11px"id="solicitacao-<?php echo $row["codSolicitadas"]; ?>">
              <form method="post">
              <td><?php echo $row["numOM"]; ?>
              </td>
              <td>
                <?php echo $row["txtOM"]; ?>
              </td>
              <td><?php echo $row["operOM"]; ?></td>
              <td>
                <?php echo $row["txtOPER"]; ?>
              </td>
              <td>
                <strong>PT :</strong> <?php echo $row["ptOM"]; ?>
              </td>
              <td>
                <?php echo $row["centrabOM"];?>
              </td>
              <td style="text-align:center"><?php echo date("d/m/Y",strtotime($row["dataOM"]));?></td>
              <td>
                <?php echo $row["msgOM"];?>
              </td>
            <td>
                <span class="situacao1">
                  <?php echo $row["situacao"];?>
                </span>
            </td>            
            <td>
              <span class="situacao2">
                <?php echo $row["situacao2"];?>
              </span>
            </td>
            <td style="text-align:center">
             <?php include 'modal.php'; ?>
             <?php 
             if ($_SESSION['isgerOPER']):            
              ?>
            <button  type="button"
              class="btn btn-warning btn-xs glyphicon glyphicon-pencil" 
              data-toggle="modal" 
              data-target="#solicitacoesGER--<?php echo $row['codSolicitadas'];?>">
            </button> 
          <?php endif; ?>
             <?php 
             if($_SESSION['isGER']):            
              ?>
             <button  type="button"
              class="btn btn-primary btn-xs glyphicon glyphicon-pencil" 
              data-toggle="modal" 
              data-target="#solicitacoes--<?php echo $row['codSolicitadas'];?>">
            </button>
             <?php endif; ?>
             <?php 
             if($_SESSION['isAdmin']):            
              ?>
            <button type="button"
              class="btn btn-info btn-xs glyphicon glyphicon-plus" 
              data-toggle="modal"
              data-target="#aprovados--<?php echo $row['codSolicitadas'];?>">
            </button>
            <?php endif; ?>
            </td>
          </form>
          </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>


                <!-- Inicio Footer -->
              <?php include 'footerProg.php' ?>
                <!-- Fim Footer -->






                    <!-- INICIO SCRIPTS  -->
<!-- jQuery (necessary for Bootstrap's JavaScript
plugins) --> <script src="js/jquery.min.js"></script> 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><!-- Include all
compiled plugins (below), or include individual files as needed --> <script
src="bootstrap/js/bootstrap.min.js"></script> <!--Script para ocultar-->
<script>
$('.submit-aprovar').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var formulario = form.serialize();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consAprovadas_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      alert ("Serviço adicionado com sucesso!");
    }
  });
});

$('.submit-liberar').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var idlinha=form.find('input[name="cod-linha"]').val();
  var formulario = form.serialize();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consLiberacao_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      $("#solicitacao-"+idlinha).find('.situacao1').text("Aprovado");
      alert ("Serviço aprovado com sucesso!");
    }
  });
});
$('.submit-liberarGER').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var idlinha=form.find('input[name="cod-linha"]').val();
  var formulario = form.serialize();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consLiberacaoGER_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      $("#solicitacao-"+idlinha).find('.situacao2').text("Aprovada");
      alert ("Serviço aprovado com sucesso!");
    }
  });
});

$('.submit-reprovar').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var formulario = form.serialize();
  var idlinha=form.find('input[name="cod-linha"]').val();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consReprovadas_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      $("#solicitacao-"+idlinha).find('.situacao1').text("Reprovado");
      alert ("Serviço reprovado,atualize a pagina para mais informações!");
    }
  });
});

$('.submit-reprovarGER').on('click', function(event) {
  event.preventDefault();
  var form = $(this).closest('form');
  var formulario = form.serialize();
  var idlinha=form.find('input[name="cod-linha"]').val();
  console.log('formulario',formulario);
  $.ajax({
    type: "POST",
    url: 'consReprovadasGER_ajax.php',
    data: formulario,
    cache: false,
    success: function (data) {
      $("#solicitacao-"+idlinha).find('.situacao2').text("Reprovada");
      alert ("Serviço reprovado,atualize a pagina para mais informações!");
    }
  });
});




</script>
</body>
</html>