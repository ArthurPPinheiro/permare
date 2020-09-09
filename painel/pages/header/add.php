<?php
    if(count($_POST) > 0){
        $insere = new stdClass();
        $insere->header_foto = $_POST['foto'];
        $model->insert('header_inicio',$insere);
        rename($path.'assets/images/temp/'.$_POST['foto'],$path.'assets/images/'.$_POST['foto']);
        header('Location:'.$base.'header');
    }
?>

<form id="Foto" method="POST" action="<?php echo $base; ?>pages/envia_imagem.php" enctype="multipart/form-data">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Adicionar Foto</h4>
          <p class="card-category">Adiocione uma foto no inicio</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">                  
                <label class="bmd-label-floating">Foto</label>
                <input type="file" class="form-control" name="file" required>
                <div class="previa"></div>
			</div>
            </div>
</form> 
<form method="POST" action="add"> 
                  <input type="hidden" name="foto">
				</div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
		</div>
		
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