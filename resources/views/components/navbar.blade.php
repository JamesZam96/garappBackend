<header class="header">
    <div class="menu-button">
        <label for="btn-menu">
            <span class="material-symbols-outlined">
                menu
            </span>
        </label>
    </div>
    <div class="logo">
        <h1>Garapp</h1>
    </div>
    <div class="location">
        <a href="#">Ubicación</a>
        <span class="material-symbols-outlined">location_on</span>
    </div>
    <div class="search-ps">
        <input type="search">
    </div>
    <div class="signin">
        <a href="#">Ingreso</a>
        <span class="material-symbols-outlined">account_circle</span>
    </div>
    <div class="shopping-cart-button">
        <label for="btn-cart">
            <span class="material-symbols-outlined">
                shopping_cart
            </span>
        </label>
    </div>
</header>

<!--Menu lateral-->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
    <div class="cont-menu">
        <nav>
            <div class="sign-button">
                <button class="login-button">Iniciar Sesión</button>
                <button class="signup-button">Registrarse</button>
            </div>
            <a href="#">Talleres</a>
            <a href="#">Almacenes</a>
            <a href="#">Registra tu almacén</a>
            <a href="#">Registra tu taller</a>
            <a href="#">Quiero ser domiciliario</a>
        </nav>
        <label for="btn-menu">
            <span class="material-symbols-outlined">
                close
            </span>
        </label>
    </div>
</div>

<!--Menu shopping cart-->
<input type="checkbox" id="btn-cart">
<div class="container-menu-cart">
    <div class="cont-menu-cart">
        <nav>
            <div class="purchase-button">
                <button class="pur-button">Comenzar a comprar</button>
            </div>
        </nav>
        <label for="btn-cart">
            <span class="material-symbols-outlined">
                close
            </span>
        </label>
    </div>
</div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

.material-symbols-outlined {
    font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 24
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Montserrat';
}


.header {
    background-color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 85px;
    padding: 0px 2%;
    width: 100%;
}

.header .logo {
    align-content: center;
    border-radius: 150px;
}

.header .logo h1 {
    width: auto;
    color: #fa3d3b;
    font-style: italic;
    font-size: 20px;
    cursor: pointer;
}

.menu-button, .shopping-cart-button {
    color: #c1c1c1;
    height: 85px;
    align-content: center;
}

.menu-button span, .shopping-cart-button span {
    cursor: pointer;
}

.menu-button span:hover, .shopping-cart-button span:hover {
    transform: scale(1.1);
    color: #fa3d3b;
}

.header .search-ps {
    width: 60%;
}

.search-ps {
    text-align: center;
    height: 85px;
    align-content: center;
}

.search-ps input {
    width: 80%;
}

.signin, .location {
    height: 85px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #c1c1c1;
    transition: all 0.3s ease;
}

.signin a, .location a {
    text-decoration: none;
    color: #c1c1c1;
    cursor: pointer;
}

.signin:hover, .location:hover {
    color: #fa3d3b;
    transform: scale(1.1);
}

.signin span, .location span {
    cursor: pointer;
}

/* Menú lateral */
#btn-menu {
    display: none;
}

.container-menu {
    position: absolute;
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    transition: all 500ms ease;
    opacity: 0;
    visibility: hidden;
}

#btn-menu:checked ~ .container-menu {
    z-index: 2;
    opacity: 1;
    visibility: visible;
}

.cont-menu {
    width: 100%;
    max-width: 250px;
    background: #c1c1c1;
    height: 100vh;
    position: relative;
    transition: all 500ms ease;
    transform: translateX(-100%);
}

#btn-menu:checked ~ .container-menu .cont-menu {
    transform: translateX(0%);
}

.cont-menu nav {
    transform: translateY(15%);
}

.cont-menu nav a {
    display: block;
    text-decoration: none;
    padding: 20px;
    color: #000000;
    border-left: 5px solid transparent;
    transition: all 400ms ease;
}

.cont-menu nav a:hover {
    border-left: 0px solid #c7c7c7;
    background: #fa3d3b;
}

.cont-menu label {
    position: absolute;
    right: 5px;
    top: 10px;
    color: #000000;
    cursor: pointer;
    font-size: 18px;
}

.cont-menu nav .sign-button button {
    float: left;
    margin-left: 5px;
    margin-top: 6px;
    border-radius: 5px;
    padding: 5px;
    width: 107px;
    height: 47px;
    cursor: pointer;
    color: #ffffff;
    background: #000000;
    transition: all 500ms ease;
}

.cont-menu nav .sign-button .signup-button {
    float: right;
    margin-right: 5px;
    margin-top: 6px;
    border-radius: 5px;
    padding: 5px;
    width: 107px;
    height: 47px;
    cursor: pointer;
    color: #ffffff;
    background: #000000;
    transition: all 400ms ease;
}

.cont-menu nav .sign-button {
    width: 100%;
    height: 59px;
}

.cont-menu nav .sign-button .signup-button:hover {
    background: #0000009c;
}

.cont-menu nav .sign-button .login-button:hover {
    background: #0000009c;
}

/* Menú carrito de compras */
#btn-cart {
    display: none;
}

.container-menu-cart {
    display: flex;
    flex-direction: column;
    align-items: end;
    position: absolute;
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100vh;
    top: 0;
    right: 0;
    transition: all 500ms ease;
    opacity: 0;
    visibility: hidden;
}

#btn-cart:checked ~ .container-menu-cart {
    z-index: 2;
    opacity: 1;
    visibility: visible;
}

.cont-menu-cart {
    min-width: 15%;
    max-width: 50%;
    background: #c1c1c1;
    height: 100vh;
    transition: all 500ms ease;
    transform: translateX(0%);
}

#btn-cart:checked ~ .container-menu-cart .cont-menu-cart {
    transform: translateX(-2%);
}

.cont-menu-cart nav {
    transform: translateY(15%);
}

.cont-menu-cart label {
    position: absolute;
    right: 5px;
    top: 10px;
    color: #000000;
    cursor: pointer;
    font-size: 18px;
}

.cont-menu-cart nav .purchase-button button {
    margin-left: 5px;
    margin-top: 6px;
    border-radius: 5px;
    padding: 5px;
    width: 107px;
    height: 47px;
    cursor: pointer;
    color: #ffffff;
    background: #000000;
    transition: all 500ms ease;
}

.cont-menu-cart nav .purchase-button {
    width: 100%;
    height: 59px;
}

.cont-menu-cart nav .purchase-button .pur-button:hover {
    background: #0000009c;
}

.purchase-button {
    align-content: center;
}
    </style>