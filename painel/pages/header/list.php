<?php
    $header_fotos = $model->result('SELECT * FROM header_inicio');
?>

<div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Header</h4>
                  <p class="card-category"> Controle de fotos do header</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Foto
                        </th>
                        <th>
                            <!-- Actions -->
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($header_fotos as $key => $header_foto) { ?>           
                            <tr>
                            <td>
                                <?php echo $header_foto->header_id; ?>
                            </td>
                            <td>
                              <img style="width: 150px;" src="assets/images/<?php echo $header_foto->header_foto; ?>" alt="<?php echo $header_foto->header_foto; ?>">
                            </td>
                            <td class="td-actions text-left">
                              <a href="<?php echo $base; ?>header/delete/<?php echo $header_foto->header_id; ?>" type="button" rel="tooltip" class="btn btn-danger">
                                <i class="material-icons">close</i>
                              </a>
                            </td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                   
                  </div>
                  <a href="<?php echo $base; ?>header/add" type="submit" class="btn btn-primary pull-right">Adicionar Foto Header</a>
                </div>
              </div>
            </div>
        </div>