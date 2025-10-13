<?php 
include_once 'fichamento_crud.php';
$fichamento_id = 0;
$responsavel = "";
$acervo = "";
$fonte_tipo = "";
$fonte_data = "";
$dominio = "";
$titulo = "";
$assunto = "";
$categoria_1 = "";
$categoria_sub = "";
$categoria_sub_sub = "";
$categoria_2 = "";
$categoria_sub_2 = "";
$categoria_3 = "";
$categoria_sub_3 = "";
$nome_1 = "";
$nome_2 = "";
$nome_3 = "";
$palavra_chave_1 = "";
$palavra_chave_2 = "";
$palavra_chave_3 = "";
$fichamento_texto = "";
$observacao = "";
$link = "";
$imagem_path = "";

if(isset($_GET['fichamento_id'])){
    $fichamento_id = $_GET['fichamento_id'];
    $registro = recuperar_fichamento_por_id($fichamento_id);
    $responsavel = $registro['responsavel'];
    $acervo = $registro['acervo'];
    $fonte_tipo = $registro['fonte_tipo'];
    $fonte_data = $registro['fonte_data'];
    $dominio = $registro['dominio'];
    $titulo = $registro['titulo'];
    $assunto = $registro['assunto'];
    $categoria_1 = $registro['categoria_1'];
    $categoria_sub = $registro['categoria_sub'];
    $categoria_sub_sub = $registro['categoria_sub_sub'];
    $categoria_2 = $registro['categoria_2'];
    $categoria_sub_2 = $registro['categoria_sub_2'];
    $categoria_3 = $registro['categoria_3'];
    $categoria_sub_3 = $registro['categoria_sub_3'];
    $nome_1 = $registro['nome_1'];
    $nome_2 = $registro['nome_2'];
    $nome_3 = $registro['nome_3'];
    $palavra_chave_1 = $registro['palavra_chave_1'];
    $palavra_chave_2 = $registro['palavra_chave_2'];
    $palavra_chave_3 = $registro['palavra_chave_3'];
    $fichamento_texto = $registro['fichamento_texto'];
    $observacao = $registro['observacao'];
    $link = $registro['link'];
    $imagem_path = $registro['imagem_path'];

}
$extensao = strtolower(pathinfo($imagem_path, PATHINFO_EXTENSION)); 
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
.custom-modal .modal-dialog {
    max-width: 80%;
}

</style>
</head>
<body>

<button type="button" class="btn btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#fichamento_view_modal" id="visualizar_fichamento" style="display: none;">
                           View <i class="bi bi-plus"></i>
                        </button>
                        <div class="modal fade custom-modal" id="fichamento_view_modal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="viewLabel"><?php echo "$titulo"?></h2>
            <a href="tabela.php" type="button" class="btn-close" aria-label="Close"></a>
        </div>               
        <div class="modal-body">
        <div class="row form-group mt-1">

<input type="hidden" id="fichamento_id" name="fichamento_id" value="<?php echo $fichamento_id; ?>">
<div class="row form-group mt-1">
            <div class="col-md-12">
                            <label for="assunto">Assunto</label>
                            <input type="text" class="form-control" id="assunto" name="assunto" value="<?php echo $assunto; ?>" readonly>
                        </div>
            </div>
            <div class="row form-group mt-1">
            <div class="col-md-12">
                            <label for="fichamento_texto">Fichamento</label>
                        
                            <textarea readonly name="fichamento_texto" class="form-control" id="fichamento_texto" cols="30" rows="10"><?php echo $fichamento_texto; ?></textarea>
                        </div>
            </div>

<div class="row form-group mt-1">
<div class="col-md-8">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control" id="responsavel" name="responsavel"
        value="<?php echo $responsavel; ?>" readonly>
</div>
<div class="col-md-4">
    <label for="acervo">Acervo</label>
    <input type="text" class="form-control" id="acervo" name="acervo" value="<?php echo $acervo; ?>" readonly>
</div>
<div>
<div class="row form-group mt-1">
                <div class="col-md-3">
                    <label for="fonte_tipo">Tipo de Fonte</label>
                    <input type="" class="form-control" id="fonte_tipo" name="fonte_tipo" value="<?php echo $fonte_tipo; ?>" readonly>
                </div>
                <div class="col-md-3">
                    <label for="fonte_data">Data da Fonte</label>
                    <input type="date" class="form-control" id="fonte_data" name="fonte_data" value="<?php echo $fonte_data; ?>" readonly>
                </div>
                <div class="col-md-3">
                    <label for="dominio">Domínio</label>
                    <input type="text" class="form-control" id="dominio" name="dominio" value="<?php echo $dominio; ?>" readonly>
                </div>
                <div class="col-md-3">
                    <label for="pagina">Página</label>
                    <input type="number" class="form-control" id="pagina" name="pagina" value="<?php echo $fonte_data; ?>" readonly>
                </div>
            </div>

            <div class="row form-group mt-1">
                        <div class="col-md-4">                       
                            <label for="categoria_1">Categoria 1</label>
                            <input type="text" class="form-control" id="categoria_1" name="categoria_1" value="<?php echo $categoria_1; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="categoria_sub">Sub Categoria 1</label>
                            <input type="text" class="form-control" id="categoria_sub" name="categoria_sub" value="<?php echo $categoria_sub; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="categoria_sub_sub">Sub Categoria 2</label>
                            <input type="text" class="form-control" id="categoria_sub_sub" name="categoria_sub_sub" value="<?php echo $categoria_sub_sub; ?>" readonly>
                        </div>
            </div>

            <div class="row form-group mt-1">
                        <div class="col-md-6">
                            <label for="categoria_2">Categoria 2</label>
                            <input type="text" class="form-control" id="categoria_2" name="categoria_2" value="<?php echo $categoria_2; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="categoria_sub_2">Sub-Categoria 2</label>
                            <input type="text" class="form-control" id="categoria_sub_2" name="categoria_sub_2" value="<?php echo $categoria_sub_2; ?>" readonly>
                        </div>
            </div>
            <div class="row form-group mt-1">
                        <div class="col-md-6">
                            <label for="categoria_3">Categoria 3</label>
                            <input type="text" class="form-control" id="categoria_3" name="categoria_3" value="<?php echo $categoria_3; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="categoria_sub_3">Sub-Categoria 3</label>
                            <input type="text" class="form-control" id="categoria_sub_3" name="categoria_sub_3" value="<?php echo $categoria_sub_3; ?>" readonly>
                        </div>
            </div>

            <div class="row form-group mt-1">
            <div class="col-md-4">
                            <label for="nome_1">Nome 1</label>
                            <input type="text" class="form-control" id="nome_1" name="nome_1" value="<?php echo $nome_1; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="nome_2">Nome 2</label>
                            <input type="text" class="form-control" id="nome_2" name="nome_2" value="<?php echo $nome_2; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="nome_3">Nome 3</label>
                            <input type="text" class="form-control" id="nome_3" name="nome_3" value="<?php echo $nome_3; ?>" readonly>
                        </div>
            </div>

            <div class="row form-group mt-1">
            <div class="col-md-4">
                            <label for="palavra_chave_1">Palavra-Chave 1</label>
                            <input type="text" class="form-control" id="palavra_chave_1" name="palavra_chave_1" value="<?php echo $palavra_chave_1; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="palavra_chave_2">Palavra-Chave 2</label>
                            <input type="text" class="form-control" id="palavra_chave_2" name="palavra_chave_2" value="<?php echo $palavra_chave_2; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="palavra_chave_3">Palavra-Chave 3</label>
                            <input type="text" class="form-control" id="palavra_chave_3" name="palavra_chave_3" value="<?php echo $palavra_chave_3; ?>" readonly>
                        </div>
            </div>


            <div class="row form-group mt-1 mb-2">
                        <div class="col-md-8">
                            <label for="observacao">Observação</label>
                            <input type="text" class="form-control" id="observacao" name="observacao" value="<?php echo $observacao; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link" value="<?php echo $link; ?>" readonly>
                        </div>
            </div>
            <div class="modal-footer">
                <a href="tabela.php" type="button" class="btn btn-outline-danger">Fechar <i class="bi bi-x-circle"></i></a>
                <a target="_blank" href="<?php echo $imagem_path; ?>" type="button" class="btn btn-outline-dark">Visualizar <?php if($extensao == 'pdf'){
                echo '<i class="bi bi-filetype-pdf"></i>';
                }else if($extensao == 'jpg'|| $extensao == 'png' || $extensao == 'jpeg'){
                    echo '<i class="bi bi-file-earmark-image"></i>';
                } ?></a>
            </div>
        </div>  
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
 $(document).ready(function(){
        // Quando a página é carregada, clicar automaticamente no botão de adicionar estudante
        $("#visualizar_fichamento").click();
    });
</script>


</body>
</html>