<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600display=swap" rel="stylesheet">
    <title>SOBROU</title>
</head>
<body>

    <div class="sidebar">

        <h1 class="logo">Sobrou</h1>


        <div class="sidebar-menus">
            <a href="home"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <a href="historicopedidos"><ion-icon name="receipt-outline"></ion-icon>Meus Pedidos</a>
            <!--<a href="#"><ion-icon name="wallet-outline"></ion-icon>Pagamentos</a>-->
            <a href="notificacoes"><ion-icon name="notifications-outline"></ion-icon>Notificações</a>
            <a href="contato"><ion-icon name="chatbubbles-outline"></ion-icon>Contato</a>
            <!--<a href="#"><ion-icon name="settings-outline"></ion-icon>Configurações</a>-->
        </div>


        <div class="sidebar-logout">
            <a href="indexbase"><ion-icon name="log-out-outline"></ion-icon>Sair</a>
        </div>
    </div>

    <div class="main">

        <div class="main-navbar">
            <div class="profile">
                <a class="cart" href="carrinho"><ion-icon name="cart-outline"></ion-icon> </a>
                <a class="user" href="usuario"><ion-icon name="person-outline"></ion-icon>  </a>
            </div>
        </div>
        <br><br><br>
        <div class="main-menus">
            <hr class="divider">
            <div class="main-detail">
                <h2 class="main-title">Escolhas de Vinhos Próximas de Você</h2>
                <div class="detail-wrapper">
                    <div class="detail-card">
                        
                        <div class="detail-desc">
                            <div class="detail-name">
                                <img class="detail-img" src="./img/mesasuave.WEBP">
                                <h4>VINHO MESA SUAVE</h4>
                                <p class="detail-sub">VINHO MESA SUAVE</p>
                                <p class="price">R$54,40</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/mioloreserva.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>VINHO MIOLO RESERVA</h4>
                                    <p class="detail-sub">vinho tinto suave</p>
                                    <p class="price">R$80,00</p>
                                </div>
                                <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/peramanca.WEBP">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>VINHO DA PERAMANCA</h4>
                                    <p class="detail-sub">vinho peramanca</p>
                                    <p class="price">R$60,00</p>
                                </div>
                                <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/kit4vinhos.JFIF">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>KIT c/ 4 vinhos</h4>
                                    <p class="detail-sub">um incrível kit com 4 vinhos</p>
                                    <p class="price">R$150,00</p>
                                </div>
                                <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/kit9vinhos.WEBP">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>KIT c/ 9 VINHOS</h4>
                                    <p class="detail-sub">Um incrível kit com 9 vinhos.</p>
                                    <p class="price">R$1000,00</p>
                                </div>
                                <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
