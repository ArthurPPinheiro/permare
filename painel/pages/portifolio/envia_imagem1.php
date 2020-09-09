<?php
// include 'includes/config.php';
$destino = $path.'assets/images/temp/';

/* formatos de imagem permitidos */
$permitidos = array(".jpg",".jpeg",".gif",".png");

if(isset($_POST)){
    $nome_imagem    = $_FILES['file']['name'];
    $tamanho_imagem = $_FILES['file']['size'];

    /* pega a extensão do arquivo */
    $ext = strtolower(strrchr($nome_imagem,"."));

    /*  verifica se a extensão está entre as extensões permitidas */
    if(in_array($ext,$permitidos)){
    
            $nome_atual = md5(uniqid(time())).$ext;
            //nome que dará a imagem
            $tmp = $_FILES['imagem']['tmp_name'];
            //caminho temporário da imagem

            /* se enviar a foto, insere o nome da foto no banco de dados */
            if(move_uploaded_file($tmp,$destino.$nome_atual)){
                
                echo "<img src='fotos/".$nome_atual."'id='previsualizar'>"; //imprime a foto na tela
            }else{
                echo 'Falha ao enviar';
            }
    }else{
        echo "Somente são aceitos arquivos do tipo Imagem";
    }
}else{
    echo "Selecione uma imagem";
    exit;
}
?>