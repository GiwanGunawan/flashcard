<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>

<div class="container">
    <div class="col">
        <div class="row">



            <?php if (is_null($tb_jihan)) {
                echo "Tidak ada data bro, pilih level yang lain ya ^_^";
            } else {
            ?>

                <div class="mt-2">kata yang tersedia: <?= $count_tb_jihan; ?></div>

                <div class="d-grid gap-2 mb-5 mt-1">
                    <button class="btn btn-success fs-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <?= $tb_jihan['b_inggris']; ?>
                    </button>

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body text-center">
                            <?= $tb_jihan['b_indo']; ?>
                        </div>
                    </div>

                </div>

                <div class="d-grid gap-2">

                    <form action="/simpan/jihan/<?= $tb_jihan['label']; ?>/<?= $tb_jihan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_jihan['id']; ?>">
                        <input type="submit" class="btn btn-outline-danger" name="status" value="Ulangi1">
                    </form>

                    <form action="/simpan/jihan/<?= $tb_jihan['label']; ?>/<?= $tb_jihan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_jihan['id']; ?>">
                        <input type="submit" class="btn btn-outline-danger" name="status" value="Ulangi2">
                    </form>

                    <form action="/simpan/jihan/<?= $tb_jihan['label']; ?>/<?= $tb_jihan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_jihan['id']; ?>">
                        <input type="submit" class="btn btn-outline-warning" name="status" value="Cukup1">
                    </form>

                    <form action="/simpan/jihan/<?= $tb_jihan['label']; ?>/<?= $tb_jihan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_jihan['id']; ?>">
                        <input type="submit" class="btn btn-outline-warning" name="status" value="Cukup2">
                    </form>

                    <form action="/simpan/jihan/<?= $tb_jihan['label']; ?>/<?= $tb_jihan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_jihan['id']; ?>">
                        <input type="submit" class="btn btn-outline-info" name="status" value="Lancar1">
                    </form>

                    <form action="/simpan/jihan/<?= $tb_jihan['label']; ?>/<?= $tb_jihan['status']; ?>" method="post" class="d-grid">
                        <!-- code anti bajak, biar aman     -->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $tb_jihan['id']; ?>">
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