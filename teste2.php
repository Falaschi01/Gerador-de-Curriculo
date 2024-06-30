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
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Currículo Gerado</title>
        <link rel="stylesheet" href="estilo2.css">
    </head>
<body>
      <main id="container">  
        <section>
            <!-- SEPARAÇÃO DE BORDA -->
        <div id="lateralesquerda">
            <!-- FOTO -->
            <img id="foto" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Free-Image.png" alt="foto">
            <!-- TITULO DE DADOS PESSOAIS -->
            <h1 id="titulopessoais"> DADOS PESSOAIS </h1>
            <!-- DADOS NASCIMENTO -->
            <p id="nascimento"> <?= $nascimento ?></p> 
            <img id="iconenascimento" src="https://em-content.zobj.net/source/telegram/386/calendar_1f4c5.webp">
            <!-- DADOS ESCOLARIDADE -->
            <p id="escolaridade"> <?= $escolaridade ?></p> 
            <img id="iconeescolaridade" src="https://em-content.zobj.net/source/google/387/school_1f3eb.png">
            <!-- DADOS SEXO -->
            <p id="sexo"> <?= $sexo ?></p> 
            <img id="iconesexo" src="https://cdn-icons-png.flaticon.com/512/505/505972.png">
            <!-- DADOS E-MAIL -->
             <p id="email"> <?= $email ?></p> 
            <img id="iconeemail" src="https://em-content.zobj.net/source/samsung/395/e-mail_1f4e7.png">
            <!-- DADOS TELEFONE -->
            <p id="telefone"> <?= $telefone ?></p> 
            <img id="iconetelefone" src="https://em-content.zobj.net/source/whatsapp/401/telephone-receiver_1f4de.png">
            <!-- DADOS TELEFONE RESERVA -->
            <p id="telefonereserva"> <?= $telefone2?></p> 
            <img id="iconetelefonereserva" src="https://em-content.zobj.net/source/whatsapp/401/telephone-receiver_1f4de.png">
            <!-- DADOS ENDEREÇO -->
            <p id="endereco"> <?= $endereco ?></p> 
            <img id="iconeendereco" src="https://static.vecteezy.com/system/resources/previews/027/179/393/non_2x/location-map-address-icon-symbol-free-png.png">
            <!-- DADOS ESTADO -->
            <p id="estado"> <?= $estado ?></p> 
            <img id="iconeestado" src="https://static.vecteezy.com/system/resources/previews/027/179/393/non_2x/location-map-address-icon-symbol-free-png.png">
            <!-- DADOS CIDADE -->
            <p id="cidade"> <?= $cidade?></p> 
            <img id="iconecidade" src="https://static.vecteezy.com/system/resources/previews/027/179/393/non_2x/location-map-address-icon-symbol-free-png.png">
            <!-- DADOS CEP -->
            <p id="cep"> <?= $cep ?></p> 
            <img id="iconecep" src="https://static.vecteezy.com/system/resources/previews/027/179/393/non_2x/location-map-address-icon-symbol-free-png.png">
            
            <!-- TITULO DE FORMAÇÃO ACADEMICA -->
            <h1 id="tituloformacao"> FORMAÇÃO ACADÊMICA </h1>
                        <!-- 1 -->
            <p id="formacao1"> <?= $formacao1?></p> 
                        <!-- 2 -->
            <p id="formacao2"> <?= $formacao2?></p> 
                        <!-- 3 -->
            <p id="formacao3"> <?= $formacao3?></p> 
        </div>
            
            <div id="meio">
                <!-- TITULO DE OBJETIVO -->
                <h1 id="tituloobjetivo">OBJETIVO</h1>
                <!-- QUEBRA LINHA DA TEXTAREA -->
                <div id="quebralinhaobjetivo">
                <!-- DADOS OBJETIVO -->
                <p id="objetivo"> <?= $objetivo?></p>
            </div>

                <!-- TITULO DE CURSOS E QUALIFICAÇÕES -->
                <h1 id="titulocursos"> CURSOS E QUALIFICAÇÕES </h1>
                <!-- QUEBRA LINHA NOS INPUTS DE CURSOS -->
            <div id="quebralinhacursos"> 
                            <!-- 1 -->
                <p class="curso1"> <?= $curso1?></p>
                            <!-- 2 -->
                <p class="curso2"> <?= $curso2?></p>
                            <!-- 3 -->
                <p class="curso3"> <?= $curso3?></p>
                            <!-- 4 -->
                <p class="curso4"> <?= $curso4?></p>
                            <!-- 5 --> 
                <p class="curso5"> <?= $curso?></p>
            </div>

                <!-- TITULO DE EXPERIÊNCIAS PROFISSIONAIS -->
                <h1 id="tituloexperiencias"> EXPERIÊNCIAS PROFISSIONAIS </h1>
                <!-- QUEBRA LINHA NOS INPUTS DE EXPERIÊNCIAS -->
            <div id="quebralinhaexperiencias"> 
                                <!-- 1 -->
                <p class="experiencia1"> <?= $experiencia1?></p>
                                <!-- 2 -->
                <p class="experiencia2"> <?= $experiencia2?></p>
                                <!-- 3 -->
                <p class="experiencia3"> <?= $experiencia3?></p>
                                <!-- 4 -->
                <p class="experiencia4"> <?= $experiencia4?></p>
                                <!-- 5 -->
                <p class="$experiencia5"> <?= $exp?></p>
            </div>
                <!-- BOTÃO DE IMPRIMIR -->
            <button id="imprimir" onclick="imprimirPagina()"> <strong>IMPRIMIR</strong></button>
</body>
        <script>
                /*ATIVANDO A FUNÇÃO DE IMPRIMIR*/
                function imprimirPagina() {
                window.print();
}
        </script>   
</html>