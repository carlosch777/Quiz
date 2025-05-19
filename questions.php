<?php 

// Início do bloco PHP 

 

$perguntas = [ 

    // Declara um array associativo que contém as perguntas do quiz 

    [ 

        "pergunta" => "Qual das opções a seguir contém apenas elementos de Hardware", 

        // Cada pergunta é um array associativo com a chave "pergunta" 

 

        "respostas" => [ 

            // Respostas possíveis para a pergunta 

            ["texto" => "CPU, Memória RAM, Linux", "correto" => false], 

            // Resposta 1: texto e se é a correta (false) 

 

            ["texto" => "Placa mãe, SSD, Placa de vídeo", "correto" => true], 

            // Resposta 2: correta (true) 

 

            ["texto" => "Teclado, CPU, Gerenciador de arquivos", "correto" => false], 

            // Resposta 3: incorreta (false) 

 

            ["texto" => "World, Mouse, Monitor", "correto" => false], 

            // Resposta 4: incorreta (false) 

        ] 

    ], 

    // Outras perguntas seguem a mesma estrutura... 

    [ 

        "pergunta" => "Quem foi a primeira pessoa a viajar no Espaço?", 

        "respostas" => [ 

            ["texto" => "Elon Musk", "correto" => false], 

            ["texto" => "A cadela Laika", "correto" => false], 

            ["texto" => "Buzz Aldrin", "correto" => false], 

            ["texto" => "Yuri Gagarin", "correto" => true], 

        ] 

    ], 

    [ 

        "pergunta" => "Qual é a maior montanha do mundo?", 

        "respostas" => [ 

            ["texto" => "Monte Everest", "correto" => true], 

            ["texto" => "Monte Chimborazo", "correto" => false], 

            ["texto" => "Mauna Kea", "correto" => false], 

            ["texto" => "Pico da Neblina", "correto" => false], 

        ] 

    ], 

    [ 

        "pergunta" => "Quem inventou a lâmpada?", 

        "respostas" => [ 

            ["texto" => "Steve Jobs", "correto" => false], 

            ["texto" => "Henry Ford", "correto" => false], 

            ["texto" => "Thomas Edison", "correto" => true], 

            ["texto" => "Santos Dumont", "correto" => false], 

        ] 

    ], 

    [ 

        "pergunta" => "Kryptonita é a fraqueza de qual super-herói?", 

        "respostas" => [ 

            ["texto" => "Batman", "correto" => false], 

            ["texto" => "Hulk", "correto" => false], 

            ["texto" => "Flash", "correto" => false], 

            ["texto" => "Super-Homem", "correto" => true], 

        ] 

    ], 

    [ 

        "pergunta" => "Quem pintou Mona Lisa?", 

        "respostas" => [ 

            ["texto" => "Leonardo da Vinci", "correto" => true], 

            ["texto" => "Van Gogh", "correto" => false], 

            ["texto" => "Tarsila do Amaral", "correto" => false], 

            ["texto" => "Pablo Picasso", "correto" => false], 

        ] 

    ], 

    [ 

        "pergunta" => "Qual grande evento histórico aconteceu em 1822 no Brasil?", 

        "respostas" => [ 

            ["texto" => "Descobrimento do Brasil", "correto" => false], 

            ["texto" => "Construção de Brasília", "correto" => false], 

            ["texto" => "Independência do Brasil", "correto" => true], 

            ["texto" => "Ditadura Militar", "correto" => false], 

        ] 

    ], 

    [ 

        "pergunta" => "Em qual região se localiza o estado de Minas Gerais?", 

        "respostas" => [ 

            ["texto" => "Centro-Oeste", "correto" => false], 

            ["texto" => "Sudeste", "correto" => true], 

            ["texto" => "Norte", "correto" => false], 

            ["texto" => "Nordeste", "correto" => false], 

        ] 

    ], 

    [ 

        "pergunta" => "Qual navio famoso naufragou em sua viagem inaugural?", 

        "respostas" => [ 

            ["texto" => "Titanic", "correto" => true], 

            ["texto" => "Antonov", "correto" => false], 

            ["texto" => "Boeing", "correto" => false], 

            ["texto" => "Symphony of the Seas", "correto" => false], 

        ] 

    ], 

    [ 

        "pergunta" => "Qual destas substâncias faz parte da composição do vidro?", 

        "respostas" => [ 

            ["texto" => "Fibra", "correto" => false], 

            ["texto" => "Celulose", "correto" => false], 

            ["texto" => "Álcool", "correto" => false], 

            ["texto" => "Areia", "correto" => true], 

        ] 

    ]  

];            

// O array de perguntas é finalizado aqui 

 

echo json_encode($perguntas); 

// Converte o array de perguntas para o formato JSON e o exibe 

?> 