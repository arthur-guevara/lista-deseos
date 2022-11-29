<!DOCTYPE html>
<html lang="en">

<?= $this->include('templates/header') ?>


<body>
    <div id="app">
        <?= $this->include('templates/sidebar') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ingresa Nueva contraseña</h3>
                            <p class="text-subtitle text-muted">Lugar para que escribas lo que quieres de regalo, o pongas links !</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mi lista</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                </section>
            </div>

            <?= $this->include('templates/footer') ?>

        </div>
    </div>
    <script src="<?= base_url('template/assets/js/bootstrap.js') ?>  "></script>
    <script src="<?= base_url('template/assets/js/app.js') ?>  "></script>

</body>

</html>