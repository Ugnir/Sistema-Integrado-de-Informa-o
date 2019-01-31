            <!--Modal Att SERVIÇO-->
            <div class="modal fade" id="modificarPrevia-<?php echo $row['codprog'];?>">
              <form method="post">
                <input type="hidden" name="form" value="att">
                <input type="hidden" name='code' value="<?php echo $row['codprog'];?>">
                <input type="hidden" name='om' value="<?php echo $row['num_om'];?>">
                <input type="hidden" name='oper' value="<?php echo $row['Tare'];?>">
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
                        <input type="date" name="datasolicitada" value="<?php echo $row["dataAtividade"];?>">
                        <h6>Altere o Requisitante:</h6>
                        <input type="text" name="requisitante" value="<?php echo $row['requisitante']; ?>">
                        <h6>Altere o local:</h6>
                        <select type="text" name="local">
                          <option> <?php echo $row['local'] ?></option>
                          <option>Fase 1</option>
                          <option>MOD 1</option>
                          <option>MOD 2</option>
                          <option>MOD 3</option>
                          <option>MED e Prod</option>
                          <option>ADM</option>
                          <option>SUBESTAÇÂO</option>
                        </select>                       
                        <h6>Altere o Centro de Trabalho:</h6>
                      <select type="text" name="centrabalho">
                        <option><?php echo $row['centrab']; ?></option>
                        <option>030ele01</option>
                        <option>030ele02</option>
                        <option>030ele03</option>
                        <option>030ins01</option>
                        <option>030ins02</option>
                        <option>030ins03</option>
                        <option>030ins04</option>
                        <option>030mec01</option>
                        <option>030mec02</option>
                        <option>030mec03</option>
                        <option>100cal01</option>
                        <option>100man02</option>
                        <option>100MAN01</option>
                        <option>100CAL02</option>
                        <option>030AUT01</option>
                        <option>030AUT02</option>
                        <option>030ELE06</option>
                        <option>030INS06</option>
                        <option>030MEC06</option>
                        <option>030PIN03</option>
                        <option>100PIN02</option>
                        <option>080plc01</option>
                        <option>040tip01</option>
                        <option>030CTEXT</option>
                        <option>030GUIND</option>
                      </select>
                      </div>
                      <button type="button" class="btn btn-primary alterar-banco" data-dismiss="modal">
                        Alterar Banco
                      </button>
                       <button type="button" class="btn btn-default alterar-registro" data-dismiss="modal">
                        Alterar Registro
                      </button>                    
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




                            <!-- Modal deletar -->
                            <div class="modal fade" id="deletarPrevia-<?php echo $row['codprog'];?>">
                              <form method="post">
                                <input type="hidden"  name="cod-linha"  value="<?php echo $row['codprog'];?>">
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
                                      <h6>Deseja deletar atividade?</h6>
                                      <button type="button" class="btn btn-primary deletar-banco" data-dismiss="modal" >
                                        Banco de dados
                                      </button>
                                      <button type="button" class="btn btn-default deletar-registro" data-dismiss="modal">
                                        Registro
                                      </button>
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





              