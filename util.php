<?php
 include_once 'conexao.php';


	function armazenar_arquivo($arquivo){
        $conexao = criar_conexao();
    
        $nome_arquivo = $arquivo["name"];
		$tamanho_arquivo = $arquivo["size"];
        $novoNome_arquivo = uniqid();
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));
        $pasta = "arquivos/";

        if (!in_array($extensao, ["jpg", "png", "pdf", "jpeg"])) {
            echo  "<script>alert('Formatao do arquivo inválido.');</script>";  
        }else{
            $path = $pasta . $novoNome_arquivo . "." . $extensao;
        }

        if (move_uploaded_file($arquivo['tmp_name'], $path)){
           // $query_file = "INSERT INTO fichamento(imagem_path) VALUES('$path');";
           // $result_file = $conexao->query($query_file);
            
            return $path;                                
        }else {
            echo  "<script>alert('Erro ao mover arquivo');</script>";  
        }

        $conexao = fechar_conexao();
    }

	function criar_arquivo_erro($erro){
        echo "<script>alert('Foi gerada uma exceção.');</script>"; 
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('d/m/Y H:i:s');
        $nome_arquivo = "erro-". date('d_m_Y-H_i_s').".txt";
        $arquivo = fopen($nome_arquivo,'a+');
        $texto = "Data: {$data} \n";
        $texto = $texto . "\t Arquivo: {$erro->getFile()} - Linha: {$erro->getLine()} \n"; 
        $texto = $texto . "\t Erro: {$erro->getMessage()} \n";
        fwrite($arquivo, $texto);
        fclose($arquivo);
    } 

    function converter_data_brasil($data){
		$data_formatada = "";
		if($data){
			$data_tempo = new DateTime($data);
			$data_formatada = $data_tempo->format('d-m-Y');
		}        
		return $data_formatada;
    }	

  