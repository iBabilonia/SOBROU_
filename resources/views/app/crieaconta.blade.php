<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('style.css') }}">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>Escolha Sua Conta - Sobrou</title>
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
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 800px;
        }

        h1 {
            font-size: 24px;
            color: var(--secondaryColor);
            margin: 0 0 10px;
        }

        h1 span {
            color: var(--primaryColor);
        }

        .button-container {
            margin-top: -10px;
        }

        .button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: var(--secondaryColor);
            color: var(--whiteColor);
        }

        .cancel {
            background-color: var(--primaryColor)
        }

        .icon {
            font-size: 24px;
        }

        a.btnLOGIN{

            display: inline-block;
            padding: 10px 30px;
            margin-top: 20px;
            background-color: var(--primaryColor);
            color: white;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 16px 0px;

        }

    </style>
</head>
<body>
    <div class="login-container">
        <h1><span>Faça Login</span></h1>
        <div class="button-container">

            <br><br>
            <p>Você ainda não está conectado à sua conta!</p>

            <a href="escolha" class="btnLOGIN">Login</a>

            <!--
            <button class="button">

                 <i class="ion-person"></i>
                Entrar
            </button>


            <button class="button cancel">
                <i class="ion-close"></i>
                Cancelar
            </button>
            -->

        </div>
        <br>
        <p>Não tem uma conta?</p>
        <p><a href="#">Criar uma conta <i class="ion-person-add"></i></a></p>
    </div>
</body>
</html>
