<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>

<div class="container">
    <div class="col">
        <div class="row">

            <div class="container mb-3">
                <div class="row">
                    <div class="col">

                        Bismillah, atas izin Allah web/site ini diperuntukan untuk keluarga tercinta sebagai salah satu sarana belajar.
                        <br><br>
                        ^_^
                        <br><br>

                        Semangat Belajar !!

                    </div>

                </div>
            </div>

            <footer>
                <div class="environment">

                    <p>Page rendered in {elapsed_time} seconds</p>

                    <p>Environment: <?= ENVIRONMENT ?></p>

                </div>

                <div class="copyrights">

                    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
                        open source licence.</p>

                </div>

            </footer>

        </div>

    </div>
</div>
</div>

<?= $this->EndSection(); ?>