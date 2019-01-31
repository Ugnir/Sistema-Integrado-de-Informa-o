<?php 
$usuarios="".$_SESSION['usuario'];
?>

 <nav class="navbar" style="border-color:white">
  <div class="container-fluid" style="background-color:white">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar" style="background-color:white;"href="index.php"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" style="background-color:white;color:gray" href="#">GPI <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Programação</a></li>
            <li><a href="justificativas.php">Justificativas</a></li>
            <li><a href="solicitacoes.php">Solicitações</a></li>
            <li><a href="solicitar_serv.php">Formulario SFP</a></li>
            <li><a href="previa.php">Prévia</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="hoverGraf" style="background-color:white;color:gray" data-toggle="dropdown" href="#">Gráficos <span class="caret"></span></a>
          <ul class="dropdown-menu" id="hoveroptions">
            <li><a href="graph.php">Rendimento HH</a></li>
            <li><a href="graphStatus.php">Status PT</a></li>
          </ul>
        </li>
        <?php 
          if ($_SESSION['isAdmin']):
         ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" style="background-color:white;color:gray" href="#">Upload <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="upload.php" target="_blank">Serviços Semanais</a></li>
              <li><a href="uploadStatusPT.php" target="_blank">Status de PT</a></li>
              <li><a href="upload_previa.php" target="_blank">Prévia</a></li>
            </ul>
        </li>
        <?php endif; ?>
        <?php 
          if ($_SESSION['isAdmin'] || $_SESSION['isPlanejador']):
         ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" style="background-color:white;color:gray" href="#">Historico <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="retiradasProg.php" >Retiradas da Programação</a></li>
            </ul>
        </li>
        <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
        if ($_SESSION['isAdmin']): ?>
          <li> <a  style="color:black" data-toggle="modal" data-target="#upload_previa" class="glyphicon glyphicon-open"></a></li>
          <li> <a  style="color:black" class="allAppear fas fa-plus"></a></li>
        <?php endif; ?>
        <li><a href="#"  style="background-color:white;color:gray" ><span class="glyphicon glyphicon-user"><?php echo " ".$usuarios;?></span></a></li>
        <li><a href="logout.php"  style="background-color:white;color:gray"><span class="glyphicon glyphicon-log-out "><?php echo " "."Sair"; ?></span></a></li>
      </ul>
    </div>
  </div>
  <?php include'modal_upload_previa.php'; ?>
</nav>
