<?php
    if(count($_POST) > 0){
        $insere = new stdClass();
        $insere->foto_categoria = $_POST['foto_categoria'];
        $insere->foto = $_POST['foto'];
        echo $path;  ?> <br><br> <?php

        var_dump($insere); ?> <br><br><br> <?php

        $model->insert('portifolio',$insere);
        rename($path.'assets/images/temp/'.$_POST['foto'],$path.'assets/images/'.$_POST['foto']);
        //header('Location:'.$base.'portifolio');
        }
?>

<form id="Foto" action="../pages/envia_imagem.php" method="post" enctype="multipart/form-data">
    <label>
        <p>Foto</p>
        <input type="file" name="file" required>
        <div class="previa"></div>
    </label>
</form>

<form method="POST" action="adicionar">
        <input type="hidden" name="foto">
    <label>
        <p>Categoria</p>
        <input type="text" name="foto_categoria" required>
    </label>
    <button type="submit">Salvar</button>
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