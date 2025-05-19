<!DOCTYPE html> 

<!-- Declara o tipo de documento como HTML5 --> 

 

<html lang="pt-br"> 

<!-- Define o idioma do documento como português do Brasil --> 

 

<head> 

    <meta charset="UTF-8"> 

    <!-- Define a codificação de caracteres para UTF-8, que suporta todos os caracteres necessários --> 

 

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <!-- Define as configurações de viewport para garantir que a página seja responsiva em dispositivos móveis --> 

 

    <title>Quiz</title> 

    <!-- Define o título da página que aparecerá na aba do navegador --> 

 

    <link rel="stylesheet" href="quiz.css"> 

    <!-- Link para o arquivo CSS externo que contém os estilos da página --> 

<link rel="shortcut icon" href="cérebro1.png" type="image/x-icon"> 

</head> 

<body> 

    <div class="app"> 

        <!-- Contêiner principal da aplicação --> 

 

        <div id="cronometro">30</div> 

        <!-- Exibe o cronômetro com o tempo inicial de 30 segundos --> 

 

        <h1> 

            Formulário de Perguntas e Respostas <!-- Título do quiz --> 

        </h1> 

 

        <div class="quiz"> 

            <!-- Contêiner para as perguntas e respostas do quiz --> 

 

            <h2 id="pergunta">A pergunta vai aqui</h2> 

            <!-- Exibe a pergunta atual, com um ID para manipulação via JavaScript --> 

 

            <div id="resposta-buttons"></div> 

            <!-- Contêiner onde os botões de resposta serão gerados dinamicamente --> 

 

            <button id="prox-btn" style="display:none;"> 

            <!-- Botão para ir para a próxima pergunta, inicialmente oculto --> 

                Próxima Pergunta 

            </button> 

        </div> 

    </div> 

 

    <script src="quiz.js"></script> 

    <!-- Inclui um arquivo JavaScript externo que contém a lógica do quiz --> 

 

    <script> 

        fetch('questions.php') 

        // Faz uma requisição para obter as perguntas do arquivo PHP 

 

            .then(response => response.json()) 

            // Converte a resposta em formato JSON 

 

            .then(data => { 

                window.perguntas = data;  

                // Armazena as perguntas no objeto global `window` para acesso posterior 

 

                iniciarQuiz();  

                // Chama a função iniciarQuiz() para começar o quiz 

            }) 

            .catch(error => console.error('Erro ao carregar as perguntas:', error)); 

            // Captura e exibe qualquer erro que ocorra durante a requisição 

    </script> 

</body> 

</html> 