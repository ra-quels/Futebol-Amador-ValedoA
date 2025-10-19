<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIC Junior</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/tabela.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
<style>
    .fichamento, .assunto, .titulo{
    max-width: 178px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
}

.centralizar{
    text-align: center;
}
</style>

</head>
<body>
 
<?php
    include_once 'header.php';
    include_once 'fichamento_crud.php';
    $registros = listar_fichamento();

?>
<div class="container mt-4">  

<div class="row">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-body">
                <div class="table-responsive">
                    <table id="tabela_fichamento" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th><div class="centralizar">Título </div></th>
						        <th><div class="centralizar">Assunto</div></th>
                                <th><div class="centralizar">Data</div></th>
						        <th><div class="centralizar">1a. Categoria</div></th>
                                <th><div class="centralizar">Sub-categoria</div></th>
                                <th><div class="centralizar">2a. Categoria</div></th>
                                <th><div class="centralizar">Sub-categoria</div></th>
                                <th><div class="centralizar">3a. Categoria</div></th>
                                <th><div class="centralizar">Sub-categoria</div></th>
                                <th><div class="centralizar">Fichamento </div></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                                if($registros){
                                    foreach($registros as $registro){
                                        $data_iso_sort = str_replace('-', '', $registro['fonte_data']);
                                        echo "<tr>";
                                        echo "<td class='p-2'>";       
                                        echo "<a href='fichamento_view.php?fichamento_id={$registro['fichamento_id']}' type='button' class='btn btn-outline-info btn-sm'><i class='bi bi-eye-fill'></i></a>";      
                                        echo "</td>";
                                         echo "<td><div class='titulo centralizar' title='{$registro['titulo']}'>{$registro['titulo']}</div></td>";      
                                         echo "<td><div class='assunto centralizar' title='{$registro['assunto']}'>{$registro['assunto']}</div></td>";
                                        if ($registro['fonte_data'] === '0000-00-00' || empty($registro['fonte_data'])) {
                                            $data_brasil = 's.d.';
                                            
                                            $data_iso_sort = '99999999'; 
                                            
                                        } else {
                                            
                                            $data_brasil = date("d/m/Y", strtotime($registro['fonte_data']));
                                            $data_iso_sort = str_replace('-', '', $registro['fonte_data']); 
                                        }echo "<td><div class='centralizar'>{$registro['categoria_1']}</div></td>";     
                                         echo "<td><div class='centralizar'>{$registro['categoria_sub']}</div></td>";       
                                         echo "<td><div class='centralizar'>{$registro['categoria_2']}</div></td>";      
                                         echo "<td><div class='centralizar'>{$registro['categoria_sub_2']}</div></td>";      
                                         echo "<td><div class='centralizar'>{$registro['categoria_3']}</div></td>";      
                                         echo "<td><div class='centralizar'>{$registro['categoria_sub_3']}</div></td>";      
                                         echo "<td ><div class='fichamento centralizar' title='{$registro['fichamento_texto']}'>{$registro['fichamento_texto']}</div></td>";            
                                         echo "</tr>";      
                                    }
                                }
                            
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include_once 'footer.php' ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="assets/js/tabela.js"></script>
</body>
</html>