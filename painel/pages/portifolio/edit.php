<?php
    if(count($_POST) > 0){
      $insere = new stdClass();
      $insere->foto_categoria = $_POST['foto_categoria'];
      $insere->foto = $_POST['foto'];
      $insere->foto_grid = $_POST['foto_grid'];
      $model->insert('portifolio',$insere);
      rename($path.'assets/images/temp/'.$_POST['foto'],$path.'assets/images/'.$_POST['foto']);
      header('Location:'.$base.'portifolio');
    }

    $portifolio_item = $model->row('SELECT * FROM portifolio WHERE foto_id = "'.$GET['foto_id'].'"');

?>

<form id="Foto" method="POST" action="<?php echo $base; ?>pages/envia_imagem.php" enctype="multipart/form-data">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Adicionar Foto</h4>
          <p class="card-category">adicione foto no portifolio</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">                  
                <label class="bmd-label-floating">Foto</label>
                <input type="file" class="form-control" value="<?php echo $portifolio_item->foto; ?>" name="file" required>
                <div class="previa"></div>
			      </div>
          </div>
</form> 
<form method="POST" action="add"> 
            <div class="col-md-12">
              <div class="form-group">
                  <input type="hidden" name="foto">
                  <input type="hidden" name="foto_grid" value="<?php echo $randomGrid; ?>">
                  <label for="foto_categoria">Categoria</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" name="foto_categoria" id="exampleFormControlSelect1">
                    <option value="Porta-Pivotante" <?php echo $portifolio_item->foto_categoria == 'Porta-Pivotante' ? $portifolio_item->foto_categoria : ' ';  ?>>Porta Pivotante</option>
                    <option value="Porta-Externa">Porta Externa</option>
                    <option value="Porta-Interna">Porta Interna</option>
                    <option value="Janelao-de-Correr">Janelão de Correr</option>
                    <option value="Janelas-de-Correr">Janelas de Correr</option>
                    <option value="Janelas-Oscilo-Batente">Janelas Oscilo Batentes</option>
                    <option value="Janela-Maxim-Air">Janelas Maxim-Air</option>
                    <option value="Janelas-Giro">Janelas Giro</option>
                    <option value="Janelas-Giro-Duplo">Janelas Giro Duplo</option>
                  </select>
							</div>
						</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary pull-right">Salvar</button>
</form>

<script type="text/javascript">
    $(document).ready(function(){

        $('input[name="file"]').change(function(){
            $('#Foto').submit();
        })

        $('#Foto').ajaxForm({
            beforeSend: function() {
                $('.previa').html('Enviando...');

            },
            uploadProgress: function(event, position,total, percentComplete) {
                console.log(percentComplete);
                $('.previa').html('Enviado '+percentComplete+'%');
                
            },
            success: function () {

            },
            complete: function(retorno) {
                console.log(retorno.responseText);
                $('input[name="foto"]').val(retorno.responseText);
                $('.previa').html('<img width="100" src="../assets/images/temp/'+retorno.responseText+'">');
            }

        });
    })
</script>