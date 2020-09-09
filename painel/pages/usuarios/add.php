<?php
    $categories = $model->result('SELECT * FROM usuarios');

    if(count($_POST) > 0){
        $insert = new stdClass();
        $insert->usuario_email = $_POST['email'];
				$insert->usuario_senha = md5($_POST['senha']);
        $model->insert('usuarios', $insert);
      	header('Location:'.$base.'usuarios');
				}
?>
<form method="POST">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Adicionar Usuario</h4>
          <p class="card-category">Adicione um novo usuario</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Usuario Email</label>
                <input type="email" class="form-control" name="email">
							</div>
						</div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Senha</label>
                <input type="password" class="form-control" name="senha">
							</div>
						</div>
				</div>
			</div>
		</div>
    <button type="submit" class="btn btn-primary pull-right">Criar usuario</button>
</form>