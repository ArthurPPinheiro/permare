<?php
    $ids = explode('-',$_GET['foto_ids']);
    foreach ($ids as $key => $id) {
        $task = $model->row('SELECT * FROM portifolio WHERE foto_id = "'.$id.'"');
        $model->query('DELETE FROM portifolio WHERE foto_id = "'.$id.'"');
    }
    header('Location:'.$base.'portifolio');
?>
