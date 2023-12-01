<?php $this->extend('Template/Layout');?>
<?php $this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col-8  mb-10">
            <h2 class="my-3">Form Ubah Data Pendaftar</h2>
            <form action="/Rangking/update/<?= $siswa['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="nama_lengkap" autofocus value="<?= $siswa['nama_lengkap']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="judul" name="email" autofocus value="<?= $siswa['email']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="alamat" value="<?= $siswa['alamat']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="no_hp" value="<?= $siswa['no_hp']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Asal Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="asal_sekolah" value="<?= $siswa['asal_sekolah']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
                <a href="/Rangking" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->section('script') ?>
<script>
    <?php if (session()->getFlashdata('berhasil')) : ?>
        Swal.fire(
            'Berhasil',
            '<?= session()->getFlashdata('berhasil') ?>',
            'success'
        )
    <?php endif ?>
</script>
<?= $this->endSection() ?>
<?php $this->endSection()?>