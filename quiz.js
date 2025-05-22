const perguntaElement = document.getElementById("pergunta"); 

// Obtém o elemento onde a pergunta será exibida 

 

const respostaButtons = document.getElementById("resposta-buttons"); 

// Obtém o contêiner onde os botões de resposta serão criados 

 

const proxButton = document.getElementById("prox-btn"); 

// Obtém o botão para ir para a próxima pergunta 

 

const cronometroElement = document.getElementById("cronometro"); 

// Obtém o elemento que exibe o cronômetro 

 

 

let indicePerguntaAtual = 0;  

// Inicializa o índice da pergunta atual 

 

let pontuacao = 0; 

// Inicializa a pontuação do jogador 

 

let timer;  

// Variável para armazenar o timer (cronômetro) 

 

let tempoRestante = 30; 

// Define o tempo total para cada pergunta 

 

function iniciarQuiz() { 

    indicePerguntaAtual = 0; 

    // Reseta o índice para a primeira pergunta 

    pontuacao = 0; 

    // Reseta a pontuação para 0 

    proxButton.innerHTML = "Seguinte"; 

    // Define o texto do botão "Próxima" como "Seguinte" 

    mostrarPergunta();  

    // Chama a função para exibir a pergunta 

} 

 

function mostrarPergunta() { 

    resetStatus(); 

    // Reseta o estado da interface antes de mostrar uma nova pergunta 

    tempoRestante = 30;  

    // Reseta o tempo restante para 30 segundos 

    atualizarCronometro(); 

    // Atualiza a exibição do cronômetro 

 

    let perguntaAtual = perguntas[indicePerguntaAtual]; 

    // Obtém a pergunta atual do array de perguntas 

    perguntaElement.innerHTML = (indicePerguntaAtual + 1) + ". " +    perguntaAtual.pergunta; 

    // Exibe o texto da pergunta na interface 

 

    perguntaAtual.respostas.forEach(resposta => { 

        // Para cada resposta da pergunta atual 

        const button = document.createElement("button"); 

        // Cria um novo botão 

        button.innerHTML = resposta.texto; 

        // Define o texto do botão como a resposta 

        button.classList.add("btn"); 

        // Adiciona a classe "btn" ao botão 

        respostaButtons.appendChild(button); 

        // Adiciona o botão ao contêiner de respostas 

         

        if (resposta.correto) { 

            button.dataset.correto = resposta.correto;  

            // Adiciona um atributo data com o valor "correto" se a resposta for correta 

        } 

         

        button.addEventListener("click", selecionarResposta); 

        // Adiciona um ouvinte de evento para o botão, que chama a função de selecionar resposta 

    }); 

 

    iniciarCronometro(); 

    // Inicia o cronômetro para a pergunta 

} 

 

function resetStatus() { 

    proxButton.style.display = "none";  

    // Esconde o botão "Próxima" enquanto uma nova pergunta é exibida 

    while (respostaButtons.firstChild) { 

        respostaButtons.removeChild(respostaButtons.firstChild);  

        // Remove todos os botões de resposta anteriores 

    }  

    clearTimeout(timer);  

    // Limpa qualquer timer existente 

    clearInterval(cronometro);  

    // Limpa o cronômetro 

} 

 

function selecionarResposta(e) { 

    clearTimeout(timer); 

    // Limpa o timer quando uma resposta é selecionada 

    clearInterval(cronometro); 

    // Limpa o cronômetro quando uma resposta é selecionada 

     

    const btnSelecionado = e.target; 

    // Obtém o botão que foi clicado 

    const estaCorreto = btnSelecionado.dataset.correto === "true"; 

    // Verifica se a resposta selecionada é a correta 

     

    if (estaCorreto) { 

        btnSelecionado.classList.add("correto");  

        // Adiciona a classe "correto" se a resposta estiver correta 

        pontuacao++;  

        // Incrementa a pontuação 

    } else { 

        btnSelecionado.classList.add("incorreto");  

        // Adiciona a classe "incorreto" se a resposta estiver errada 

    } 

     

    Array.from(respostaButtons.children).forEach(button => { 

        // Para cada botão de resposta 

        if (button.dataset.correto === "true") { 

            button.classList.add("correto");  

            // Marca a resposta correta 

        } 

        button.disabled = true;  

        // Desabilita todos os botões de resposta após a seleção 

    }); 

    proxButton.style.display = "block";  

    // Exibe o botão "Próxima" 

} 

function mostrarPontuacao() { 

    resetStatus(); 

    // Reseta a interface antes de mostrar a pontuação final 

    if (pontuacao >= 7){ 

    perguntaElement.innerHTML = `Parabéns, ${window.name}! você acertou ${pontuacao} de ${perguntas.length}!`; 

    } else{ 

        perguntaElement.innerHTML = `Mais sorte na próxima vez, ${window.name}! você acertou ${pontuacao} de ${perguntas.length}!`; 

    } 

    // Exibe a pontuação final na interface, caso a pontuação seja maior ou igual a 7 aparece "parabéns1" antes do nome, caso contrário aparece "Mais sorte na próxima vez!" 

 

    proxButton.innerHTML = "Tente outra vez!"; 

    // Altera o texto do botão para "Tente outra vez!" 

    proxButton.style.display = "block";  

    // Exibe o botão 

} 

 

function manipulaProxButton() { 

    indicePerguntaAtual++; 

    // Incrementa o índice da pergunta atual 

    if (indicePerguntaAtual < perguntas.length) { 

        mostrarPergunta();  

        // Se ainda houver perguntas, exibe a próxima 

    } else { 

        mostrarPontuacao();  

        // Caso contrário, exibe a pontuação final 

    } 

} 

 

proxButton.addEventListener("click", () => { 

    // Adiciona um ouvinte de evento ao botão "Próxima" 

    if (indicePerguntaAtual < perguntas.length) { 

        manipulaProxButton();  

        // Se ainda houver perguntas, manipula o próximo botão 

    } else { 

        iniciarQuiz();  

        // Se não houver mais perguntas, reinicia o quiz 

    } 

}); 

 

function atualizarCronometro() { 

    cronometroElement.innerHTML = tempoRestante;  

    // Atualiza a exibição do cronômetro com o tempo restante 

    if (tempoRestante <= 10) { 

        cronometroElement.classList.add("baixo");  

        // Adiciona a classe "baixo" se o tempo estiver abaixo de 10 segundos 

    } else { 

        cronometroElement.classList.remove("baixo"); 

        // Remove a classe "baixo" se o tempo estiver acima de 10 segundos 

    } 

} 

 

let cronometro;  

// Declara uma variável para armazenar o cronômetro 

 

function iniciarCronometro() { 

    cronometro = setInterval(() => { 

        tempoRestante--;  

        // Decrementa o tempo restante em 1 segundo 

        atualizarCronometro();  

        // Atualiza a exibição do cronômetro 

        if (tempoRestante <= 0) { 

            clearInterval(cronometro);  

            // Para o cronômetro se o tempo acabar 

            alert("Tempo esgotado!");  

            // Exibe um alerta informando que o tempo esgotou 

            manipulaProxButton();  

            // Move para a próxima pergunta após o tempo esgotar 

        } 

    }, 1000);  

    // Define o intervalo para 1000 milissegundos (1 segundo) 

} 

 

 

iniciarQuiz(); 

// Chama a função para iniciar o quiz ao carregar a página 
