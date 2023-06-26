<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>

<div class="container">
    <div class="col">
        <div class="row">



            <?php if (is_null($tb_giwan)) {
                echo "Tidak ada data bro, pilih level yang lain ya ^_^";
            } else {
            ?>
                <div>Kategori / Status / Tersedia </div>
                <div> <?= $label; ?> / <?= $status; ?> / <?= $count_tb_giwan; ?></div>


                <div class="d-grid gap-2 mb-5 mt-1">
                    <button class="btn btn-success fs-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <?= $tb_giwan['b_inggris']; ?>
                    </button>

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body text-center">
                            <?= $tb_giwan['b_indo']; ?>
                        </div>
                    </div>

                </div>

                <div class="d-grid gap-2">

                    <form action="/simpan/giwan/<?= $tb_giwan['label']; ?>/<?= $tb_giwan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-danger" name="status" value="Ulangi1">
                    </form>

                    <form action="/simpan/giwan/<?= $tb_giwan['label']; ?>/<?= $tb_giwan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-danger" name="status" value="Ulangi2">
                    </form>

                    <form action="/simpan/giwan/<?= $tb_giwan['label']; ?>/<?= $tb_giwan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-warning" name="status" value="Cukup1">
                    </form>

                    <form action="/simpan/giwan/<?= $tb_giwan['label']; ?>/<?= $tb_giwan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-warning" name="status" value="Cukup2">
                    </form>

                    <form action="/simpan/giwan/<?= $tb_giwan['label']; ?>/<?= $tb_giwan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-info" name="status" value="Lancar1">
                    </form>

                    <form action="/simpan/giwan/<?= $tb_giwan['label']; ?>/<?= $tb_giwan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_giwan['id']; ?>">
                        <input type="submit" class="btn btn-outline-info" name="status" value="Lancar2">
                    </form>

                </div>

            <?php  }
            ?>

        </div>

    </div>
</div>
</div>

<?= $this->EndSection(); ?>