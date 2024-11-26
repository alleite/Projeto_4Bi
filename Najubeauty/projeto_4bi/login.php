
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="body-login">

        <div class="row justify-content-center" id="div-espacoForms">
            <div class="col-md-6" id="form-login"><br>
                <h2 class="text-justify" id="titulo">Bem-vindo de volta!</h2>
                <h3 class="text-justify" id="subtitulo">Escreva suas credenciais para acessar sua conta</h3>
                <form action="verificacaologin.php" method="POST" id="forms_estilo"  id="text-input">
                    <div class="form-group">
                        <label for="username">Username:<br></label>
                        <input type="text" class="form-control" name="username" require>
                    </div><br>
                    <div class="form-group">
                        <label for="password">Password:<br></label>
                        <input type="password" class="form-control" name="password" required>
                    </div><br>
                    <form action="verificacaologin.php">
                    <button type="submit" class="btn btn-primary mt-3 text-center" id="estilo_botao">
                        <text>Acessar</text>
                    </button><br>
                    </form>
                </form>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>