<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>

<div class="container">
    <div class="col">
        <div class="row">

            <div class="container mb-3">
                <div class="row">
                    <div class="col">

                        <form action="/giwan/select" method="POST" class="d-grid gap-2 my-5">
                            Pilih Kategori :
                            <select name="label" class="form-control btn btn-outline-primary">
                                <option value="Most 1000">Most 1000</option>
                                <option value="Most 2000">Most 2000</option>
                                <option value="Most 3000">Most 3000</option>
                            </select>

                            Pilih Status :
                            <select name="status" class="form-control btn btn-outline-primary">
                                <option value="Default">Default</option>
                                <option value="Ulangi">Ulangi</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Lancar">Lancar</option>
                            </select>
                            <br>
                            Mulai Yuk!
                            <button type="submit" class="btn btn-outline-primary">LET'S GO !!!</button>
                        </form>


                    </div>
                </div>
            </div>



        </div>

    </div>
</div>
</div>

<?= $this->EndSection(); ?>