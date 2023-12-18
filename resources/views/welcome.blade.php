<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Busca de Orientadores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            margin: 20px;
            text-align: center;
        }

        h1 {
            color: white;
        }

        h2,
        p {
            color: #333;
        }

        /* Estilo do contêiner do formulário */
        .login-container {
            max-width: 400px;
            margin: auto; /* Isso centraliza o contêiner na tela */
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Estilo para a pergunta e botão de cadastro */
        .signup-question {
            margin-top: 16px;
            color: #666;
        }

        .signup-button {
            background-color: #2196f3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Removendo sublinhado padrão de links */
            display: inline-block;
            margin-top: 8px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <h1>Sistema de Busca de Orientadores</h1>
    </header>

    <main>
        <h2>Bem-vindo ao Sistema de Busca de Orientadores</h2>
        <p>Encontre orientadores para o seu projeto acadêmico de forma fácil e rápida.</p>

        <!-- Adicionando formulário de login dentro do contêiner -->
        <div class="login-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Entrar</button>
            </form>

            <!-- Pergunta e botão de cadastro -->
            <p class="signup-question">Ainda não possui cadastro?</p>
            <a href="{{ route('register') }}" class="signup-button">Cadastre-se</a>
        </div>
    </main>

    <footer>
        &copy; 2023 Sistema de Busca de Orientadores
    </footer>

</body>

</html>
