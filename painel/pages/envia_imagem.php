<?php
    include '../includes/config.php';
    if ($_FILES['file']) {

        $filename = date('YmdHisU').$_FILES['file']['name'];
        $filename = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $filename ) ); 
        $filename = str_replace(' ', '', $filename);

        $extensao = pathinfo ( $filename, PATHINFO_EXTENSION );
        $extensao = strtolower ( $extensao );

        $destino = $path.'assets/images/temp/';

        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

            move_uploaded_file($_FILES['file']['tmp_name'], $destino.$filename);
            
            chmod($destino.$filename, 0777);
                
            echo $filename;
            }
    }
?>
