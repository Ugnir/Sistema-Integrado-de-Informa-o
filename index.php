<?php
include "database.php";
include 'cons.php';
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
            <h4 style="text-align:center">Controle de Programação</h4>
            <!-- <pre> PEGAR DADOS DO COMPUTADOR
            <?php var_dump($_SERVER); ?>
          </pre> -->
          <div>
            <form class="form-inline">
             <button type="button" class="btn btn-default" >
               <a  style="color:black" id="export_index" class="fas fa-print"></a></a>
             </button>
             <?php if($_SESSION['isAdmin']): ?>
              <a type="text" data-toggle="modal" data-target="#desativar" 
              style ="margin-left:" class="btn btn-default "><i class = "fa fa-lock"></i></a>
             <?php endif; ?>
             <form method="GET">
              <div class="form-group">
                <input type="text" class="form-control" name="pesquisa" id="pesquisa1" placeholder="O que busca?" value="<?php echo (isset($_GET['pesquisa']) ? $_GET['pesquisa'] : ''); ?>">
              </div>
              <label for="meeting1"></label>
              <input class="form-control" id="meeting1" type="date" style="height:34px;" name="data_inicial" value="<?php echo (isset($_GET['data_inicial']) ? $_GET['data_inicial'] : ''); ?>">
              <label for="meeting2"></label><input  class="form-control" id="meeting2" type="date" name="data_final" value="<?php echo (isset($_GET['data_final']) ? $_GET['data_final'] : ''); ?>" style="height:34px;"/>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#contagemServIndex">Mais</button>
              <?php include 'modalContagemIndex.php'; ?>
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
              <th style="width:150px;">Menu</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($listaOs)):?>
            <?php foreach($listaOs as $row): ?>
            <tr style="font-size: 11px" 
            <?php echo($row['finalizada'] ? "class='linha_finalizada'" : "");?>>
            <td><?php echo $row["num_om"]; ?>
              <div class="oculta aparecerGeral" style="padding-top:10px;" >
                <strong>Denominação:</strong>
              </div>
              <div class="oculta aparecerGeral" style="padding-top:35px;">
                <strong>Observações:</strong>
              </div>
            </td>
            <td>
              <?php echo $row["txtbreve"]; ?>
              <div class="oculta aparecerGeral" style="padding-top:10px;" >
                <?php echo $row["denominacao"]; ?>
              </div>
           </td>
           <td><?php echo $row["Tare"]; ?></td>
           <td>
            <?php echo $row["textoTarefa"]; ?>
            <div class="oculta aparecerGeral" style="padding-top:10px;" >
              <strong>Localização:</strong> 
              <?php echo $row["local"]; ?>
            </div>
            <div class="oculta aparecerGeral">
              <form class="form-inline" method="post">
                  <input type="hidden" class="id-linha" name="id-linha"  value="<?php echo $row['codprog'];?>">
                <label>
                  <textarea class="form-control observPT" type="text" style="margin-top:25px;width:165px;" minlength="0" maxlength="255"  name="observPT" ><?php echo $row['observacao']; ?></textarea>
                  <button type="submit" class="btn btn-default btn-xs glyphicon glyphicon-ok observ" style="margin-top:58px;" name="observ"></button>
                </label>            
              </form>
            </div>
          </td>
          <td style="width:160px">          
            <div class="pai">
                <strong style="float:left">PT :</strong>
                 <?php if ($_SESSION['isAdmin']||$_SESSION['isPlanejador']||$_SESSION['isOper']): ?>
                  <span  class="criticidade-<?php echo $row['criticidadept']; ?> modal-alterpt" data-id="<?php echo $row['codprog'];?>">
                 <?php endif ?>
                 <?php echo $row["numpt"]; ?>
              </span>
            </div>
              <div class="pai">
                <div>
                <form  method="post">
                  <input type="hidden" class="id_linha" name="id_linha"  value="<?php echo $row['codprog'];?>">
                  <select  class="giop form-control input-xs" name="seletorGiop" >
                   <?php $operlist=$pdo->prepare("SELECT * FROM operador ORDER BY nomegiop ASC");
                   $operlist->execute();
                   $fetchAll = $operlist->fetchAll();
                   foreach ($fetchAll as $operadores) {
                     echo '<option '.($operadores['nomegiop']==$row['giop']?'selected':"").' '.($_SESSION['isAdmin']||$_SESSION['isPlanejador']||$_SESSION['isOper']?'':"disabled").' value="'.$operadores['nomegiop'].'">'.$operadores['nomegiop'].'</option>';
                   } ?>
                 </select>
               </form>
             </div>
             <div>
               <form  method="post"  id="teste-<?php echo $row['codprog'];?>" action="status_ajax.php" class="seletorstatus">
                 <input type="hidden" class="id_linha" name="id_linha"  value="<?php echo $row['codprog'];?>">
                 <select  class="selecao form-control input-xs" name="selecao">
                   <?php $select=$pdo->prepare("SELECT * FROM statuspt ORDER BY status ASC");
                   $select->execute();
                   $fetchAll = $select->fetchAll();
                   foreach ($fetchAll as $selecao) {
                     echo '<option '.($selecao['status']==$row['status']?'selected':"").' '.($_SESSION['isAdmin']||$_SESSION['isPlanejador']||$_SESSION['isOper']?'':"disabled").' value="'.$selecao['status'].'">'.$selecao['status'].'</option>';
                   } ?>
                 </select>
               </form>
             </div>
           </div>
           <div>
           <div class="oculta aparecerGeral left" style="padding-top:25px;" >
            <strong>Requisitante:</strong> 
            <?php echo $row["requisitante"]; ?>
           </div>
          </div>
          <div class="oculta aparecerGeral left" style="padding-top:10px;" >
            <strong>Libra:</strong> <?php echo $row["numlibra"]; ?>
          </div>
        </td>
      <td><?php echo $row["centrab"]; ?>
        <div class="oculta aparecerGeral left" style="padding-top:10px;" >
        </div>
      </td>
      <td style="text-align:center"><?php echo date("d/m/Y",strtotime($row["dataAtividade"]));?>
      <?php
      if ($row['continuacaoServ']!=""): 
      ;?>
      <br>
      <strong>Reprogramar?</strong><?php echo('  '.$row['continuacaoServ']); ?>
      <?php endif; ?>
      </td>
      <td>


        <!-- botões -->
        <?php include 'botoesProg.php' ?>
        <!-- fim botões -->



        <!-- Inicio Modal -->
        <?php include 'modal.php'; ?>
        <!-- Fim Modal -->

      </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
   </tbody>
  </table>
  </div>
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
</body>
</html>

