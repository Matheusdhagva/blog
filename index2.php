<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog Simples em PHP</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: rgba(6, 10, 50, 0.92);
            color: #333;
        }
        header {
            background-color: rgba(7, 8, 43, 0.92);
            color: #fff;
            padding: 1em 0;
            text-align: center;
            margin-bottom: 10px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .post h2 {
            color: #555;
            margin-top: 0;
        }
        .post .meta {
            color: #777;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        .post .content {
            line-height: 1.6;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
        }
    </style>
</head>
<body>
<header>
    <h1>Minhas experiências</h1>
    <nav>
        <ul>
            <li><a href="#">Página Inicial</a></li>
            <li><a href="#">Sobre</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <?php
    // Simulação de dados de posts (em um cenário real, viriam de um banco de dados)
    $posts = [
        [
            'titulo' => 'Minha primeira vez no estádio',
            'data' => '20 de Março de 2025',
            'autor' => 'João Silva',
            'conteudo' => 'A primeira vez que pisei em um estádio de futebol, o mundo pareceu se expandir diante dos meus olhos. Eu era criança, agarrado à mão do meu pai, e a multidão rugia como um mar revolto. As cores vibrantes das camisas, o cheiro de pipoca e grama, a energia pulsante de milhares de pessoas unidas por uma paixão em comum – tudo era novo e avassalador.'
        ],
        [
            'titulo' => 'Primeiro prato feito',
            'data' => '15 de Março de 2025',
            'autor' => 'MATHEUS',
            'conteudo' => 'A sensação de ter um prato feito foi maravilhosa e realizadora, foi um pudim, mesmo sendo simples foi desafiador, amei a experiência, fiz com minha mãe.  '
        ],
        [
            'titulo' => 'PRIMEIRA EXPERIENCIA DE MORTE',
            'data' => '10 de Março de 2025',
            'autor' => 'MATHEUS',
            'conteudo' => 'Minha primeira experiência de morte foi com meu pai, algo muito triste ainda era pequeno, não foi uma ótima experiência, tenho traumas.
'
        ]
    ];

    // Loop para exibir cada post
    foreach ($posts as $post): ?>
        <div class="post">
            <h2><?php echo htmlspecialchars($post['titulo']); ?></h2>
            <p class="meta">Publicado em: <?php echo htmlspecialchars($post['data']); ?> por <?php echo htmlspecialchars($post['autor']); ?></p>
            <div class="content">
                <p><?php echo nl2br(htmlspecialchars($post['conteudo'])); ?></p>
                <a href="#">Leia mais...</a>
            </div>
        </div>
    <?php endforeach; ?>

    <?php if (empty($posts)): ?>
        <p>Ainda não há posts para exibir.</p>
    <?php endif; ?>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Meu Blog Simples</p>
</footer>
</body>
</html>
