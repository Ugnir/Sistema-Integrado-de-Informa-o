 
<?php  
include 'database.php';
if ($_SERVER["REQUEST_METHOD"]=='POST') {

        $dbh = $pdo->prepare('INSERT INTO solicitadas
         (numOM,txtOM,operOM,txtOPER,denominacao,centrabOM,localOM,ptOM,
          reqOM,gerOM,dataOM,msgOM,hh,libraOM)
          VALUES
         (:num1,:txtom1, :operOM1,:txtOPER1,:denomi1,:centrabOM1,:localOM,:ptOM, :reqOM ,:gerOM ,:dataOM,:msgOM,:hh1,:libra1)');


      $dataBind=array(
        ':num1'=>$_POST['om_solicitar'],
        ':txtom1'=>$_POST['omtext_solicitar'],
        ':operOM1'=>$_POST['oper_solicitar'],
        ':txtOPER1' =>$_POST['opertext_solicitar'],
        ':denomi1' =>$_POST['denomi_solicitar'],
        ':centrabOM1' =>$_POST['centrab_solicitar'],
        ':localOM' =>$_POST['local_solicitar'],
        ':ptOM' =>$_POST['pt_solicitar'],
        ':reqOM' =>$_POST['req_solicitar'],
        ':gerOM' =>$_POST['ger_solicitar'],
        ':dataOM' =>$_POST['date_solicitar'],
        ':msgOM' =>$_POST['message_solicitar'],
        ':hh1' =>$_POST['hh_solicitar'],
        ':libra1' =>$_POST['libra_solicitar'],

      );
      $dbh->execute(
        $dataBind
        
     );
  }


 ?>

