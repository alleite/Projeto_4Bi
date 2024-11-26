<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Carrinho de Compras</title>
</head>

<body>
    <nav class="navbar navbar" aria-label="First navbar example">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Naju Beauty Products</a>
        </div>
    </nav>
    <?php
    if (isset($_COOKIE["selected_produtos"])) {
        $stored_produtos = json_decode($_COOKIE["selected_produtos"], true);

        if ($stored_produtos === null) {
            echo "Erro ao decodificar o cookie.";
            exit;
        }

        $produtosNomes = [];

        foreach ($stored_produtos as $key => $value) {
            $produto = json_decode($value, true);

            if (isset($produto['nome'])) {
                $produtosNomes[] = $produto['nome'];
            }
        }

        if (empty($produtosNomes)) {
            echo "Nenhum produto válido foi selecionado.";
            exit;
        }

        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "najubeauty";
        $connect = mysqli_connect($host, $username, $password, $database);

        if (!$connect) {
            die("Erro na conexão: " . mysqli_connect_error());
        }

        mysqli_set_charset($connect, "utf8");

        $nomesProdutos = [];
        foreach ($produtosNomes as $nome) {
            $nomesProdutos[] = "'" . mysqli_real_escape_string($connect, $nome) . "'";
        }

        $nomesProdutosString = implode(',', $nomesProdutos);

        $sql = "SELECT * FROM produtos WHERE nome IN ($nomesProdutosString)";
        $resultado = mysqli_query($connect, $sql);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            echo "<br><h3 class='text-justify' id='titulo'>Produtos do Carrinho:</h3>";
            echo "<ul>";

            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<img src='" . htmlspecialchars($linha['imagem']) . "' alt='" . htmlspecialchars($linha['nome']) . "' style='width:150px;height:auto;'>";
                echo  "<Text class='texto_carrinho>' ".htmlspecialchars($linha['nome']) . "</Text>";
                echo "<Text class='texto_carrinho'> R$ " . number_format($linha['preco'], 2, ',', '.') . "</Text>";
                echo " <Text class='texto_carrinho'>".htmlspecialchars($linha['descricao']) . "</Text> <hr style='border: 1px solid #000'>"; 
            }

            echo "</ul>";
        } else {
            echo "Nenhum produto encontrado.";
        }

        mysqli_close($connect);
    } else {
        echo "Nenhum produto selecionado.";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>