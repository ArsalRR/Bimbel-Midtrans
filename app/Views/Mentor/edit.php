<?php $this->extend('Template/Layout');?>
<?php $this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col-8  mb-10">
            <h2 class="my-3">Form Ubah Data Mentor</h2>
            <form action="/TaskControll/update/<?= $mentor['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $mentor['id']; ?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Nama Mentor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="nama" autofocus value="<?= $mentor['nama']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="pelajaran" autofocus value="<?= $mentor['pelajaran']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Materi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="materi" autofocus value="<?= $mentor['materi']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Jam Mata Pelajaran</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="penulis" name="jampel" value="<?= $mentor['jampel']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
                <a href="/TaskControll" class="btn btn-secondary">Kembali</a>
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