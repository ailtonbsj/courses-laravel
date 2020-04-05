<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<style>
    table, td {
        border: 1px solid black;
        border-spacing: 0;
    }
</style>

<body>
    <table>
        <?php
        foreach ($produtos as $p) {
            ?>
            <tr>
                <td><?= $p->id ?></td>
                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
