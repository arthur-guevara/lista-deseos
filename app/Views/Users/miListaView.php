<?= $this->extend('templates/miListaTemplate') ?>

<?= $this->section('cards'); ?>

<div class="card">
    <div class="card-header pb-1">
        <h4 class="card-title text-center"><?= $nombre ?></h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-12-md">
                    <img src="<?= base_url("template/assets/images/faces/2.jpg") ?>" class="img-fluid rounded mx-auto d-block profile" alt="usuario" id="userImg" style="max-width: 150px;">
                    <input type="file" name="imgInp" id="imgInp" hidden accept="image/*">
                </div>
            </div>

            <div class="row">
                <div class="col-12-md">
                    <div class="form-group mb-3 text-center">
                        <label for="exampleFormControlTextarea1" class="form-label ">Para navidad quiero ... </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"><?= $myData ?></textarea>
                    </div>
                </div>
                <button class="btn btn-success text-center">Enviar</button>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>