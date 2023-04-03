<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Quote
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <?php echo validation_errors(); ?>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name='nama' id="nama" >
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" name='nim' id="nim" >
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Example select</label>
                            <select class="form-control" name='jurusan' id="jurusan">
                                <option value="teknik informatika">teknik informatika</option>
                                <option value="teknik mesin">teknik mesin</option>
                                <option value="teknik batubara">teknik batubara</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>