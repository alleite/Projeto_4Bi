<!-- fazer um carrinho de compras com cinco produtos que para aparecer no carrinho tem que clicar na checkbox e criar um cookie -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Página de Produtos</title>
</head>

<body>
    <nav class="navbar navbar" aria-label="First navbar example">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Naju Beauty Products</a>
        </div>
    </nav>


    <main>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
            <form action="get_cookie.php" method="post">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/cerave.jpg">
                            </svg>
                            <div class="card-body">
                                <h3>R$99,00</h3>
                                <p class="card-text">CeraVe Rosto & Corpo- Loção Hidratante de 473ml.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="checkbox" class="btn btn-sm btn-outline-secondary"  name="produtos[1]"
                                    value='{"nome":"Cerave","imagem":"img/cerave.jpg"}'>Adicionar ao
                                        carrinho</input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/neutrogena.png">
                            <div class="card-body">
                                <h3>R$43,90</h3>
                                <p class="card-text">Neutrogena Sun Fresh Protetor Solar Facial FPS70, 40g</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="checkbox" class="btn btn-sm btn-outline-secondary" name="produtos[2]"
                                    value='{"nome":"Neutrogena","imagem":"img/neutrogena.png"}'>Adicionar ao
                                        carrinho</input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/sephora.png">
                            <div class="card-body">
                                <h3>R$79,00</h3>
                                <p class="card-text">Hidratante labial sephora collection colorful lip balm</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="checkbox" class="btn btn-sm btn-outline-secondary" name="produtos[3]"
                                    value='{"nome":"Lip balm","imagem":"img/sephora.png"}'>Adicionar ao
                                        carrinho</input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/bepantol.png">
                            <div class="card-body">
                                <h3>R$28,99 </h3>
                                <p class="card-text">Bepantol Derma Toque Seco, Hidratante Corporal Multirrestaurador,
                                    para Pele Sensível e Extrasseca, 20g</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="checkbox" class="btn btn-sm btn-outline-secondary" name="produtos[4]"
                                    value='{"nome":"Bepantol","imagem":"img/bepantol.png"}'>Adicionar ao
                                        carrinho</input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/nivea.png">
                            <div class="card-body">
                                <h3>R$24,90</h3>
                                <p class="card-text">NIVEA ACNE control Sabonete em Gel Limpeza Profunda dos Poros Limpa
                                    profundamente os poros.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="checkbox" class="btn btn-sm btn-outline-secondary" name="produtos[5]"
                                    value='{"nome":"Nivea ACNE control","imagem":"img/nivea.png"}'>Adicionar ao
                                        carrinho</input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/massageador.png">
                            <div class="card-body">
                                <h3>R$24,90</h3>
                                <p class="card-text">Massageador Facial Água Marinha Roller Rosto Pescoço Antirrugas.</p><br>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="checkbox" class="btn btn-sm btn-outline-secondary" name="produtos[6]"
                                    value='{"nome":"Massageador","imagem":"img/massageador.png"}'>Adicionar ao
                                        carrinho</input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="submit-btn" id="btn_geral">Adicionar todos os produtos no carrinho</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>