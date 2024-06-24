<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garapp</title>
    <link rel="stylesheet" href="./css/home(1).css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
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

    <main>
        <div class="container py-4">
            <span><img class="img-tool" src="./images/tool.png" alt="tool"><b>Talleres</b></span>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container d-flex justify-content-around"> 

                        
                        <div class="card border-0" style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=1" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 1</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0  " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=2" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 1.1</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=3" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 1.2</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=4" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 1.3</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                    </div>
                      
                  </div>
                  <div class="carousel-item">
                    <div class="container d-flex justify-content-around"> 

                        
                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=5" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 2</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=6" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 2.1</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=7" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 2.2</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=8" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 2.3</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                    </div>
                    
                  </div>
                  <div class="carousel-item">
                    <div class="container d-flex justify-content-around"> 

                        
                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=9" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 3</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=10" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 3.1</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=11" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 3.2</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 " style="width: 15rem;">
                            <img src="https://source.unsplash.com/random/200x200?sig=12" height="200px"
                                class="card-img-top" width="" alt="img">
                            <div class="d-flex col-12">
                                <div class=" col-2">
                                    <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                </div>
                                <p class="card-text col-8 "><b>Taller 3.3</b><span class="text-muted"><br>Date1 Date
                                        2</span></p>
                                <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="none" viewBox="0 0 24 24">
                                        <path fill="#ffae00"
                                            d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                        </path>
                                    </svg><span color="graya100" data-testid="typography"
                                        class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                </div>
                            </div>
                        </div>


                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        
        </div>
            



        </div>



                    


                    <!-- Carrusel-2 -->

                    <div class="container py-4">
                        <span><img class="img-tool" src="./images/tool.png" alt="tool"><b>Almacenes</b></span>
                        <div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="container d-flex justify-content-around"> 
            
                                    
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=13" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen </b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=14" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 1</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=15" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 1.1</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=16" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 1.2</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                </div>
                                  
                              </div>
                              <div class="carousel-item">
                                <div class="container d-flex justify-content-around"> 
            
                                    
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=17" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 2.1</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=18" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen </b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=19" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 2.1</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=20" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 2.2</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                </div>
                                
                              </div>
                              <div class="carousel-item">
                                <div class="container d-flex justify-content-around"> 
            
                                    
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=21" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 2.3</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=10" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 1</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=22" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 3</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                    <div class="card border-0 " style="width: 15rem;">
                                        <img src="https://source.unsplash.com/random/200x200?sig=23" height="200px"
                                            class="card-img-top" width="" alt="img">
                                        <div class="d-flex col-12">
                                            <div class=" col-2">
                                                <img class="img-tool" src="./images/empresa.png" alt="tool"></span>
                                            </div>
                                            <p class="card-text col-8 "><b>Almacen 3.1</b><span class="text-muted"><br>Date1 Date
                                                    2</span></p>
                                            <div class="estrellas col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="none" viewBox="0 0 24 24">
                                                    <path fill="#ffae00"
                                                        d="M12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72 3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z">
                                                    </path>
                                                </svg><span color="graya100" data-testid="typography"
                                                    class="sc-bxivhb eodNTz sc-189c7408-4 klDTMa">4.4</span>
                                            </div>
                                        </div>
                                    </div>
            
            
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </main>
    <footer>
        <div class=" bg-dark d-flex col-12">
            <div class="col-4 d-flex flex-column align-items-center">
                <p class="text-danger">Categorías</p>
                <p class="text-light"> + Productos <br>
                    + Promociones y ofertas <br>
                    + Talleres cerca de mí <br>
                    + Tiendas cerca de mí</p>
            </div>
            <div class="col-4 d-flex flex-column align-items-center">
                <p class="text-danger">Únete a Garapp</p>
                <p class="text-light"> + Registra tu taller <br>
                    + Trabaja con nosotros <br>
                    + Registra tu almacén <br>
                    + Posiciones disponibles <br>
                    + Quiero ser Garaapero <br>
                    + Haz crecer tu marca <br>
                    + Incrementa tus ventas <br>
                    + Ordenar por Garaap</p>
            </div>
            <div class="col-4 d-flex flex-column align-items-center">

                <p class="text-danger">Acerca de Garaap</p>
                <p class="text-light"> + Blog <br>
                    + Derecho de desistimiento<br>
                    + SIC <br>
                    + Términos y condiciones <br>
                    + Garapp <br>
                    + Políticas de privacidad <br>
                    + Procesamiento de Datos </p>
            </div>
            
        </div>

        <div class="footer2"> 
            <a href="" class="m-2 w-25"><img src="./images/storeIos.png" alt=""></a>
            <a href=""><img src="./images/storeAndroid.png" alt=""></a>
        </div>   
    </footer>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');


.material-symbols-outlined {
    font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 24
}


*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Montserrat';
}

body{
    background-color: rgb(193, 193, 193);
}
.img-tool{
    width: 2rem;
}

.header{
    background-color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 85px;
    padding: 0px 2%;
    width: 100%;
}
.estrellas{
    background-color: #F6DDCC ;
    height: 15px;
}
.header .logo{
    align-content: center;
    border-radius: 150px;
    
}
.footer2{
    background-color: #BFBFBF;
}

.header .logo h1{
    width: auto;
    color: #fa3d3b;
    font-style: italic;
    font-size: 20px;
    cursor: pointer;
}

.menu-button, .shopping-cart-button{
    color: #c1c1c1;
    height: 85px;
    align-content: center;
}

.menu-button span,.shopping-cart-button span{
    cursor: pointer;
}

.menu-button span:hover, .shopping-cart-button span:hover{
    transform: scale(1.1);
    color: #fa3d3b;
}

.header .search-ps{
    width: 60%;
}

.search-ps{
    text-align: center;
    height: 85px;
    align-content: center;
}

.search-ps input{
    width: 80%;
}

.signin, .location{
    height: 85px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #c1c1c1;
    transition: all 0.3s ease;
}

.signin a, .location a{
    text-decoration: none;
    color: #c1c1c1;
    cursor: pointer;
}

.signin:hover, .location:hover{
    color: #fa3d3b;
    transform: scale(1.1);
}

.signin span, .location span{
    cursor: pointer;
}

/*Menù lateral*/
#btn-menu{
    display: none;
}
.container-menu{
    position: absolute;
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100vh;
    top: 0;left: 0;
    transition: all 500ms ease;
    opacity: 0;
    visibility: hidden;
}
#btn-menu:checked ~ .container-menu{
    z-index: 2;
    opacity: 1;
    visibility: visible;
}
.cont-menu{
    width: 100%;
    max-width: 250px;
    background: #c1c1c1;
    height: 100vh;
    position: relative;
    transition: all 500ms ease;
    transform: translateX(-100%);
}
#btn-menu:checked ~ .container-menu .cont-menu{
    transform: translateX(0%);
}
.cont-menu nav{
    transform: translateY(15%);
}
.cont-menu nav a{
    display: block;
    text-decoration: none;
    padding:  20px;
    color: #000000;
    border-left: 5px solid transparent;
    transition: all 400ms ease;
}
.cont-menu nav a:hover{
    border-left: 0px solid #c7c7c7;
    background: #fa3d3b;
}
.cont-menu label{
    position: absolute;
    right: 5px;
    top: 10px;
    color: #000000;
    cursor: pointer;
    font-size: 18px;
}

.cont-menu nav .sign-button button{
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

.cont-menu nav .sign-button .signup-button{
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

.cont-menu nav .sign-button{
    width: 100%;
    height: 59px;
}

.cont-menu nav .sign-button .signup-button:hover{
    background: #0000009c;
}

.cont-menu nav .sign-button .login-button:hover{
    background: #0000009c;	
}

/*Menu shopping cart*/
#btn-cart{
    display: none;
}
.container-menu-cart{
    display: flex;
    flex-direction: column;
    align-items: end;
    /*max-width: 100vw;*/
    position:absolute;
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100vh;
    top: 0;right: 0;
    transition: all 500ms ease;
    opacity: 0;
    visibility: hidden;
}
#btn-cart:checked ~ .container-menu-cart{
    z-index: 2;
    opacity: 1;
    visibility: visible;
}

.cont-menu-cart{
    z-index: 2;
    min-width: 15%;
    max-width: 50%;
    /*max-width: 25em;*/
    background: #c1c1c1;
    height: 100vh;
    /*position: absolute;*/
    transition: all 500ms ease;
    transform: translateX(0%);
    /*align-content: center;
    /*right: 20%;
    /*left: 83.35%;*/
}

#btn-cart:checked ~ .container-menu-cart .cont-menu-cart{
    transform: translateX(-2%);
}
.cont-menu-cart nav{
    transform: translateY(15%);
}
/*.cont-menu-cart nav a{
    display: block;
    text-decoration: none;
    padding:  20px;
    color: #000000;
    border-left: 5px solid transparent;
    transition: all 400ms ease;
}*/
/*
.cont-menu-cart nav a:hover{
    border-left: 0px solid #c7c7c7;
    background: #fa3d3b;
}*/
.cont-menu-cart label{
    position: absolute;
    right: 5px;
    top: 10px;
    color: #000000;
    cursor: pointer;
    font-size: 18px;
}

.cont-menu-cart nav .purchase-button button{
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

.cont-menu-cart nav .purchase-button{
    width: 100%;
    height: 59px;
}
</style>