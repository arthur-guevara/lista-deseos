<?= $this->extend('templates/dashboardTemplate') ?>

<?= $this->section('cards'); ?>

<?php foreach ($dataUsers as $dt) : ?>

    <div class="card">
        <div class="card-header pb-1">
            <h4 class="card-title text-center"><?= $dt['usuario'] ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12-md">
                        <img src="<?= base_url($dt['avatar']) ?>" class="img-fluid rounded mx-auto d-block profile" alt="usuario" id="userImg" style="max-width: 150px;">
                        <input type="file" name="imgInp" id="imgInp" hidden accept="image/*">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12-md">
                        <div class="form-group mb-3 text-center">
                            <label class="form-label ">Para navidad quiero ... </label>
                            <ul>
                                <?php $opciones = explode('*', $dt['wish']);
                                foreach ($opciones as $opcion) :    ?>
                                    <li><?= $opcion ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach ?>
<?= $this->endSection(); ?>