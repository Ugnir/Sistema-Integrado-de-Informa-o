<?php 

if ($_SERVER["REQUEST_METHOD"]=='POST') {
	// pegou dados do POST //verifica se o usuário realmente não existe
    $verifica = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login');
    $dataParam=array(
    	':login'=>$_POST['login'],);
    $verifica->execute($dataParam);

    //conta o numero de registros obtidos
    $rows = $verifica->rowCount();
    if($rows >= 1){
       $mensagem = "username";}
    else {    	
		$sql =$pdo->prepare('INSERT INTO usuarios(login,senha,dica) VALUES(:login,:senha,:dica)');
		$dataBind=array(
			':login'=>filter_var($_POST['login']),
			':senha'=>filter_var(md5($_POST['senha'])),
			':dica'=>filter_var($_POST['dica']),

		);

	   	$sql->execute($dataBind);
	   	$mensagem="sucesso";
	    }
	if ($mensagem =="username") {
		echo "<script>alert('Já existe usuario cadastrado com este nome.'); location.href = 'cadastro.php';</script>";
	}else{
		echo "<script>alert('Cadastro efetuado com sucesso!'); location.href = 'login.php';</script>";

	}
}


 ?>