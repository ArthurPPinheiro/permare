<?php
    $categories = $model->result('SELECT * FROM task_categories');

    if(count($_POST) > 0){
        $insert = new stdClass();
        $insert->task_name = $_POST['task_name'];
				$insert->task_categorie = $_POST['task_categorie'];
        $model->insert('todo', $insert);
      	header('Location:'.$base.'todo');
				}
?>
<form method="POST">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Create Task</h4>
          <p class="card-category">Complete your Task</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Task Name</label>
                <input type="text" class="form-control" name="task_name">
							</div>
						</div>
            <div class="col-md-12">
              <div class="form-group">
                  <label for="task_categorie">Task Categorie</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" name="task_categorie" id="exampleFormControlSelect1">
											<?php foreach ($categories as $key => $categorie) { ?>      	                
												<option value="<?php echo $categorie->task_categorie_name; ?>"><?php echo $categorie->task_categorie_name; ?></option>
                      <?php } ?>
                  </select>
							</div>
						</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary pull-right">Update Profile</button>
</form>