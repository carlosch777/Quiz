<!DOCTYPE html> 

<html lang="pt-br"> 

<head> 

    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 --> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura a viewport para responsividade --> 

    <title>Formulario de Perguntas e Respostas</title> <!-- Título da página --> 

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <!-- Ícone da página --> 

    <link rel="stylesheet" href="login.css">   

</head> 

 

<body> 

    <div class="container"> <!-- Contêiner principal do formulário --> 

    <div> <!-- Início de um novo bloco para o conteúdo --> 

        <h2>Bem-vindo ao formulário</h2> <!-- Título do formulário --> 

        <div class="p"> <!-- Bloco de parágrafo para instruções --> 

            <p>Por favor, insira seu nome:</p> <!-- Instrução para o usuário --> 

        </div> 

         

        <div class="input-container"> <!-- Contêiner para o campo de input --> 

            <input type="text" id="nameInput" placeholder="Seu nome aqui"> <!-- Campo de entrada para o nome --> 

            <img width="20" height="20" src="https://img.icons8.com/?size=100&id=zxB19VPoVLjK&format=png&color=000000" alt="lock--v1"/> <!-- Ícone ao lado do input --> 

        </div> 

         

        <button onclick="startQuiz()">Começar o Quiz</button> <!-- Botão para iniciar o quiz --> 

    </div>  

</div> 

 

    <script src="login.js"></script> <!-- Referência para um arquivo JavaScript externo --> 

</body> 

</html> 