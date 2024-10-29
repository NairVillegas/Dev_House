<?php
include 'header.php';
?>
<section class="carta py-5" style="background-color: #F2B8C6;">
    <div class="container">
        <h1 class="text-center mb-5">CARTA</h1>

        <div id="cartaCarousel" class="carousel slide" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <img src="imagenes/Carta01.jpg" class="d-block w-100 mx-auto" alt="Carta 1" style="border-radius: 15px;">
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="imagenes/Carta02.jpg" class="d-block w-100 mx-auto" alt="Carta 2" style="border-radius: 15px;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <img src="imagenes/Carta03.jpg" class="d-block w-100 mx-auto" alt="Carta 3" style="border-radius: 15px;">
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="imagenes/Carta04.jpg" class="d-block w-100 mx-auto" alt="Carta 4" style="border-radius: 15px;">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <img src="imagenes/Carta05.jpg" class="d-block w-100 mx-auto" alt="Carta 5" style="border-radius: 15px;">
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="imagenes/Carta06.jpg" class="d-block w-100 mx-auto" alt="Carta 6" style="border-radius: 15px;">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cartaCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cartaCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-outline-info mx-1" data-bs-target="#cartaCarousel" data-bs-slide-to="0" aria-current="true">1</button>
            <button class="btn btn-outline-info mx-1" data-bs-target="#cartaCarousel" data-bs-slide-to="1">2</button>
            <button class="btn btn-outline-info mx-1" data-bs-target="#cartaCarousel" data-bs-slide-to="2">3</button>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>
