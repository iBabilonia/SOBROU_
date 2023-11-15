<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Adicionar Produto</title>
</head>
<body>

    <div class="sidebar">
        <h1 class="logo">SOBROU</h1>

        <div class="sidebar-menus">
            <a href="indexvend"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <a href="historicopedidos"><ion-icon name="receipt-outline"></ion-icon>Meus Pedidos</a>
            <!--<a href="#"><ion-icon name="wallet-outline"></ion-icon>Pagamentos</a>-->
            <a href="notificacoesvend"><ion-icon name="notifications-outline"></ion-icon>Notificações</a>
            <a href="contato"><ion-icon name="chatbubbles-outline"></ion-icon>Contato</a>
            <!--<a href="#"><ion-icon name="settings-outline"></ion-icon>Configurações</a>-->
            <a href="meusprodutos"><ion-icon name="arrow-back-outline"></ion-icon>Voltar para Produtos</a>
        </div>

        <div class="sidebar-logout">
            <a href="indexbase"><ion-icon name="log-out-outline"></ion-icon>Sair</a>
        </div>
    </div>

    <div class="main">
        <div class="add-product-container">
            <h1 class="logo">Adicionar Produto</h1>
            <br><br>
            <form id="add-product-form" class="add-product-form">
                <label for="product-name">Nome do Produto:</label>
                <input type="text" id="product-name" name="product-name" required>
                <br>
                <label for="product-price">Preço do Produto:</label>
                <input type="number" id="product-price" name="product-price" step="0.01" required>
                <br>
                <br>
                <button type="button" class="btn" onclick="addProduct()">Adicionar Produto</button>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- esse é um código para adicionar produtos que eu(Felipe) estou tentando fazer, mas talvez fique melhor com o back do Thiago... por isso comentei!
    <script>
        function addProduct() {
            const productName = document.getElementById('product-name').value;
            const productPrice = document.getElementById('product-price').value;

            if (productName && productPrice) {
                const productList = document.createElement('div');
                productList.classList.add('product-list');

                const productItem = document.createElement('div');
                productItem.classList.add('product-item');
                productItem.innerHTML = `
                    <h3>${productName}</h3>
                    <p>Preço: $${productPrice}</p>
                `;

                productList.appendChild(productItem);

                // Adiciona o novo produto à lista na tela
                document.querySelector('.add-product-container').appendChild(productList);

                // Limpa os campos do formulário após adicionar o produto
                document.getElementById('product-name').value = '';
                document.getElementById('product-price').value = '';
            } else {
                alert('Preencha todos os campos antes de adicionar o produto.');
            }
        }
    </script>
    -->

</body>
</html>
