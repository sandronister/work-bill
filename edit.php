<?php

require_once "di/order.php";
require_once "dto/order.php";
require_once "utils/select.php";
$error="";

$order = new OrderDTO();

$Instruments= ["Violão","Guitarra","Baixo","Cavaquinho","Ukulele","Violino","Viola","Contrabaixo"];

try{
    $controller = OrderDI::create();
    $order=$controller->update_order();
} catch (Exception $e){
    $message = $e->getMessage();
    $error= "<span class=\"error\">$message</span>"; 
}

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
    <title>Cadastro</title>
</head>

<body>
    <?php echo $error; ?>
    <div>
        <h1 id="titulo">Editar de Ficha de Trabalho</h1>
        <p id="subtitulo">Complete os campos com as informações do serviço</p>
        <br>
    </div>

    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $order->id ?>">
        <fieldset class="grupo">
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required value="<?php echo $order->nome ?>">
                </div>

                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $order->sobrenome ?>"required>
                </div>
        </fieldset> 

        <fieldset class="grupo">
            <div class="campo">
                <label for="tipo_instrumento"><strong>Tipo do Instrumento</strong></label>
                <select name="tipo_instrumento">
                    <?php echo select($Instruments,$order->tipo_instrumento) ?>
                </select>
            </div>
        </fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="descricao_servico"><strong>Descrição do Serviço</strong></label>
                <textarea rows="6" style="width: 26em" id="descricao" name="descricao"><?php echo $order->descricao ?></textarea>
            </div>
        </fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="data_inicio"><strong>Data de Início</strong></label>
                <input type="date" name="data_inicio" id="data_inicio" value="<?php echo $order->data_inicio ?>"required>
            </div>

            <div class="campo">
                <label for="data_termino"><strong>Data de Término</strong></label>
                <input type="date" name="data_termino" id="data_termino" value="<?php echo $order->data_termino ?>"required>
            </div>
        </fieldset>
        <button class="botao" type="button" onclick="window.location.href='list.php'" >Voltar</button>
        <button class="botao" type="submit">Cadastrar</button>
    </form>
</body>

</html>