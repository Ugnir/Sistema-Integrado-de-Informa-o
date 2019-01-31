<?php 

    include 'database.php';

    if(isset($_POST["Import"])){
    //First we need to make a connection with the database

      echo $filename=$_FILES["file"]["tmp_name"];


      if($_FILES["file"]["size"] > 0){

        $file = fopen($filename, "r");
        // $count = 1;                                         // add this line
        while (($attBd = fgetcsv($file, 10000, ";")) !== FALSE){

          $dataAtividade1=explode("/",$attBd[6]);
          $dataAtividade1=$dataAtividade1[2]."-".$dataAtividade1[1]."-".($dataAtividade1[0]);

          $dataAtividade2=explode("/",$attBd[7]);
          $dataAtividade2=$dataAtividade2[2]."-".$dataAtividade2[1]."-".($dataAtividade2[0]+1);

          $period = new DatePeriod(
           new Datetime($dataAtividade1),
           new DateInterval('P1D'),
           new Datetime($dataAtividade2)
           );
          foreach ($period as $key => $value) {
            $Aguardando = $attBd[9];
            if($Aguardando==""){
              $Aguardando="Aguardando";
            };

            $verCentro=$pdo->query("SELECT codecentrab FROM centrab WHERE nome_centrab ='".$attBd[5]."'");
            $recID=$verCentro->fetch()[0];

            $verLocal=$pdo->query("SELECT localizacao FROM locais WHERE idLocal ='".$attBd[12]."'");
            $recLocal=$verLocal->fetch()[0];

            $verGerencia=$pdo->query("SELECT gerencia FROM centrab WHERE nome_centrab = '".$attBd[5]."'");
            $recGer=$verGerencia->fetch()[0];

            $sql = $pdo->prepare('INSERT INTO previa (num_om, denominacao, txtbreve, Tare, textoTarefa, id_centrab,
             local, dataAtividade, numlibra, numpt, requisitante, horaexec, gerencial, finalizada, desativado, status,
             giop, justificativa, justificativa_detalhe, criticidadept)
            VALUES
            (:num_om,:denominacao,:txtbreve,:Tare,:textoTarefa,:id_centrab,:local1,
              :dataAtividade,:numlibra,:numpt,:requisitante,:horaexec,:gerencia,:fin,:desat,:stat,:giop,:just,:justDet,:criticidade)');
            $dataBind=array(
              ':num_om'=>($attBd[0]),
              ':denominacao'=>utf8_encode(str_replace('"','-',$attBd[1])),
              ':txtbreve'=>utf8_encode(str_replace('"','-',$attBd[2])),
              ':Tare'=>($attBd[3]),
              ':textoTarefa'=>utf8_encode(str_replace('"','-',$attBd[4])),
              ':id_centrab'=>($recID),
              ':local1'=>($recLocal),
              ':dataAtividade'=>$value->format('Y-m-d'),
              ':numlibra'=>utf8_encode($attBd[8]),
              ':numpt'=>utf8_encode($attBd[9]),
              ':requisitante'=>utf8_encode($attBd[10]),
              ':horaexec'=>str_replace(",",".", $attBd[11]),
              ':gerencia'=>($recGer),
              ':fin'=>'0',
              ':desat'=>'0',
              ':stat'=>'',
              ':giop'=>'',
              ':just'=>'',
              ':justDet'=>'',
              ':criticidade'=>'0',
              );
            $sql->execute(
              $dataBind);
            echo "<pre>";
            print_r($dataBind);
            echo "</pre>";
          }
        }
      }
    };

     ?>