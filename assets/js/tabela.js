$(document).ready(function() {
    $('#tabela_fichamento').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/2.0.0/i18n/pt-BR.json"
        },
        scrollY: "400px", // Altura da área de rolagem
        scrollCollapse: true,
        paging: false // Desabilita a paginação  
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const fichamentos = document.querySelectorAll('.fichamento');
    const assuntos = document.querySelectorAll('.assunto')
    fichamentos.forEach(fichamento => {
        fichamento.addEventListener('click', function() {
            const textoCompleto = this.getAttribute('title');
            alert(textoCompleto); // Exibe o texto completo quando o usuário clicar na descrição truncada
        });
    });
    assuntos.forEach(assunto => {
        assunto.addEventListener('click', function() {
            const textoCompleto = this.getAttribute('title');
            alert(textoCompleto); // Exibe o texto completo quando o usuário clicar na descrição truncada
        });
    });
});