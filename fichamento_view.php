<?php 
// O bloco PHP de lógica e atribuição permanece o mesmo, mas pode ser simplificado 
// usando a técnica 'extract' ensinada anteriormente (mesmo que não queira MVC, 
// o 'extract' evita 50 linhas de código repetido e melhora a legibilidade do topo).

include_once 'fichamento_crud.php';

$registro = null;

if(isset($_GET['fichamento_id'])){
    $fichamento_id = (int)$_GET['fichamento_id'];
    $registro = recuperar_fichamento_por_id($fichamento_id);
}

if($registro){
    extract($registro);
    // Formatação da data (Se você tiver a função 'converter_data_brasil' no seu util.php, inclua-o e use-o)
    // Se não, o formato YYYY-MM-DD é o padrão do HTML.
} else {
    $fichamento_id = (int)($_GET['fichamento_id'] ?? 0);
    $titulo = "Registro Não Encontrado";
    $assunto = $fichamento_texto = $responsavel = $acervo = $fonte_tipo = $fonte_data = $dominio = $link = $imagem_path = "";
}

$imagem_path = $registro['imagem_path'] ?? ''; 
$extensao = strtolower(pathinfo($imagem_path, PATHINFO_EXTENSION)); 
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?php echo $titulo ?? 'Visualizar Fichamento'; ?></title>
    
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
.custom-modal .modal-dialog {
    max-width: 90%; /* Aumentado um pouco o tamanho */
}
.data-label {
    font-weight: 600; /* Mais espesso */
    color: #495057; /* Cor de texto padrão, ligeiramente escuro */
    margin-bottom: 0.2rem;
    display: block;
}
.data-value {
    background-color: #f8f9fa; /* Fundo leve para o valor */
    padding: 0.5rem;
    border-radius: 0.3rem;
    margin-bottom: 0.8rem;
    word-wrap: break-word; /* Garante que textos longos quebrem */
}
.badge-tag {
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
    font-size: 0.9em;
}

</style>
</head>
<body>

    <button type="button" class="btn btn-outline-primary float-end" data-bs-toggle="modal" 
        data-bs-target="#fichamento_view_modal" id="visualizar_fichamento" style="display: none;"> View <i class="bi bi-plus"></i>
    </button>
    
    <div class="modal fade custom-modal" id="fichamento_view_modal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h2 class="modal-title fs-5" id="viewLabel"><?php echo $titulo ?? 'Título Desconhecido'; ?></h2>
                <a href="tabela.php" type="button" class="btn-close btn-close-white" aria-label="Close"></a>
            </div>               
            <div class="modal-body">
                <input type="hidden" id="fichamento_id" name="fichamento_id" value="<?php echo $fichamento_id ?? 0; ?>">

                <div class="card mb-3 border-secondary">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Assunto</h4>
                        <p class="data-value"><?php echo $assunto ?? 'N/A'; ?></p>

                        <h4 class="card-title text-primary mt-4">Fichamento (Texto)</h4>
                        <div class="data-value text-break" style="white-space: pre-wrap;"><?php echo $fichamento_texto ?? 'N/A'; ?></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 text-dark">Informações de Responsabilidade</h5>
                            </div>
                            <div class="card-body">
                                <dl class="row mb-0">
                                    <dt class="col-sm-3 data-label">Responsável:</dt>
                                    <dd class="col-sm-9"><?php echo $responsavel ?? 'N/A'; ?></dd>

                                    <dt class="col-sm-3 data-label">Acervo:</dt>
                                    <dd class="col-sm-9"><?php echo $acervo ?? 'N/A'; ?></dd>
                                </dl>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 text-dark">Dados da Fonte</h5>
                            </div>
                            <div class="card-body">
                                <dl class="row mb-0">
                                    <dt class="col-sm-3 data-label">Tipo:</dt>
                                    <dd class="col-sm-9"><?php echo $fonte_tipo ?? 'N/A'; ?></dd>

                                    <dt class="col-sm-3 data-label">Data:</dt>
                                    <dd class="col-sm-9"><?php echo $fonte_data ?? 'N/A'; ?></dd>

                                    <dt class="col-sm-3 data-label">Domínio:</dt>
                                    <dd class="col-sm-9"><?php echo $dominio ?? 'N/A'; ?></dd>

                                    <dt class="col-sm-3 data-label">Página:</dt>
                                    <dd class="col-sm-9"><?php echo $pagina ?? 'N/A'; ?></dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 text-dark">Categorias</h5>
                            </div>
                            <div class="card-body">
                                <dl class="row mb-0">
                                    <dt class="col-sm-3 data-label">Categoria 1:</dt>
                                    <dd class="col-sm-9"><?php echo $categoria_1 ?? ''; ?> <span class="badge text-bg-info badge-tag"><?php echo $categoria_sub ?? ''; ?></span> <span class="badge text-bg-info badge-tag"><?php echo $categoria_sub_sub ?? ''; ?></span></dd>

                                    <dt class="col-sm-3 data-label">Categoria 2:</dt>
                                    <dd class="col-sm-9"><?php echo $categoria_2 ?? ''; ?> <span class="badge text-bg-secondary badge-tag"><?php echo $categoria_sub_2 ?? ''; ?></span></dd>

                                    <dt class="col-sm-3 data-label">Categoria 3:</dt>
                                    <dd class="col-sm-9"><?php echo $categoria_3 ?? ''; ?> <span class="badge text-bg-secondary badge-tag"><?php echo $categoria_sub_3 ?? ''; ?></span></dd>
                                </dl>
                            </div>
                        </div>
                        
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 text-dark">Nomes Associados</h5>
                            </div>
                            <div class="card-body">
                                <span class="badge text-bg-success badge-tag"><?php echo $nome_1 ?? 'N/A'; ?></span>
                                <span class="badge text-bg-success badge-tag"><?php echo $nome_2 ?? ''; ?></span>
                                <span class="badge text-bg-success badge-tag"><?php echo $nome_3 ?? ''; ?></span>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0 text-dark">Palavras-Chave</h5>
                            </div>
                            <div class="card-body">
                                <span class="badge text-bg-warning badge-tag"><?php echo $palavra_chave_1 ?? 'N/A'; ?></span>
                                <span class="badge text-bg-warning badge-tag"><?php echo $palavra_chave_2 ?? ''; ?></span>
                                <span class="badge text-bg-warning badge-tag"><?php echo $palavra_chave_3 ?? ''; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-2 data-label">Observação:</dt>
                            <dd class="col-sm-10"><?php echo $observacao ?? 'N/A'; ?></dd>
                            
                            <dt class="col-sm-2 data-label">Link:</dt>
                            <dd class="col-sm-10">
                                <?php if (!empty($link)): ?>
                                    <a href="<?php echo $link; ?>" target="_blank"><?php echo $link; ?> <i class="bi bi-box-arrow-up-right"></i></a>
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </dd>
                        </dl>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="tabela.php" type="button" class="btn btn-outline-danger">Fechar <i class="bi bi-x-circle"></i></a>
                <?php if (!empty($imagem_path)): ?>
                    <a target="_blank" href="<?php echo $imagem_path; ?>" type="button" class="btn btn-outline-dark">Visualizar 
                    <?php if($extensao == 'pdf'): echo '<i class="bi bi-filetype-pdf"></i>'; ?>
                    <?php elseif(in_array($extensao, ['jpg', 'png', 'jpeg'])): echo '<i class="bi bi-file-earmark-image"></i>'; ?>
                    <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>  
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
 $(document).ready(function(){
        $("#visualizar_fichamento").click();
    });
</script>

</body>
</html>