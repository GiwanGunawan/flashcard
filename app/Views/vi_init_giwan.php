<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>

<div class="container">
    <div class="col">
        <div class="row">

            <div class="container mb-3">
                <div class="row">
                    <div class="col">

                        <form action="/giwan/init" method="POST" class="d-grid gap-2 my-5">
                            Pilih Kategori :
                            <select name="label" class="form-control btn btn-outline-primary">
                                <option value="Most 1000">Most 1000</option>
                                <option value="Most 2000">Most 2000</option>
                                <option value="Most 3000">Most 3000</option>
                            </select>

                            Pilih Status :
                            <select name="status" class="form-control btn btn-outline-primary">
                                <option value="Ulangi1">Ulangi1</option>
                                <option value="Ulangi2">Ulangi2</option>
                                <option value="Cukup1">Cukup1</option>
                                <option value="Cukup2">Cukup2</option>
                                <option value="Lancar1">Lancar1</option>
                                <option value="Lancar2">Lancar2</option>
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