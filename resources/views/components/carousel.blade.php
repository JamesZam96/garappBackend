<div class="container">
    <div id="theCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#theCarousel" data-slide-to="1"></li>
            <li data-target="#theCarousel" data-slide-to="2"></li>
            <li data-target="#theCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://www.bcu.ac.uk/mediaitem/visual-communication-illustration-02-130585258441045504.jpg?quality=90" alt="Ilustracion">
                <div class="carousel-caption">
                    <h3>Gusti Ilustración</h3>
                    <p>Exposición</p>
                </div>
            </div>

            <div class="item">
                <img src="https://ugc.kn3.net/i/origin/http://thisiscolossal.com/wp-content/uploads/2011/02/anthony-2-600x424.jpg" alt="fotografia">
                <div class="carousel-caption">
                    <h3>Xataka Fotografía</h3>
                    <p>Concurso</p>
                </div>
            </div>

            <div class="item">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/e86e8b59124321.5a15e4ccd8622.jpg" alt="pintura">
                <div class="carousel-caption">
                    <h3>DoArt Pintura</h3>
                    <p>Curso</p>
                </div>
            </div>

            <div class="item">
                <img src="https://cdn.dribbble.com/users/324248/screenshots/3978513/planet2_800.jpg" alt="diseno">
                <div class="carousel-caption">
                    <h3>UX UI Diseño Gráfico</h3>
                    <p>Curso</p>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">anterior</span>
        </a>
        <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">siguiente</span>
        </a>
    </div>
</div>

<style>
    .container {
        max-width: 100%;
        padding: 0;
    }

    #theCarousel {
        width: 100%;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .item {
        position: relative;
        display: none;
        width: 100%;
    }

    .item.active {
        display: block;
    }

    .item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0,0,0,.6);
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none;
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #000\9;
        background-color: rgba(0,0,0,0);
        border: 1px solid #fff;
        border-radius: 10px;
    }

    .carousel-indicators .active {
        width: 12px;
        height: 12px;
        margin: 0;
        background-color: #fff;
    }

    .carousel-control {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 15%;
        font-size: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0,0,0,.6);
        background-color: rgba(0,0,0,0);
        filter: alpha(opacity=50);
        opacity: .5;
    }

    .carousel-control.left {
        background-image: linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
    }

    .carousel-control.right {
        right: 0;
        left: auto;
        background-image: linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);
    }

    .glyphicon-chevron-left, .glyphicon-chevron-right {
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
        margin-top: -10px;
    }

    .glyphicon-chevron-left {
        left: 50%;
        margin-left: -10px;
    }

    .glyphicon-chevron-right {
        right: 50%;
        margin-right: -10px;
    }
</style>