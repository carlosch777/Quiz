function startQuiz() { 

    // Obtém o valor do input com id 'nameInput' e armazena na propriedade 'name' do objeto window 

    window.name = document.getElementById('nameInput').value; 

 

    // Verifica se o nome foi inserido 

    if (window.name) { 

        // Exibe um alerta de boas-vindas com o nome do usuário 

        alert(`Olá, ${window.name}! Prepare-se para o quiz!`); 

         

        // Redireciona o usuário para a página 'index.php' 

        window.location.href = 'quiz.php'; // Redireciona para home.html 

    } else { 

        // Se nenhum nome foi inserido, exibe um alerta solicitando que o usuário insira um nome 

        alert('Por favor, insira seu nome.'); 

    } 

} 