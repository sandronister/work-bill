<?php

require_once "di/order.php";
$error="";


try{
    $controller = OrderDI::create();
    $controller->create_order();
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
        <h1 id="titulo">Cadastro de Ficha de Trabalho</h1>
        <p id="subtitulo">Complete os campos com as informações do serviço</p>
        <br>
    </div>

    <form method="post" action="create.php">
        <fieldset class="grupo">
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
        </fieldset> 

        <fieldset class="grupo">
            <div class="campo">
                <label for="tipo_instrumento"><strong>Tipo do Instrumento</strong></label>
                <select name="tipo_instrumento">
                    <option value="Violão">Violão</option>
                    <option value="Guitarra">Guitarra</option>
                    <option value="Baixo">Baixo</option>
                    <option value="Cavaquinho">Cavaquinho</option>
                    <option value="Ukulele">Ukulele</option>
                    <option value="Violino">Violino</option>
                    <option value="Violoncelo">Violoncelo</option>
                    <option value="Viola">Viola</option>
                    <option value="Contrabaixo">Contrabaixo</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="descricao_servico"><strong>Descrição do Serviço</strong></label>
                <textarea rows="6" style="width: 26em" id="descricao" name="descricao"></textarea>
            </div>
        </fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="data_inicio"><strong>Data de Início</strong></label>
                <input type="date" name="data_inicio" id="data_inicio" required>
            </div>

            <div class="campo">
                <label for="data_termino"><strong>Data de Término</strong></label>
                <input type="date" name="data_termino" id="data_termino" required>
            </div>
        </fieldset>

        <button class="botao" type="submit">Cadastrar</button>
    </form>
</body>

</html>