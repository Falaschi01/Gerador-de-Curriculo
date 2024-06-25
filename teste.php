<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $nascimento = htmlspecialchars($_POST['nascimento']);
    $escolaridade = htmlspecialchars($_POST['escolaridade']);
    $sexo = htmlspecialchars($_POST['sexo']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $telefone2 = htmlspecialchars($_POST['telefone2']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $estado = htmlspecialchars($_POST['estado']);
    $cidade = htmlspecialchars($_POST['cidade']);
    $cep = htmlspecialchars($_POST['cep']);
    $formacao1 = htmlspecialchars($_POST['input-formacao1']);
    $formacao2 = htmlspecialchars($_POST['input-formacao2']);
    $formacao3 = htmlspecialchars($_POST['input-formacao3']);
    $objetivo = htmlspecialchars($_POST['textarea-objetivo']);
    $curso1 = htmlspecialchars($_POST['input-cursos1']);
    $curso2 = htmlspecialchars($_POST['input-cursos2']);
    $curso3 = htmlspecialchars($_POST['input-cursos3']);
    $curso4 = htmlspecialchars($_POST['input-cursos4']);
    $experiencia1 = htmlspecialchars($_POST['input-experiencia1']);
    $experiencia2 = htmlspecialchars($_POST['input-experiencia2']);
    $experiencia3 = htmlspecialchars($_POST['input-experiencia3']);
    $experiencia4 = htmlspecialchars($_POST['input-experiencia4']);
    $experienciasDinamicas = [];
    $cursosDinamicos = [];
    
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'inputcampo-') === 0) {
                $experienciasDinamicas[] = htmlspecialchars($value);           

        foreach ($experienciasDinamicas as $exp); {

}}

    
    foreach ($_POST as $key => $value) {
            if (strpos($key, 'inputcursos-') === 0) {
                $cursosDinamicos[] = htmlspecialchars($value);

            foreach ($cursosDinamicos as $curso); {
        
}}}}}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dados Inseridos</title>
    <link rel="stylesheet" href="php.css" />
</head>
<body>
    <main id="container">
        <div id="borda-esquerda"></div>
        <div id="borda-conteudo"></div>
        <div id="borda-direita"></div>
        <div id="conteudo-dados-pessoais">
            <section>   
                    <img id="foto" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Free-Image.png" alt="foto de perfil">
                    <p id="nome1"> <?= $nome ?></p>
                
                <div id="bordinha"> </div>
                    
                <h2 id="dados1">Dados pessoais</h2> 

                    <p id="nascimento2"><strong>Nascimento:</strong> <?= $nascimento ?></p>
                    <p id="escolaridade2"><strong>Escolaridade:</strong> <?= $escolaridade ?></p>
                    <p id="sexo2"><strong>Sexo:</strong> <?= $sexo ?></p>
                    <p id="email2"> <strong>E-mail:</strong> <?= $email ?></p>
                    <p id="telefone2"><strong>Telefone:</strong> <?= $telefone ?></p>
                    <p id="telefone3"><strong>Telefone (2):</strong> <?= $telefone2 ?></p>
                    <p id="endereco2"><strong>Endereço:</strong> <?= $endereco ?></p>
                    <p id="estado2"><strong>Estado:</strong> <?= $estado ?></p>
                    <p id="cidade2"><strong>Cidade:</strong> <?= $cidade ?></p>
                    <p id="cep2"><strong>CEP:</strong> <?= $cep ?></p>
             
                <div id="bordinha2"> </div>
                
                <h2 id="experiencia-profissionais3">Experiência Profissionais</h2>
                    <p id="input-experiencia3"><?= $experiencia1 ?></p>
                    <p id="input-experiencia4"><?= $experiencia2 ?></p>
                    <p id="input-experiencia5"><?= $experiencia3 ?></p>
                    <p id="input-experiencia6"><?= $experiencia4 ?></p> 
                    <p class="novaexperiencias"><?= $exp ?></p>
               
                <h2 id="cursos2">Cursos e Qualificações</h2>
                    
                    <p id="input-cursos3"><?= $curso1 ?></p>
                    <p id="input-cursos4"><?= $curso2 ?></p>
                    <p id="input-cursos5"><?= $curso3 ?></p>
                    <p id="input-cursos6"><?= $curso4 ?></p>
                    <p class="novocursos"><?= $curso ?></p>
                   
               
                <div id="bordinha3"> </div>      
                        
                    <h2 id="objetivo2">Objetivo</H2>
                    <p id="text" ><?= $objetivo ?></p>

                <div id="bordinha4"> </div>
                    
                    <h2 id="formacao-academica2">Formação Acadêmica</h2>
                    <p id="input-formacao3"><?= $formacao1 ?></p>
                    <p id="input-formacao4"><?= $formacao2 ?></p>
                    <p id="input-formacao5"><?= $formacao3 ?></p>

            
                 <button id="imprimir" onclick="imprimirPagina()">IMPRIMIR</button>
               
            </section>
        </main>
</body>
        <script>
            function imprimirPagina() {
            window.print();
}
     </script>   
</html>