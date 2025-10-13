
function expandAll() {
    const columns = document.querySelectorAll('.apresentacao-col');
    columns.forEach(column => {
        column.querySelector('p').classList.add('expanded'); 
    });

    const allButton = document.querySelector('.expand-all-btn');
    allButton.textContent = 'Ler menos'; 
    allButton.setAttribute('onclick', 'collapseAll()'); 
}

function collapseAll() {
    const columns = document.querySelectorAll('.apresentacao-col');
    columns.forEach(column => {
        column.querySelector('p').classList.remove('expanded'); 
    });

    const allButton = document.querySelector('.expand-all-btn');
    allButton.textContent = 'Ler mais'; 
    allButton.setAttribute('onclick', 'expandAll()'); 
}