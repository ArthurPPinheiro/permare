<?php
    $usuarios = $model->result('SELECT * FROM usuarios');
?>

<div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tabela de Usuarios</h4>
                  <p class="card-category"> Usuarios</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Usuario Email
                        </th>
                        <th>
                            <!-- Actions -->
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($usuarios as $key => $usuario) { ?>           
                            <tr>
                            <td>
                                <?php echo $usuario->usuario_id; ?>
                            </td>
                            <td>
                                <?php echo $usuario->usuario_email; ?>
                            </td>
                                <td class="td-actions text-left">
                                    <a href="<?php echo $base; ?>usuarios/edit/<?php echo $usuario->usuario_id; ?>" type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="<?php echo $base; ?>usuarios/delete/<?php echo $usuario->usuario_id; ?>" type="button" rel="tooltip" class="btn btn-danger">
                                        <i class="material-icons">close</i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <a href="<?php echo $base; ?>/usuarios/add" type="submit" class="btn btn-primary pull-right">Create Task</a>
                  </div>
                </div>
              </div>
            </div>
        </div>