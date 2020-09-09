<?php
    $tasks = $model->result('SELECT * FROM todo');
?>

<div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Task Name
                        </th>
                        <th>
                          Task Categorie
                        </th>
                        <th>
                            <!-- Actions -->
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($tasks as $key => $task) { ?>           
                            <tr>
                            <td>
                                <?php echo $task->task_id; ?>
                            </td>
                            <td>
                                <?php echo $task->task_name; ?>
                            </td>
                            <td>
                                <?php echo $task->task_categorie; ?>
                            </td>
                                <td class="td-actions text-left">
                                    <a href="<?php echo $base; ?>todo/edit/<?php echo $task->task_id; ?>" type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="<?php echo $base; ?>todo/delete/<?php echo $task->task_id; ?>" type="button" rel="tooltip" class="btn btn-danger">
                                        <i class="material-icons">close</i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <a href="<?php echo $base; ?>/todo/add" type="submit" class="btn btn-primary pull-right">Create Task</a>
                  </div>
                </div>
              </div>
            </div>
        </div>