    const adicionarCampo = document.getElementById('adicionarCampo'); // Selecionando o campo de entrada do adicionar input
    const adicionarCampo2 = document.getElementById('adicionarCampo2'); // Selecionando o campo de entrada do adicionar input2
    const inputslistaexperiencia = document.getElementById('inputs-lista-experiencia'); // Selecionando o campo  de entrada do id da div
    const inputscursoss = document.getElementById('inputs-cursoss'); // Selecionando o campo de entrada do id da div
    
   
    adicionarCampo.addEventListener('click', () => {
        const novoInput = document.createElement('input');
        novoInput.type = 'text';
        novoInput.placeholder = 'NOVA INFORMAÇÃO';
        novoInput.className = 'input-novo';
        novoInput.name = 'inputcampo-${campoexperiencia}';
        inputslistaexperiencia.insertBefore(novoInput, adicionarCampo.nextSibling);
        inputslistaexperiencia.insertBefore(document.createElement('br'), adicionarCampo.nextSibling);
});


    adicionarCampo2.addEventListener('click', () => {
        const novoInput = document.createElement('input');
        novoInput.type = 'text';
        novoInput.placeholder = 'NOVA INFORMAÇÃO';
        novoInput.className = 'input-novo2';
        novoInput.name = 'inputcursos-${campocursos}';
        inputscursoss.insertBefore(novoInput, adicionarCampo2.nextSibling);
        inputscursoss.insertBefore(document.createElement('br'), adicionarCampo2.nextSibling);
});
   