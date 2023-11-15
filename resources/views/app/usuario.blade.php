<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600display=swap" rel="stylesheet">
    <title>Perfil do Usuário - Sobrou</title>
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

    <div class="main-usu">
        <div class="main-navbar">
            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>


            <div class="profile" style="align-items: end;">
                <a class="cart" href="carrinho"><ion-icon name="cart-outline"></ion-icon></a>
                <a class="user" href="usuario"><ion-icon name="person-outline"></ion-icon></a>
            </div>
        </div>
        <br>
        <div class="main-content">
            <div class="box-usuario">
                <h2>Bem-vindo ao seu Perfil!</h2>
                <br>
                <p class="usuariofontes">Lúcio</p>
                <br>
                <img src="./img/luciouser.png" alt="" class="img-perf">
                <br><br>
                <p class="usuariosubfontes">lucio@gmail.com</p>
                <br><br><br>
                <a href="alterarperfil" class="btn-usu">Editar</a>
                <br>
                <a href="historicopedidos" class="btn-usu">Histórico de Pedidos</a>
            </div>    
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
