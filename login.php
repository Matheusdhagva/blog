<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Meu Blog</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            background-color: rgba(6, 10, 50, 0.92);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-size: 0.9em;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1em;
        }
        .form-group button {
            background-color: #007bff; /* Cor primária azul */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .form-group button:hover {
            background-color: #0056b3; /* Cor azul mais escura ao passar o mouse */
        }
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 10px;
            text-align: center;
        }
        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }
        .signup-link a {
            color: #007bff;
            text-decoration: none;
            transition: text-decoration 0.3s ease;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Nosso Blog</h2>
    <?php
    // Simulação de mensagem de erro (em um cenário real, viria da tentativa de login)
    $erro = isset($_GET['erro']) ? $_GET['erro'] : '';
    if ($erro) {
        echo '<p class="error-message">Usuário ou senha incorretos.</p>';
    }
    ?>
    <form action="processar_login.php" method="POST">
        <div class="form-group">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
        </div>
        <div class="form-group">
            <button type="submit">Entrar</button>
        </div>
    </form>
    <div class="signup-link">
        <a href="cadastro.php">Não tem uma conta? Cadastre-se</a>
    </div>
</div>
</body>
</html>