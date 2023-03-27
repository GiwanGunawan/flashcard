<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>

<div class="container">
    <div class="col">
        <div class="row">

            <div class="container mb-3">
                <div class="row">
                    <div class="col">

                        <form action="/giwan" method="POST">
                            <?= csrf_field(); ?>
                            <select name="filterlevel" class="form-control btn btn-primary" onchange="this.form.submit()">
                                <option value="Default">Default</option>
                                <option value="Ulangi">Ulangi</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Lancar">Lancar</option>

                            </select>
                        </form>


                    </div>
                </div>
            </div>

            <?php if (is_null($tb_giwan)) {
                echo "Tidak ada data bro, pilih level yang lain ya ^_^";
            } else {
            ?>

                <button class="btn btn-success fs-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <?= $tb_giwan['b_inggris']; ?>
                </button>

                <div class="collapse" id="collapseExample">
                    <div class="card card-body text-center">
                        <?= $tb_giwan['b_indo']; ?>
                    </div>
                </div>

                <div class="d-grid gap-2 my-5">
                    <form action="/giwan/simpan" method="post">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-primary" name="status" value="Lancar">
                    </form>

                    <form action="/giwan/simpan" method="post">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-primary" name="status" value="Cukup">
                    </form>

                    <form action="/giwan/simpan" method="post">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-danger" name="status" value="Ulangi">
                    </form>
                    <form action="/giwan/simpan" method="post">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-danger" name="status" value="default">
                    </form>
                </div>

            <?php  }
            ?>

        </div>

    </div>
</div>
</div>

<?= $this->EndSection(); ?>