<?php
    $ids = explode('-',$_GET['usuario_ids']);
    foreach ($ids as $key => $id) {
        $task = $model->row('SELECT * FROM usuarios WHERE usuario_id = "'.$id.'"');
        $model->query('DELETE FROM usuarios WHERE usuario_id = "'.$id.'"');
    }
    header('Location:'.$base.'usuarios');
?>