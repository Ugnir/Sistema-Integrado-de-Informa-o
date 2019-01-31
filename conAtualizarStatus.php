<?php 
   		 $sql = $pdo->prepare('UPDATE atividades SET status = atualizarstatus.statusatt FROM atividades INNER JOIN 
   		 					   atualizarstatus ON atividades.num_pt = atualizarstatus.pt');
   		 $sql->execute();
		print_r($sql);	
 ?>