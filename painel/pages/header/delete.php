<?php
    $ids = explode('-',$_GET['header_ids']);
    foreach ($ids as $key => $id) {
        $header = $model->row('SELECT * FROM header_inicio WHERE header_id = "'.$id.'"');
        $model->query('DELETE FROM header_inicio WHERE header_id = "'.$id.'"');
    }
    header('Location:'.$base.'header');
?>
