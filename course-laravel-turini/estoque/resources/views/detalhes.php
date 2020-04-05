<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap-glyphicons.css">
</head>
<body>
    <h1>Detalhes do produto: <?= $p->nome ?></h1>
    <ul>
        <li>Id: <?= $p->id ?></li>
        <li>Valor: <?= $p->valor ?></li>
        <li>Descrição: <?= $p->descricao ?></li>
        <li>Quantidade: <?= $p->quantidade ?></li>
    </ul>
</body>
</html>
