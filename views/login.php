<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/main.css">

</head>
<body>
    <main>
        <form action="index.php?action=login" method="post">
            <section>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </section>
            <section>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </section>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastre-se</a>
    </main>
</body>
</html>