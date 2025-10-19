$(document).ready(function() {
    $.extend( $.fn.dataTable.ext.type.order, {
        "custom-text-pre": function ( data ) {
            
            let rawData = String(data).replace( /(<([^>]+)>)/ig, '' ); 
            
            if (rawData === null || rawData === undefined || rawData.trim() === '') {
                return 'zzzzzzzzzzzzzz'; 
            }
            
            let cleaned = rawData
                .normalize("NFD").replace(/[\u0300-\u036f]/g, "") 
                .toLowerCase()
                
                .replace(/^["'.,\s]+/, '')
                .replace(/^(\d+)/, 'z$1'); 

            return cleaned;
        }
    });

    $('#tabela_fichamento').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/2.0.0/i18n/pt-BR.json"
        },
          stateSave: true,
        scrollY: "400px", 
        scrollCollapse: true,
        paging: false, 
        
        "columnDefs": [
            {
                "orderable": false,
                "targets": 0
            },
           
            {
                "type": "num", 
                "targets": 3
            },

            {
                "type": "custom-text", 
                "targets": [1, 2, 4, 5, 6, 7, 8, 9, 10]
            }
        ]
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