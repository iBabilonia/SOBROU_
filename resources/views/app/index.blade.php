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

            <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>

            <div class="search">
                <input type="text" placeholder="O que você gostaria de pedir?">
                <button class="search-btn" onclick="procurar()">Procurar</button>
            </div>


            <div class="profile">
                <a class="cart" href="carrinho"><ion-icon name="cart-outline"></ion-icon> </a>
                <a class="user" href="usuario"><ion-icon name="person-outline"></ion-icon>  </a>
            </div>
        </div>
        <div class="main-highlight">

            <div class="main-header">
                <h2 class="main-title">Recomendações</h2>
                <div class="main-arrow">
                    <ion-icon class="back" name="chevron-back-circle-outline"></ion-icon>
                    <ion-icon class="next" name="chevron-forward-circle-outline"></ion-icon>
                </div>

            </div>

            <div class="highlight-card">
                <img class="highlight-img" src="/img/coffe.jpg">
                <div class="highlight-desc">
                    <h4>Cafe Latte</h4>
                    <p>R$3,50</p>
                </div>
            </div>

        </div>
        <div class="main-menus">

            <div class="main-filter">
                <h2 class="main-title">Cardápio<br></h2>
                <div class="main-arrow">
                    <ion-icon class="back-menus" name="chevron-back-circle-outline"></ion-icon>
                    <ion-icon class="next-menus" name="chevron-forward-circle-outline"></ion-icon>
                </div>
                
                <div class="filter-wrapper">
                    <a href="pratofeito">
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="restaurant-outline"></ion-icon>
                            </div>
                            <p>Pratos Feitos</p>
                        </div>
                    </a>    
                    <a href="burger">
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="fast-food-outline"></ion-icon>
                            </div>
                            <p>Burger</p>
                        </div>
                    </a>
                    <a href="pizza">    
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="pizza-outline"></ion-icon>
                            </div>
                            <p>Pizza</p>
                        </div>
                    </a>
                    <a href="vinhos">
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="wine-outline"></ion-icon>
                            </div>
                            <p>Vinhos</p>
                        </div>
                    </a>
                    <a href="sobremesas">        
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="ice-cream-outline"></ion-icon>
                            </div>
                            <p>Sobremesas</p>
                        </div>
                    </a>
                    <a href="cafe">
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="cafe-outline"></ion-icon>
                            </div>
                            <p>Café</p>
                        </div>
                    </a>
                    <a href="comidajaponesa">
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="fish-outline"></ion-icon>
                            </div>
                            <p>Comida Japonesa</p>
                        </div>
                    </a>
                    <a href="vegano">
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="nutrition-outline"></ion-icon>
                            </div>
                            <p>Vegano</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr class="divider">
            <div class="main-detail">
                <h2 class="main-title">Escolhas Próximas de Você</h2>
                <div class="detail-wrapper">
                    <div class="detail-card">
                        
                        <div class="detail-desc">
                            <div class="detail-name">
                                <img class="detail-img" src="./img/burger3.png">
                                <h4>CHEESEBURGER</h4>
                                <p class="detail-sub">Pão, molho rose, queijo tipo cheddar, alface e tomate</p>
                                <p class="price">R$19,40</p>d
                            </div>
                            <ion-icon class="detail-favorites" name="bookmark-outline"></ion-icon>
                        </div>
                        <div class="detail-card">
                            <img class="detail-img" src="./img/cafeexpresso.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Café Latte</h4>
                                    <p class="detail-sub">Uma mistura fresca e refrescante  leite aveludado formam este delicioso latte tradicional.</p>
                                    <p class="price">R$5,00</p>
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
        function procurar() {
            var searchTerm = document.getElementById('searchInput').value.toLowerCase();

            switch (searchTerm) {
                case 'hamburguer':
                    window.location.href = 'http://127.0.0.1:8000/burger';
                    break;
                case 'pizza':
                    window.location.href = 'http://127.0.0.1:8000/pizza';
                    break;
                case 'prato feito':
                    window.location.href = 'http://127.0.0.1:8000/pratofeito';
                    break;
                case 'sobremesas':
                    window.location.href = 'http://127.0.0.1:8000/sobremesas';
                    break;
                case 'vinho':
                    window.location.href = 'http://127.0.0.1:8000/vinho';
                    break;
                case 'vegano':
                    window.location.href = 'http://127.0.0.1:8000/vegano';
                    break;
                default:
                    alert('Opção não encontrada. Por favor, tente novamente.');
                    break;
            }
        }
    </script>
    
</html>
