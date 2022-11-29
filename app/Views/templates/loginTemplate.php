<!DOCTYPE html>
<html lang="es">

<?= $this->include('templates/header') ?>


<body>
    <div id="auth" style="background: url(<?= base_url('template/assets/images/bg/christmas-background.jpg') ?>);">
        <div class="row h-100">
            <div class="col-lg-5 col-12" style="background: url(<?= base_url('template/assets/images/bg/christmas-background.jpg') ?>);">
                <div id="auth-left">
                    <div class="auth-logo text-center mb-4">
                        <img src="<?= base_url('template/assets/images/logo/arbol-de-navidad.png') ?>" alt="Logo">
                    </div>
                    <h1 class="auth-title" style="color: white;">Ingresar</h1>
                    <p class="auth-subtitle mb-4">Wishlist de la familia Guevara y asociados.</p>

                    <form action="<?= base_url('/login') ?>" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Usuario" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="password" class="form-control form-control-xl" placeholder="Contraseña" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-success btn-block btn-lg shadow-lg mt-5">Acceder</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</body>

</html>