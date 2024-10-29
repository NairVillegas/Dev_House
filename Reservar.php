<?php
include 'header.php';
?>
<section class="hero text-center text-white d-flex justify-content-center align-items-center" 
         style="background-image: url('imagenes/fondo.png'); height: 400px; background-size: cover; background-position: center; margin: 0; padding: 0; border: 0;">
    <div>
        <h1 class="display-4">DevHouse</h1>
        <p class="lead">Coworking & Café</p>
        <a href="#" class="btn btn-light me-2">Reservar</a>
        <a href="#" class="btn btn-dark">Comprar</a>
    </div>
</section>  
<section class="reservas py-5" style="background-color: #F2B8C6;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <img src="imagenes/sala.jpg" alt="Imagen de Reservas" class="img-fluid rounded" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
            </div>
            <div class="col-md-6">
                <div class="card shadow" style="border-radius: 15px;">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">RESERVAR</h3>
                        <form>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Nombre completo" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipoReserva" class="form-label">Tipo</label>
                                <select class="form-select" id="tipoReserva" required>
                                    <option value="Mesas">Mesas</option>
                                    <option value="Oficinas">Oficinas</option>
                                    <option value="Salas">Salas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="fechaReserva" class="form-label">Fecha</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="fechaReserva" placeholder="dd/mm/yy" required>
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="cantidadPersonas" class="form-label">Cantidad de Personas</label>
                                <input type="number" class="form-control" id="cantidadPersonas" placeholder="Personas" required>
                            </div>
                            <div class="mb-3">
                                <label for="correoReserva" class="form-label">Número o Correo</label>
                                <input type="text" class="form-control" id="correoReserva" placeholder="Número o Correo" required>
                            </div>
                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="terminos" required>
                                <label class="form-check-label" for="terminos"><a href="">Acepto términos y condiciones</a></label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Reservar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>