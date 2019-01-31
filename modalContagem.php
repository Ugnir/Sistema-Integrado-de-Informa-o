       <?php 
        $contar=$pdo->prepare('SELECT local,COUNT(local) as contagem FROM previa prev WHERE 1=1 '.$where.' GROUP BY local HAVING COUNT(local)>1 ORDER BY COUNT(local) DESC');
        $contar->execute();
        $fetch=$contar->fetchall(PDO::FETCH_ASSOC);
        $RowCount = $contar->rowCount();
        ?> 
            <div class="modal fade" id="contagemServ">
              <form method="post">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">

                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <h4 class="modal-tittle">Quantidade de Serviços:</h4>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <table  class="table table-hover table-bordered table-condensed" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                          <th>Local</th>
                          <th>Quantidade</th>
                        </tr>
                        </thead>
                        <tbody>
   <?php foreach ($fetch as $row): ?>
                          <tr>
                            <td>
                              <?php echo $row['local']; ?>
                            </td>
                            <td>
                              <?php echo $row['contagem']; ?>
                            </td>
                          </tr>
    <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <!--rodape-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Sair
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>