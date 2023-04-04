

<div class="container">
    <?php if($this->session->flashData('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Data mahasiswa
            <strong>berhasil!</strong> <?= $this->session->flashData('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6 ">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah data mahasiswa</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <h2>Daftar mahasiswa</h2>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama'] ?>
                        <a href="<?= base_url()?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('apakah kamu yakin?')">hapus</a>
                        <a href="<?= base_url()?>mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-warning float-right mr-2" >edit</a>
                        <a href="<?= base_url()?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right mr-2" >detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>