<?php
include 'header.php';
?>
<section class="hero text-center text-white d-flex justify-content-center align-items-center" 
         style="background-image: url('imagenes/fondo.png'); height: 400px; background-size: cover; background-position: center; margin: 0; padding: 0; border: 0;">
    <div>
        <h1 class="display-4">DevHouse</h1>
        <p class="lead">Coworking & Café</p>
        <a href="Reservar.php" class="btn btn-light me-2">Reservar</a>
        <a href="#" class="btn btn-dark">Comprar</a>
    </div>
</section>
<section class="festival-oriental text-center" style="margin: 0; padding: 0; border: 0;">
    <img src="imagenes/4.jpg" alt="Festival Oriental" class="img-fluid w-100" style="display: block; margin: 0; padding: 0; border: 0;">
</section>
<section class="productos py-5" style="background-color: #F2B8C6;">
    <div class="container">
        <div class="text-center mb-4">
            <button class="btn btn-info mx-2 rounded-pill">Destacados</button>
            <button class="btn btn-info mx-2 rounded-pill">Más Recientes</button>
            <button class="btn btn-info mx-2 rounded-pill">Mejores Vendidos</button>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card shadow" style="border-radius: 15px;">
                    <img src="imagenes/brownie.jpg" class="card-img-top" alt="Brownie" style="border-radius: 15px 15px 0 0;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3">Brownie</h5>
                        <p class="price" style="font-weight: bold; color: #333;">S/7.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card shadow" style="border-radius: 15px;">
                    <img src="imagenes/pankeke.jpg" class="card-img-top" alt="Creps de Fresas y Arándanos" style="border-radius: 15px 15px 0 0;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3">Creps de Fresas y Arándanos</h5>
                        <p class="price" style="font-weight: bold; color: #333;">S/13.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card shadow" style="border-radius: 15px;">
                    <img src="imagenes/sanwguches.jpg" class="card-img-top" alt="Salchipapa Clásica" style="border-radius: 15px 15px 0 0;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3">Salchipapa Clásica</h5>
                        <p class="price" style="font-weight: bold; color: #333;">S/10.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>
