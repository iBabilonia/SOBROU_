<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>Login Cliente - Sobrou</title>
    <style>
        :root {
            --primaryColor: #0e6253;
            --secondaryColor: #ffc107;
            --whiteColor: #fff;
            --blackColor: #222;
            --softGreencolor: #d9f2ee;
            --darkGreyColor: #a7a7a7;
            --greyColor: #f5f5f5;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--greyColor);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: var(--whiteColor);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 300px;
        }

        h1 {
            font-size: 24px;
            color: var(--secondaryColor);
            margin: 0 0 10px;
        }

        h1 span {
            color: var(--primaryColor);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px -20px 10px;
            border: 1px solid var(--darkGreyColor);
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: var(--primaryColor);
            color: var(--whiteColor);
        }

        .cancel {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: var(--secondaryColor);
            color: var(--whiteColor);
        }

        .icon {
            font-size: 24px;
        }

        a.btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            margin-left: 5px;
            margin-right: 5px;
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 16px 0px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1><span>L</span>ogin</h1>
        <input type="text" placeholder="Nome de usuário" id="login">
        <input type="password" placeholder="Senha" id="senha">
        <div class="button-container">
            <button class="button" onclick="validarLogin()">Entrar</button>
            <a href="indexbase" class="cancel">Cancelar</a>
        </div>
        <br><br>
        <p><a href="recuperarsenha">Esqueci minha senha <i class="ion-help-buoy"></i></a></p>
        <p><a href="crieaconta">Criar uma conta <i class="ion-person-add"></i></a></p>
    </div>

    <script>
        function validarLogin() {
            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;

            if (login === 'admin' && senha === 'admin') {
                alert('Login bem-sucedido!');
                window.location.href= 'http://127.0.0.1:8000/indexvend';
            } else {
                alert('Usuário ou senha incorretos');
            }
        }
    </script>
</body>
</html>