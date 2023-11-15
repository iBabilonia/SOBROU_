<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Recuperação de Senha - SOBROU</title>
</head>
<body>
    <div class="main">

        <div class="recovery-container">
            <h1 class="logo">Recuperar Senha</h1>
            <br><br>
            <form class="recovery-form">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <br><br>
                <button type="submit" class="btn">Enviar Link de Recuperação</button>
            </form>
        </div>


        <div class="main-navbar">
            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
        </div>
        <div class="main-highlight">

    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
