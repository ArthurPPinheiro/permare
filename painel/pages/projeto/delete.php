<?php
    $ids = explode('-',$_GET['projeto_ids']);
    foreach ($ids as $key => $id) {
        $projeto = $model->row('SELECT * FROM projetos WHERE projeto_id = "'.$id.'"');
        $model->query('DELETE FROM projetos WHERE projeto_id = "'.$id.'"');
    }
    header('Location:'.$base.'projeto');
?>
