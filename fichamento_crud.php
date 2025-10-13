<?php 
include_once 'util.php';

function listar_fichamento(){
    try{
        $conexao = criar_conexao();
        $query_select = "SELECT * FROM fichamento;";
        $result = $conexao->prepare($query_select);
        $result->execute();
        $conexao = fechar_conexao();

        return $result->fetchAll();

    }catch(PDOException $erro){
        criar_arquivo_erro($erro);
    }
}

function recuperar_fichamento_por_id($fichamento_id){
    try{
        $conexao = criar_conexao();
        $query_select_id = "SELECT * FROM fichamento WHERE fichamento_id = :fichamento_id";
        $result = $conexao->prepare($query_select_id);
        $result->bindValue(':fichamento_id', $fichamento_id);
        $result->execute();
        $conexao = fechar_conexao();

        return $result->fetch();
    }catch(PDOException $erro){
        criar_arquivo_erro($erro);
    }
}



