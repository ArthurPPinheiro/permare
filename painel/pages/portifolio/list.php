<?php
    $portifolio_itens = $model->result('SELECT * FROM portifolio');
?>

<div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Portifolio</h4>
                  <p class="card-category"> Controle de fotos do portifolio</p>
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
                          Foto Categoria
                        </th>
                        <th>
                            <!-- Actions -->
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($portifolio_itens as $key => $portifolio_item) { ?>           
                            <tr>
                            <td>
                                <?php echo $portifolio_item->foto_id; ?>
                            </td>
                            <td>
                                <img style="width: 150px;" src="assets/images/<?php echo $portifolio_item->foto; ?>" alt="<?php echo $portifolio_item->foto; ?>">
                            </td>
                            <td>
                                <?php echo $portifolio_item->foto_categoria; ?>
                            </td>
                                <td class="td-actions text-left">
                                    <a href="<?php echo $base; ?>portifolio/delete/<?php echo $portifolio_item->foto_id; ?>" type="button" rel="tooltip" class="btn btn-danger">
                                        <i class="material-icons">close</i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                   
                  </div>
                  <a href="<?php echo $base; ?>portifolio/add" type="submit" class="btn btn-primary pull-right">Create Task</a>
                </div>
              </div>
            </div>
        </div>