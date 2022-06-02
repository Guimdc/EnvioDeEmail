<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="author" content="Guilherme Machado Dal Castel">
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
    <main>
        <form method="post" action="">
            <h1>Envio de E-mail</h1>
            <div class="form" >
                <label for="nome">Nome</label>
                <div class="form-3">
                    <input id="nome" name="nome" type="text" placeholder="Escreva seu nome" class="inputs" required autofocus>
                </div>
            </div>
            <div class="form">
                <label for="assunto">Assunto</label>
                <div class="form-3">
                    <input id="assunto" name="assunto" type="text" placeholder="Escreva seu Assunto" class="inputs" required>
                </div>
            </div>
            <div class="form">
                <label for="mensagem">Mensagem</label>
                <div class="form-3">
                    <textarea id="mensagem" name="mensagem" type="text" placeholder="Escreva sua Mensagem" class="inputs" required></textarea>
                </div>
            </div>
            <input type="submit" id="button" name="enviar" value="ENVIAR">
        </form>
    </main>
    <?php
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        
        $email = "guiddalcastel@gmail.com";

        $headers = 'Content-type: text/html; charset=utf-8'."\r\n";
        $headers .= "From: $nome <$email>"; 

        mail($email, $assunto, $mensagem, $headers);
    }
    ?>
</body>
</html>