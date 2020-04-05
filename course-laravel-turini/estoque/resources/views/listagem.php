<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container">

        <h1>Lista de produtos</h1>
        <table class="table table-striped table-hover">
            <?php
            foreach ($produtos as $p) {
                ?>
                <tr>
                    <td><?= $p->id ?></td>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td><a href="/produtos/mostra">Visualizar</a></td>
                </tr>
            <?php
            }
            ?>
        </table>

    </div>
</body>

</html>
