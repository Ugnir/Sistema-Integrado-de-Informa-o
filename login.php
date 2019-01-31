<?php 

require_once 'database.php';

session_start();

			$_SESSION['isAdmin']=false;
			$_SESSION['isPlanejador']=false;
			$_SESSION['isOper']=false;
			$_SESSION['isgerOPER']=false;
			$_SESSION['isGER']=false;
			$_SESSION['isExecutante']=false;
			
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
	$Query =$pdo->prepare("SELECT * FROM usuarios WHERE login = :user and senha = :password");
	$log=array(
		':user'=>filter_var($_POST['username']),
		':password'=>filter_var(md5($_POST['password'])),
		);
	$Query->execute($log);
	$user = $Query->fetch(PDO::FETCH_ASSOC);    
	$RowCount = $Query->rowCount();


	if($RowCount == 0){
		echo "error";
		$mensagem="falha";
	}
	else {
		$_SESSION['logado'] = true;
		$_SESSION['usuario'] = $_POST['username'];
		$_SESSION['id_usuario'] = $user['id_usuario'];
		if ($user['Perfil']==1){
			$_SESSION['isAdmin']=true;
		}elseif($user['Perfil']==2){
			$_SESSION['isPlanejador']=true;
		}elseif($user['Perfil']==3){
			$_SESSION['isOper']=true;
		}elseif($user['Perfil']==4){
			$_SESSION['isgerOPER']=true;
		}elseif($user['Perfil']==5){
			$_SESSION['isGER']=true;
		}elseif($user['Perfil']==6){
			$_SESSION['isExecutante']=true;
		}
		
		$mensagem = "sucesso";
	}
	if ($mensagem =="falha") {
		echo "<script>alert('Credenciais invalidas'); location.href = 'login.php';</script>";
	}else{
		echo "<script>alert('Bem vindo!'); location.href = 'index.php';</script>";
	}  
}

    // print_r($RowCount);
    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Conecte-se</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="plugins/login/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugins/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugins/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugins/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugins/login/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="plugins/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugins/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugins/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="plugins/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugins/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="plugins/login/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						Conecte-se
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input class="input100" type="text" name="username"id="username" placeholder="Usuário">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" id="password" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="entrar" class="login100-form-btn">
							Entrar
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Esqueceu
						</span>

						<a href="#" class="txt2">
							o nome de usuario / senha?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="cadastro.php" class="txt3">
							Cadastre-se
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('plugins/login/images/utgc.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
	<script src="plugins/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="plugins/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="plugins/login/vendor/bootstrap/js/popper.js"></script>
	<script src="plugins/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="plugins/login/vendor/select2/select2.min.js"></script>
	<script>
	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});
	</script>
	<!--===============================================================================================-->
	<script src="plugins/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="plugins/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="plugins/login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="plugins/login/js/main.js"></script>

</body>
</html>