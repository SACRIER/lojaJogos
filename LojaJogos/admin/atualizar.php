<?php
include("conect.php");

$id = $_GET["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$imagem = $_FILES["imagem"];
$data_lancamento = $_POST["data_lancamento"];

$tamanhoPermitido = 1024 * 1024 * 1024;
$dir = "JogosImg/";
     
        // verifica se arquivo foi enviado e sem erros
if($imagem['error'] == UPLOAD_ERR_OK){
            // pego a extensão do arquivo
    $extensao = ltrim( substr($imagem['name'], strrpos($imagem['name'], '.' ) ), '.' );
            // valida a extensão - Qualquer extensão é válida!
    if(in_array( $extensao, array("jpg","jpeg","png"))){
                // verifica tamanho do arquivo
        if ($imagem['size'] > $tamanhoPermitido){
        echo "Erro! O arquivo enviado é muito grande, envie arquivos de até 134MB";
        $class = "alert-warning";
    }else{
                    // atribui novo nome ao arquivo
        $novonome  = time().".".$extensao;
                    // faz o upload
        $envio = move_uploaded_file($imagem["tmp_name"], "$dir/". $imagem["name"]);
        $caminho = "$dir/".$imagem["name"]."";
        }
    }
}
    
    $sql = "UPDATE jogo SET nome='$nome',data_lanc='$data_lancamento',descricao='$descricao',genero='$categoria', preco='$preco',imagem='$caminho' WHERE id = $id";
    if(mysqli_query($conn, $sql)){
        echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=atualizarjogo.php?id=$id'>
                <meta charset='UTF-8'>
                    <script type=\"text/javascript\">
                        alert(\"Alterado com sucesso!\");
                    </script>
                ";
    }else{
        echo mysqli_error($conn);
    }


?>