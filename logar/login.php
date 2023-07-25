<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login GETS Burguer</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
    <style>
       a{
        color:white;
        text-decoration:none;
       }
    </style>
</head>
<body>
    <a href="../index.html">Voltar</a>
    <a href="admin.php" style="float: right;">Clique aqui caso seja um Admnistrador</a>
    <div>
        <center><h1>Login</h1></center>
        <form action="testLogin.php" method="POST">

        <input type="email" name="email" placeholder="Email" required>
        <br><br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">

        
    </div>

        <script src="script.js"></script>
</body>
</html>