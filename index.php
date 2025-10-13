<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futebol no Vale do Aço</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php include_once 'header.php'; ?>

    <section class="apresentacao" id="apresentacao">
        <div class="card">
            <div class="card-body">
                <h1>Apresentação</h1>
                <p>Desde 2022, as professora Luiza Aguiar dos Anjos (Educação Física) e Júlia Ribeiro Junqueira (História), do Centro Federal de Educação Tecnológica de Minas Gerais (CEFET-MG), desenvolvem pesquisas no âmbito do Programa Institucional de Bolsa de Iniciação Científica Júnior (PIBIC-Jr), voltado para discentes do ensino técnico de nível médio do CEFET-MG. Tais pesquisas contaram (e contam) com financiamento do CEFET-MG e da Fundação de Amparo à Pesquisa do Estado de Minas Gerais (FAPEMIG) para as/os bolsistas. Neste sentido, este site tem por objetivo divulgar os resultados dessas pesquisas, disponibilizando também ao público não acadêmico informações e dados sobre a história do futebol no Vale do Aço.</p>
                <p>Abaixo, encontra-se uma sinta-se das pesquisas já desenvolvidas e as que estão em andamento:</p>
            </div>
        </div>

        <div class="row">
            <div class="apresentacao-col" id="col1">
                <h3> PIBIC-Jr | 2024-2025</h3>
                <p id="text1" class="apresentacao-text">
                <b>Título:</b> Da fábrica aos gramados: a influência da Usiminas no futebol da cidade de Ipatinga (MG)
                    </br> </br>
                    <b>Descrição:</b> Durante a ditadura civil-militar brasileira, vários estádios de futebol foram construídos por todas as
regiões do país. As obras faziam parte de um projeto de integração nacional que passava pelo
futebol. Uma das novas praças esportivas construídas no período foi o Estádio Municipal João
Lamego Netto, localizado no município de Ipatinga. Em pesquisa anterior, analisamos fontes
documentais, sobretudo registros de periódicos e de publicações no Diário Oficial do Município,
guiados pela hipótese de que a construção era parte do projeto nacional. Os dados encontrados,
contudo, indicam que o estádio foi uma iniciativa local, mas que devido às questões relacionadas à
falta de dinheiro para continuidade e finalização das obras e, também, à reordenação urbana da
cidade, protagonizada pelo Programa CURA, houve a disponibilização de recursos federais e
estaduais. Verificamos, ainda, que a primeira inauguração oficial, em 1982, entregou um estádio
incompleto, finalizado apenas em 1986.  
                </p>
            </div>
            <div class="apresentacao-col" id="col2">
                <h3>PIBIC-Jr | 2023-2024</h3>
                <p id="text2" class="apresentacao-text">
                    <b>Título:</b> Futebol & Política no Vale do Aço: a construção de um estádio e a reforma urbana na cidade de Ipatinga
                    </br> </br>
                    <b>Descrição:</b> Durante a ditadura civil-militar brasileira, vários estádios de futebol foram construídos por todas as
regiões do país. As obras faziam parte de um projeto de integração nacional que passava pelo
futebol. Uma das novas praças esportivas construídas no período foi o Estádio Municipal João
Lamego Netto, localizado no município de Ipatinga. Em pesquisa anterior, analisamos fontes
documentais, sobretudo registros de periódicos e de publicações no Diário Oficial do Município,
guiados pela hipótese de que a construção era parte do projeto nacional. Os dados encontrados,
contudo, indicam que o estádio foi uma iniciativa local, mas que devido às questões relacionadas à
falta de dinheiro para continuidade e finalização das obras e, também, à reordenação urbana da
cidade, protagonizada pelo Programa CURA, houve a disponibilização de recursos federais e
estaduais. Verificamos, ainda, que a primeira inauguração oficial, em 1982, entregou um estádio
incompleto, finalizado apenas em 1986.
                </p>

            </div>
            <div class="apresentacao-col" id="col3">
                <h3>PIBIC-Jr | 2022-2023</h3>
                <p id="text3" class="apresentacao-text">
                <b>Título:</b> Ipatingão: o nascimento de um estádio de futebol na Região Metropolitana do Vale do Aço no contexto da ditadura civil-militar
                    </br> </br>
                    <b>Descrição:</b> Em 1983, na cidade de Ipatinga, região do Vale do Aço, era inaugurado o Estádio Municipal Epaminondas Mendes Brito, popularmente chamado de Ipatingão. Tal equipamento esportivo pode ser visto como parte de um amplo conjunto de praças esportivas que foram inauguradas durante a ditadura civil-militar brasileira (1964-1985), sendo quatro deles em Minas Gerais. As obras faziam parte de um projeto de integração nacional que passava pelo futebol, processo que se inicia no período do Estado Novo (1937-1946), e alcança seu ápice sob o governo militar. Apesar da magnitude e da relevância política-econômica da região do Vale do Aço...
                </p>
            </div>
        </div>

        <div class="expand-all-btn-container">
            <button class="expand-all-btn" onclick="expandAll()">Ler mais</button>
        </div>
    </section>

   <?php  include_once 'footer.php' ?>

    <script src="assets/js/ler_mais.js"></script>
    <script src="assets/js/principal.js"></script>

</body>

</html>
