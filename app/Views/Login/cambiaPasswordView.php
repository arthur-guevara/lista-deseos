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
                            <p class="text-subtitle text-muted">Pa' que luego no digas que te jakiaron</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Cambio de contraseña</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cambiar contraseña</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="<?= base_url('updatePass') ?>">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Ingresa tu contraseña</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="hidden" value="<?= $id ?>" name="id">
                                                    <input type="password" id="password" class="form-control" name="password">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Escribe de nuevo tu contraseña</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="password" id="password-confirm" class="form-control" name="password-confirm">
                                                </div>
                                                <div class="alert alert-primary" id="errors" hidden></div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1" disabled id="btn">Actualizar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?= $this->include('templates/footer') ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="<?= base_url('template/assets/js/bootstrap.js') ?>  "></script>
    <script src="<?= base_url('template/assets/js/app.js') ?>  "></script>
    <script src="<?= base_url('template/assets/js/extensions/jquery.password-validation.js') ?>  "></script>
    <script>
        $(document).ready(function() {

            let url = '<?= base_url('updatePass') ?>' ;
            $("#password").passwordValidation({
                "confirmField": "#password-confirm"
            }, function(element, valid, match, failedCases) {
                console.log(failedCases);
                failedCases.length > 0 ? $("#errors").text(failedCases[0]) : $('#errors').prop('hidden', true);
                if (valid) $(element).css("border", "2px solid green");
                if (!valid) $(element).css("border", "2px solid red");
                if (valid && match) {
                    $('#btn').prop('disabled', false);
                    $("#password-confirm").css("border", "2px solid green")
                    $('#errors').prop('hidden', true);

                }

                if (!valid || !match) {
                    $('#errors').prop('hidden', false)
                    $('#btn').prop('disabled', true);
                    $("#password-confirm").css("border", "2px solid red");
                }

            });
        });
    </script>
</body>

</html>