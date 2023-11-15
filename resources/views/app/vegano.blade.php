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
                <h2 class="main-title">Escolhas Veganas Próximas de Você</h2>
                <div class="detail-wrapper">
                    <div class="detail-card">
                        
                        <div class="detail-desc">
                            <div class="detail-name">
                                <img class="detail-img" src="./img/burger5.png">
                                <h4>CHEESEBURGER VEGANO</h4>
                                <p class="detail-sub">Pão,CARNE DE SOJA, molho rose, queijo tipo cheddar VEGANO, alface e tomate</p>
                                <p class="price">R$19,40</p>
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/bolodechocolate.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Bolo de Chocolate VEGANO</h4>
                                    <p class="detail-sub">Um delicioso bolo de chocolate com ingredientes veganos.</p>
                                    <p class="price">R$20,00</p>
                                </div>
                                <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/calabresa.JFIF">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Pizza de Calabresa Vegana</h4>
                                    <p class="detail-sub">Uma incrível pizza com calabresa VEGANA.</p>
                                    <p class="price">R$39,00</p>
                                </div>
                                <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/frango.JFIF">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>frango.JFIF</h4>
                                    <p class="detail-sub">Arroz, feijão, fritas e um delicioso frango vegano.</p>
                                    <p class="price">R$25,00</p>
                                </div>
                                <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/burger2.png">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>X-Bacon Vegano</h4>
                                    <p class="detail-sub">Pão, Carne Vegana, Queijo, Fatias de Bacon Vegano.</p>
                                    <p class="price">R$25,90</p>
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
<script>
    
</script>

</html>
