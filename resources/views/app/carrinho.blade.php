<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
            font-family: Arial, sans-serif;
            background-color: var(--greyColor);
        }

        header {
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .cart {
            background-color: var(--whiteColor);
            border-radius: 8px;
            margin: 20px;
            padding: 20px;
        }

        .product {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .product img {
            max-width: 50px;
            max-height: 50px;
        }

        .product .name {
            flex: 1;
            margin: 0 10px;
        }

        .product .price {
            color: var(--primaryColor);
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .actions button {
            background-color: var(--secondaryColor);
            color: var(--whiteColor);
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .actions button:last-child {
            background-color: var(--primaryColor);
        }

        .actions button:hover {
            filter: brightness(1.2);
        }
        a.voltarindex{
            color: white;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

    </style>
</head>
<body>
    <header>
        <h1>Seu Carrinho de Compras</h1>
    </header>

    <div class="cart">
        <div class="product">
            <img src="food1.jpg" alt="Comida 1">
            <div class="name">Comida deliciosa</div>
            <div class="price">$10.99</div>
        </div>

        <div class="product">
            <img src="food2.jpg" alt="Comida 2">
            <div class="name">Outra comida saborosa</div>
            <div class="price">$8.99</div>
        </div>

        <div class="actions">
            <button class="voltarindex "><a href="index.html" class="voltarindex"></i> Adicionar Produtos</button>
            <button><i class="ion-ios-checkmark-circle"></i> Revisando o Carrinho</button>
            <button><i class="ion-android-done"></i>Finalizar a Compra</button>
        </div>
    </div>
</body>
</html>