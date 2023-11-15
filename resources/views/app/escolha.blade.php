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
            display: flex;
            justify-content: space-between;
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
    </style>
</head>
<body>
    <div class="login-container">
        <h1><span>C</span>onta</h1>
        <div class="button-container">

            <a href="logn" class="btn">Cliente</a>

            <a href="lognvend" class="btn">Vendedor</a>


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
        <p><a href="crieaconta">Criar uma conta <i class="ion-person-add"></i></a></p>
    </div>
</body>
</html>
