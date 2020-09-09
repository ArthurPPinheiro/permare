<?php
    $ids = explode('-',$_GET['task_ids']);
    foreach ($ids as $key => $id) {
        $task = $model->row('SELECT * FROM todo WHERE task_id = "'.$id.'"');
        $model->query('DELETE FROM todo WHERE task_id = "'.$id.'"');
    }
    header('Location:'.$base.'todo');
?>