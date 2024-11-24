<?php

require_once "di/order.php";
$error = "";
$orders = [];

try {
    $controller = OrderDI::create();
    $orders = $controller->list();
} catch (Exception $e) {
    $message = $e->getMessage();
    $error = "<span class=\"error\">$message</span>";
}

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
    <title>Lista de Ordens</title>
</head>

<body>
    <?php echo $error; ?>
    <div>
        <h1 id="titulo">Lista de Ordens</h1>
        <br>
        <div class="button-container">
            <button class="create-button" onclick="window.location.href='create.php'">Criar Nova Ordem</button>
     </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Tipo do Instrumento</th>
                <th>Descrição</th>
                <th>Data de Término</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?php echo $order->nome; ?></td>
                    <td><?php echo $order->sobrenome; ?></td>
                    <td><?php echo $order->tipo_instrumento; ?></td>
                    <td><?php echo $order->descricao; ?></td>
                    <td><?php echo $order->data_termino; ?></td>
                    <td>
                        <button onclick="window.location.href='edit.php?id=<?php echo $order->id; ?>'">Editar</button>
                        <button onclick="window.location.href='delete.php?id=<?php echo $order->id; ?>'">Excluir</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>