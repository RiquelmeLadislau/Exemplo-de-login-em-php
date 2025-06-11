<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/home.css">
</head>
<body>
    <div class="container">
        
        <h1>Bem-vindo à Página Home</h1>
        User logado:@<?php
            echo $_SESSION['user'];
        ?>
        <br>
        <p>Bem vindo a nossa pagina inicial que é um exemplo de um site de login no php</p>
        <a href="../php/logOut.php"><button>Sair da sessão</button></a>
    </div>
</body>
</html>