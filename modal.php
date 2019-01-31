                <!-- Modal deletar -->
                <div class="modal fade" id="deletarServ<?php echo $row['codprog'];?>">
                  <form method="post">
                    <input type="hidden" name='om' value="<?php echo $row['num_om'];?>">
                    <input type="hidden" name='oper1' value="<?php echo $row['Tare'];?>">
                    <input type="hidden" name='denominacao1' value="<?php echo $row['denominacao'];?>">
                    <input type="hidden" name='breve1' value="<?php echo $row['txtbreve'];?>">
                    <input type="hidden" name='txtoper1' value="<?php echo $row['textoTarefa'];?>">
                    <input type="hidden" name='centrab1' value="<?php echo $row['id_centrab'];?>">
                    <input type="hidden" name='ger1' value="<?php echo $row['gerencial'];?>">
                    <input type="hidden" name='dataAtv' value="<?php echo $row['dataAtividade'];?>">
                    <input type="hidden" name='code' value="<?php echo $row['codprog'];?>">
                    <input type="hidden" name='user' value="<?php echo $usuarios;?>">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <!--Cabeçalho-->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                          </button>
                          <h4 class="modal-tittle">Aviso:</h4>
                        </div>
                        <!--corpo-->
                        <div class="modal-body">
                          <div class="form-group">
                            <p>Número de registro para esta atividade:</p>
                            <?php
                            $contagemRegistro = $pdo->prepare('SELECT * FROM atividades WHERE num_om = :om1 AND Tare=:oper AND desativado= :setado ');
                            $dataParametro=array(
                              ':setado'=>"0",
                              ':om1'=>$row['num_om'],
                              ':oper'=>$row['Tare'],

                              );
                            $contagemRegistro->execute($dataParametro);
                          //conta o numero de registros obtidos
                            $rows = $contagemRegistro->rowCount();
                            ?>
                            <input type="text" class=" form-control" style="width:50px;" minlength="0" maxlength="20"  value="<?php echo $rows; ?>"></input>
                            <br>
                            <?php 
                            if ($rows==1):
                              ?>
                            <p>Justifique, este é o ultimo registro da sua atividade:</p>
                            <textarea class="form-control justificativa_deletar" type="text" style="height:50px;" minlength="0" maxlength="144"  name="justdel" ></textarea>
                          <?php endif; ?>
                        </div>
                      </div>
                      <!--rodape-->
                      <div class="modal-footer">
                        <h6>Deseja deletar atividade?</h6>
                        <button type="button" class="btn btn-primary submit-deletar" >
                          Deletar
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Sair
                        </button>                    
                      </div>
                    </div>
                  </div>
                </form>
              </div>

                

                <!-- Modal add -->
            <div class="modal fade" id="adicionarServ<?php echo $row['codprog'];?>">
              <form method="post">
                <input type="hidden" name='om' value="<?php echo $row['num_om'];?>">
                <input type="hidden" name='operacao' value="<?php echo $row['Tare'];?>">
                <input type="hidden" name='local2' value="<?php echo $row['local'];?>">
                <input type="hidden" name='denominacao1' value="<?php echo $row['denominacao'];?>">
                <input type="hidden" name='breve1' value="<?php echo $row['txtbreve'];?>">
                <input type="hidden" name='txtoper1' value="<?php echo $row['textoTarefa'];?>">
                <input type="hidden" name='centrab1' value="<?php echo $row['id_centrab'];?>">
                <input type="hidden" name='numlibra1' value="<?php echo $row['numlibra'];?>">
                <input type="hidden" name='numpt1' value="<?php echo $row['numpt'];?>">
                <input type="hidden" name='ger1' value="<?php echo $row['gerencial'];?>">
                <input type="hidden" name='just1' value="<?php echo $row['justificativa'];?>">
                <input type="hidden" name='justdetal1' value="<?php echo $row['justificativa_detalhe'];?>">
                <input type="hidden" name='crit1' value="<?php echo $row['criticidadept'];?>">
                <input type="hidden" name='giopp' value="<?php echo $row['giop'];?>">
                <input type="hidden" name='hh' value="<?php echo $row['horaexec'];?>">
                <input type="hidden" name='statuss' value="<?php echo $row['status'];?>">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">

                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <h4 class="modal-tittle">Adicionar Atividade:</h4>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <div class="form-group">
                        <h6>Data Solicitante:</h6>
                        <input type="date" name="datasolicitada2">
                        <h6>Requisitante:</h6>
                        <input type="text" name="requisitante2">
                      </div>
                    </div>
                    <!--rodape-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Sair
                      </button>
                      <button type="button" class="submit-adicionar btn btn-primary" data-dismiss="modal">
                        Solicitar
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <!--Modal Att SERVIÇO-->
            <div class="modal fade" id="modificar<?php echo $row['codprog'];?>">
              <form method="post">
                <input type="hidden" name="form" value="att">
                <input type="hidden" name='code' value="<?php echo $row['codprog'];?>">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">

                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <h4 class="modal-tittle">Modificar Serviço:</h4>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <div class="form-group">
                        <h6>Altere a data:</h6>
                        <input type="date" name="datasolicitada">
                        <h6>Altere o Requisitante:</h6>
                        <input type="text" name="requisitante">
                      </div>
                    </div>
                    <!--rodape-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Sair
                      </button>
                      <button type="button" class="btn btn-primary alterar" data-dismiss="modal">
                        Alterar
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>



            <!-- Modal Finalizada -->

            <div class="modal fade" id="finalizar<?php echo $row['codprog'];?>">
              <form method="post">
                <input type="hidden" name='om' value="<?php echo $row['num_om'];?>">
                <input type="hidden" name='oper1' value="<?php echo $row['Tare'];?>">
                <input type="hidden" name='code' value="<?php echo $row['codprog'];?>">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">

                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <h5 class="modal-tittle">Deseja marcar atividade como realizada?</h5>
                      <br>
                      <?php 
                        $contagemFim=$pdo->prepare('SELECT * FROM atividades WHERE num_om= :omfin and Tare = :operfin');
                        $databind=array(
                          ':omfin'=>$row['num_om'],
                          ':operfin'=>$row['Tare'],
                          );
                        $contagemFim->execute($databind);
                        $contar=$contagemFim->rowCount();
                        if ($contar>1):
                       ?>
                        <h6>Esta atividade continuará nos dias seguintes?</h6>
                        <select class="form-control input-xs seletor_fim_atividade" name="seletor_fim_atividade" required>
                          <option value="">Aguardando</option>
                          <option  value="sim">sim</option>
                          <option  value="nao">nao</option>
                        </select>
                      <?php endif; ?>
                      <h6 >Total horas programadas:</h6>
                      <input type="text" class=" form-control inputHora_Total hh_programada" minlength="0" maxlength="20"  name="justhora" value="<?php echo $row['horaexec'];?>"required></input>
                      <h6 >Horas executadas:</h6>
                      <input type="text" class="form-control inputHora_Total hh_executada" minlength="0" maxlength="20"  name="setarhora" value="" placeholder:"Hora" required></input>
                      <h6> Escreva a justificativa ou observações:</h6>
                      <textarea class="form-control texto_justificativa" style="margin-top:10px;"type="text" minlength="0" maxlength="255"  name="justMI" required></textarea>
                      <h6>Esta atividade ficará indisponivel após finalizada!</h6>
                    </div>
                    <!--Set sim/não-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Não
                      </button>
                      <button type="button" class="btn btn-primary finalizada">
                        Finalizar
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>


            <!-- Modal Desativar -->

            <div class="modal fade" id="desativar">
              <form method="post">
                <input type="hidden" name="form" value="disable">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">

                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <h4 class="modal-tittle">Fechar/Abrir Programação?</h4>
                      <br>
                      <h6></h6>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <div class="form-group">
                        <h6>User:</h6>
                        <input type="text" name="user">
                        <h6>Password:</h6>
                        <input type="password" name="password">
                      </div>
                    </div>
                    <!--Set sim/não-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Não
                      </button>
                      <button type="submit" class="btn btn-primary">
                        Sim
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>




            <div class="modal fade" id="cores-<?php echo $row['codprog'];?>">
              <form method="post">
                <input type="hidden" name="definecriticidade" value="cores">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <br>
                      <h6>Favor incluir as informações da PT:</h6>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <?php if ($_SESSION['isAdmin']||$_SESSION['isPlanejador']||$_SESSION['isOper']):
                      ?>
                      <input type="text" class="form-control" name="numeropt" value='<?php echo $row['numpt'];?>' placeholder='Digite o novo número da PT'>
                      <?php endif ?>
                      <br>
                      <input type="hidden" name="id_linha" value="<?php echo $row['codprog'];?>">
                      <select  class="criticidade form-control" name="criticidade">
                        <?php $select=$pdo->prepare("SELECT * FROM criticidade ORDER BY criticidade ASC");
                        $select->execute();
                        $fetchAll = $select->fetchAll();
                        foreach ($fetchAll as $selecao) {
                         echo '<option '.($selecao['criticidade']==$row['criticidadept']?'selected':"").' '.($_SESSION['isAdmin']||$_SESSION['isPlanejador']||$_SESSION['isOper']?'':"disabled").' value="'.$selecao['criticidade'].'">'.$selecao['criticidade'].'</option>';
                       };?>
                     </select>
                   </div>
                   <!--Set sim/não-->
                   <div class="modal-footer">
                    <button type="button" class="submit-criticidade btn btn-primary" data-dismiss="modal">
                      Feito!
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>



          <div class="modal fade" id="aprovados--<?php echo $row['codSolicitadas'];?>">
              <form method="post">
                <input type="hidden"  name="cod-linha"  value="<?php echo $row['codSolicitadas'];?>">
                <input type="hidden"  name="om"  value="<?php echo $row['numOM'];?>">
                <input type="hidden"  name="txtordem"  value="<?php echo $row['txtOM'];?>">
                <input type="hidden"  name="operOrdem"  value="<?php echo $row['operOM'];?>">
                <input type="hidden"  name="textOper"  value="<?php echo $row['txtOPER'];?>">
                <input type="hidden"  name="denomi"  value="<?php echo $row['denominacao'];?>">
                <input type="hidden"  name="ptOM1"  value="<?php echo $row['ptOM'];?>">
                <input type="hidden"  name="centrabOM1"  value="<?php echo $row['centrabOM'];?>">
                <input type="hidden"  name="requisitanteOM1"  value="<?php echo $row['reqOM'];?>">
                <input type="hidden"  name="numlibraOM"  value="<?php echo $row['libraOM'];?>">
                <input type="hidden"  name="local1"  value="<?php echo $row['localOM'];?>">
                <input type="hidden"  name="hh1"  value="<?php echo $row['hh'];?>">
                <input type="hidden"  name="ger1"  value="<?php echo $row['gerOM'];?>">
                <input type="hidden"  name="dataOM1"  value="<?php echo date("d/m/Y",strtotime($row["dataOM"]));?>">

                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <br>
                      <h6>A atividade abaixo entrará no dia <?php echo date("d/m/Y",strtotime($row["dataOM"]));?>?</h6>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <p>Atividade:</p>
                      <strong><?php echo $row['numOM'];?></strong>
                      <br>
                      <p>Serviço:</p>
                      <strong><?php echo $row['txtOPER'];?></strong>
                   </div>
                   <!--Set sim/não-->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-success submit-aprovar" data-dismiss="modal">
                      Sim
                    </button>                    
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Sair
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>


          <div class="modal fade" id="solicitacoes--<?php echo $row['codSolicitadas'];?>">
              <form method="post">
                <input type="hidden"  name="cod-linha"  value="<?php echo $row['codSolicitadas'];?>">
                <input type="hidden"  name="om"  value="<?php echo $row['numOM'];?>">
                <input type="hidden"  name="txtordem"  value="<?php echo $row['txtOM'];?>">
                <input type="hidden"  name="operOrdem"  value="<?php echo $row['operOM'];?>">
                <input type="hidden"  name="textOper"  value="<?php echo $row['txtOPER'];?>">
                <input type="hidden"  name="denomi"  value="<?php echo $row['denominacao'];?>">
                <input type="hidden"  name="ptOM1"  value="<?php echo $row['ptOM'];?>">
                <input type="hidden"  name="centrabOM1"  value="<?php echo $row['centrabOM'];?>">
                <input type="hidden"  name="requisitanteOM1"  value="<?php echo $row['reqOM'];?>">
                <input type="hidden"  name="numlibraOM"  value="<?php echo $row['libraOM'];?>">
                <input type="hidden"  name="local1"  value="<?php echo $row['localOM'];?>">
                <input type="hidden"  name="hh1"  value="<?php echo $row['hh'];?>">
                <input type="hidden"  name="ger1"  value="<?php echo $row['gerOM'];?>">
                <input type="hidden"  name="dataOM1"  value="<?php echo date("d/m/Y",strtotime($row["dataOM"]));?>">                
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <br>
                      <h6>Aprovar esta atividade para o dia <?php echo date("d/m/Y",strtotime($row["dataOM"]));?>?</h6>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <p>Atividade:</p>
                      <strong><?php echo $row['numOM'];?></strong>
                      <br>
                      <p>Serviço:</p>
                      <strong><?php echo $row['txtOPER'];?></strong>
                   </div>
                   <!--Set sim/não-->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-success submit-liberar" data-dismiss="modal">
                      Aprovar
                    </button>                    
                    <button type="button" class="btn btn-danger submit-reprovar" data-dismiss="modal">
                      Reprovar
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>


                    <div class="modal fade" id="solicitacoesGER--<?php echo $row['codSolicitadas'];?>">
              <form method="post">
                <input type="hidden"  name="cod-linha"  value="<?php echo $row['codSolicitadas'];?>">
                <input type="hidden"  name="om"  value="<?php echo $row['numOM'];?>">
                <input type="hidden"  name="txtordem"  value="<?php echo $row['txtOM'];?>">
                <input type="hidden"  name="operOrdem"  value="<?php echo $row['operOM'];?>">
                <input type="hidden"  name="textOper"  value="<?php echo $row['txtOPER'];?>">
                <input type="hidden"  name="denomi"  value="<?php echo $row['denominacao'];?>">
                <input type="hidden"  name="ptOM1"  value="<?php echo $row['ptOM'];?>">
                <input type="hidden"  name="centrabOM1"  value="<?php echo $row['centrabOM'];?>">
                <input type="hidden"  name="requisitanteOM1"  value="<?php echo $row['reqOM'];?>">
                <input type="hidden"  name="numlibraOM"  value="<?php echo $row['libraOM'];?>">
                <input type="hidden"  name="local1"  value="<?php echo $row['localOM'];?>">
                <input type="hidden"  name="hh1"  value="<?php echo $row['hh'];?>">
                <input type="hidden"  name="ger1"  value="<?php echo $row['gerOM'];?>">
                <input type="hidden"  name="dataOM1"  value="<?php echo date("d/m/Y",strtotime($row["dataOM"]));?>">                
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <!--Cabeçalho-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                      <br>
                      <h6>Aprovar esta atividade para o dia <?php echo date("d/m/Y",strtotime($row["dataOM"]));?>?</h6>
                    </div>
                    <!--corpo-->
                    <div class="modal-body">
                      <p>Atividade:</p>
                      <strong><?php echo $row['numOM'];?></strong>
                      <br>
                      <p>Serviço:</p>
                      <strong><?php echo $row['txtOPER'];?></strong>
                   </div>
                   <!--Set sim/não-->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-success submit-liberarGER" data-dismiss="modal">
                      Aprovar
                    </button>                    
                    <button type="button" class="btn btn-danger submit-reprovarGER" data-dismiss="modal">
                      Reprovar
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>

