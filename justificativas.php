<?php
// DICA:
// PHP É LINEAR SEU FILHO DA PUTA(sincrono, linha a linha)
// JS É ASSINCRONO(sem sincronia)
// SEMPRE LEMBRAR DAS VARIAVEIS QUE JÁ TEM


// 1- por nome no overmouse "Atividade Realizada" - checkbox(bootstrap tooltip)
// erros e duvidas anotados:



// 4-  como fazer sistema de login de acordo com o pc logado. se usuario e senha == computador e petrobras, então abre, se nao manda mensagem.



include "database.php";
// print_r($_GET);
//print_r($_POST);
// print_r($_GET);
include 'consCancel.php';
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
  <title>Justificativas</title>

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
            <h4 style="text-align:center">PT Cancelada - Justificativa</h4>
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

            </tr>
          </thead>
          <tbody>
               <!-- <pre>
              <?php print_r($row); ?>
            </pre> -->
            <?php if (isset($listaOs)):?>
            <?php foreach($listaOs as $row): ?>
            <tr style="font-size: 11px">

              <td><?php echo $row["num_om"]; ?>
              </td>
              <td>
                <?php echo $row["txtbreve"]; ?>
              </td>
              <td><?php echo $row["Tare"]; ?></td>
              <td>
                <?php echo $row["textoTarefa"]; ?>
              </td>
              <td>
                <strong>PT :</strong> <?php echo $row["numpt"]; ?>
              </td>
              <td><?php echo $row["centrab"]; ?>
              </td>
              <td style="text-align:center"><?php echo date("d/m/Y",strtotime($row["dataAtividade"]));?></td>
              <td>
                <form  method="post"  id="teste-<?php echo $row['codprog'];?>" action="status_ajax.php" class="seletorstatus">
                 <input type="hidden" class="id_linha" name="id_linha"  value="<?php echo $row['codprog'];?>">
                 <select  class="selecao" name="selecao">
                   <?php $select=$pdo->prepare("SELECT * FROM statuscancel ORDER BY statusJust ASC");
                   $select->execute();
                   $fetchAll = $select->fetchAll();
                   foreach ($fetchAll as $seletor) {
                     echo '<option '.($seletor['statusJust']==$row['justificativa_detalhe']?'selected':"").' '.($_SESSION['isAdmin']?'':"disabled").' 
                     value="'.$seletor['statusJust'].'">'.$seletor['statusJust'].'</option>';
                   }?>
                 </select>
               </form>
               <br>
               <div class="oculta aparecerGeral">
                <form class="form-inline" method="post" action="justificativa_ajax.php">
                  <input type="hidden" class="id_linha" name="id_linha"  value="<?php echo $row['codprog'];?>">
                  <label>
                    <textarea class="form-control justUser" type="text" style="height:50px;" minlength="0" maxlength="144"  name="justUser" ><?php echo $row['justificativa_detalhe']; ?></textarea>
                    <button type="submit" class="btn-default glyphicon glyphicon-ok justificativa" name="justificativa"></button>
                  </label>            
                </div>
              </form>
            </td>
            <td><button class="more btn btn-default btn-xs  fa fa-caret-down"></button></td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
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
<script type="text/javascript">
$('.more').click(function(){
$(this).closest("tr").find(".oculta").slideToggle();   });
</script>
<script>
$('.allAppear').click(function(){
  $(".aparecerGeral").slideToggle();   
});
</script>
<script>

$(document).ready(function(){
$('.justificativa').on('click', function(event) {
    event.preventDefault();
    // pega o form mais proximo do definido(neste caso select-change)
   var form = $(this).closest('form');

   var trocar = $(this).val();

   var formulario = form.serialize();
   console.log('formulario',formulario);
   $.post("justificativa_ajax.php", formulario,function(data){
    alert('Justificativa inserida!');
   });
 });
$('.selecao').on('change', function(event) {
    event.preventDefault();
    // pega o form mais proximo do definido(neste caso select-change)
   var formularioJustificativa = $(this).closest('form');

   var seletorJustificativa = $(this).val();

   var formJustificativa = formularioJustificativa.serialize();
   console.log('formJustificativa',formJustificativa);
   $.post("seletorJustificativa_ajax.php", formJustificativa,function(data){
   });
 });


});
</script>


</body>
</html>