<?php
    $usuario = $model->row('SELECT * FROM usuarios WHERE usuario_id = "'.$_GET['usuario_id'].'"');
    if(count($_POST) > 0){
        $edit = new stdClass();
        $edit->usuario_email = $_POST['email'];
		    $edit->usuario_senha = md5($_POST['senha']);
        $model->update('usuarios', $edit, 'usuario_id = "'.$_GET['usuario_id'].'"');
        header('Location:'.$base.'usuarios');
        die();
     }
?>
<form method="POST">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Editar Usuario</h4>
          <p class="card-category">Edite as informações do usuario</p>
        </div>
        <div class="card-body">
          <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Usuario Email</label>
                <input type="email" class="form-control" value="<?php echo $usuario->usuario_email; ?>" name="email">
							</div>
						</div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Senha</label>
                <input type="password" class="form-control" value="<?php echo $usuario->usuario_senha; ?>" name="senha">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary pull-right">Salvar</button>
</form>