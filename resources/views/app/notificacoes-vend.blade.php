<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600display=swap" rel="stylesheet">
    <title>Notificações - Sobrou</title>
</head>
<body>

    <div class="sidebar">
        <h1 class="logo">Sobrou</h1>

        <div class="sidebar-menus">
            <a href="indexvend"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <!--<a href="#"><ion-icon name="wallet-outline"></ion-icon>Pagamentos</a>-->
            <a href="notificacoesvend"><ion-icon name="notifications-outline"></ion-icon>Notificações</a>
            <a href="contatovend"><ion-icon name="chatbubbles-outline"></ion-icon>Contato</a>
            <!--<a href="#"><ion-icon name="settings-outline"></ion-icon>Configurações</a>-->
        </div>


        <div class="sidebar-logout">
            <a href="indexbase"><ion-icon name="log-out-outline"></ion-icon>Sair</a>
        </div>
    </div>

    <div class="main-notif">
        <p class="usuariofontes">Notificações</p>
        <br><br>
        <div class="main-content">
            <div class="contact-link">
                você ainda não tem notificações...
                <br><br><br>
                <a href="home" class="btn" target="_blank">voltar para a home</a>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
