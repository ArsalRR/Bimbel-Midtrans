<?= $this->extend('Template/Layout') ?>
<?= $this->section('content') ?>
<h1 class="text-center">Form Email Verifikasi</h1>
<form action="/Rangking/sendEmail" method="post">
<div class="row mt-5">
                    <label for="judul" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="nama_lengkap" autofocus value="<?= $siswa['nama_lengkap']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                
                    <div class="row mt-4">
                    <label for="penerbit" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="email" value="<?= $siswa['email']; ?>">
                    </div>
                </div>
  <td>
  <button type="submit" class="btn btn-primary"><i class="bi bi-send-check-fill"></i></button>
    <a href="/Rangking/index" class="btn btn-info"><i class="bi bi-house-door"></i></a>
  </td>
</form>
<?= $this->section('javasc') ?>
<script>
    <?php if (session()->getFlashdata('berhasil')) : ?>
        Swal.fire(
            'Berhasil',
            '<?= session()->getFlashdata('berhasil') ?>',
            'success'
        )
    <?php endif ?>
    <?php if (session()->getFlashdata('gagal')) : ?>
        Swal.fire(
            'Gagal!',
            '<?= session()->getFlashdata('gagal') ?>',
            'error'
        )
    <?php endif ?>
</script>
<?= $this->endSection() ?>
<?= $this->endSection() ?>