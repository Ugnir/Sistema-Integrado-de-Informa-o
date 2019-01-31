<?php 
include "database.php";
include 'session_start.php'; 
// include 'consVerificaradm.php';
include 'consSolicitacoes.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" co,k,ntent="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Solicitar</title>
<!--===============================================================================================-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="conf_Formulario/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="conf_Formulario/css/util.css">
	<link rel="stylesheet" type="text/css" href="conf_Formulario/css/main.css">
<!--===============================================================================================-->
<!--<script src="js/xlsx.js"></script>-->
  <!-- <script src="js/xlsx.full.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.6.0/jszip.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="js/jquery.min.js"></script> 

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


	<div class="container-contact100" style="border">

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(conf_Formulario/images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Solicite a Atividade:
				</span>

				<span class="contact100-form-title-2">
					Após aprovação a mesma está pronta para entrar na programação!
				</span>
			</div>

			<form class="contact100-form validate-form" method="post" name="cadastroServ">
				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">Ordem:</span>
					<input class="input100" type="text" name="om_solicitar" placeholder=" Preencha o número da ordem">
					<span class="focus-input100"></span>
				</div>					
				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">Denominação:</span>
					<input class="input100" type="text" name="denomi_solicitar" placeholder=" Preencha denominação loc.instalação">
					<span class="focus-input100"></span>
				</div>				
				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">HH necessario:</span>
					<input class="input100" type="text" name="hh_solicitar" placeholder="Preencha qtd de horas da atividade">
					<span class="focus-input100"></span>
				</div>				
				<div class="wrap-input100 validate-input" required >
					<span class="label-input100">Texto da Ordem:</span>
					<input class="input100" type="text" name="omtext_solicitar" placeholder="Preencha o texto">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">Operação:</span>
					<input class="input100" type="text" name="oper_solicitar" placeholder="Preencha a operação">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">Texto da Operação:</span>
					<input class="input100" type="text" name="opertext_solicitar" placeholder="Preencha o texto">
					<span class="focus-input100"></span>
				</div>				

				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">Centro de Trabalho:</span>
					<input class="input100" type="text" name="centrab_solicitar" placeholder="Preencha o centro de trabalho">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">Localização:</span>
					<select class="input100" type="text" name="local_solicitar" placeholder="Preencha a localização">
						<option>Preencha a Local</option>
						<option>Fase 1</option>
						<option>MOD 1</option>
						<option>MOD 2</option>
						<option>MOD 3</option>
						<option>MED e Prod</option>
						<option>ADM</option>
						<option>SUBESTAÇÂO</option>
					</select>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">PT:</span>
					<input class="input100" type="text" name="pt_solicitar" placeholder="Preencha a PT">
					<span class="focus-input100"></span>
				</div>						
				<div class="wrap-input100 validate-input" required>
					<span class="label-input100">Libra:</span>
					<input class="input100" type="text" name="libra_solicitar" placeholder="Preencha a Libra">
					<span class="focus-input100"></span>
				</div>				

				<div class="wrap-input100 validate-input" required >
					<span class="label-input100">Requisitante:</span>
					<input class="input100" type="text" name="req_solicitar" placeholder="Preencha o requisitante">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" required >
					<span class="label-input100">Gerencia:</span>
					<select class="input100" type="text" name="ger_solicitar">
						<option>MI</option>
						<option>ISUP</option>
						<option>CeM</option>
						<option>IE</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" required >
					<span class="label-input100">Data de Solicitação:</span>
					<input class="input100" type="date" name="date_solicitar" placeholder="Preencha a data">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" required >
					<span class="label-input100">Mensagem:</span>
					<textarea class="input100" name="message_solicitar" placeholder="Sua Justificativa..."></textarea>
					<span class="focus-input100"></span>
				</div>
				<strong>NECESSARIO TODOS OS CAMPOS DEVIDAMENTE PREENCHIDOS, CASO NÃO SEJA, NÃO IRÁ GERAR REQUISIÇÃO.</strong>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Enviar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="conf_Formulario/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="conf_Formulario/vendor/bootstrap/js/popper.js"></script>
	<script src="conf_Formulario/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="conf_Formulario/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="conf_Formulario/vendor/daterangepicker/moment.min.js"></script>
	<script src="conf_Formulario/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="conf_Formulario/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><!-- Include all
compiled plugins (below), or include individual files as needed --> <script
src="bootstrap/js/bootstrap.min.js"></script> <!--Script para ocultar-->


</script>
</body>
</html>
