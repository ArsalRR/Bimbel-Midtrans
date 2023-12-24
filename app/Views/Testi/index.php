<?php $this->extend('Template/User')?>
<?php $this->section('content')?>
<h1 class="text-center">Dasboard Rangking</h1>
<div class="row mt-5">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3>Tanya Jawab</h3>
                <p class="card-text textform1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3>Berprestasi</h3>
                <p class="card-text textform1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3>Mencerdaskan</h3>
                <p class="card-text textform1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <?php $this->section('javasc')?>
          <script>
    <?php if (session()->getFlashdata('berhasil')) : ?>
        Swal.fire(
            'Berhasil',
            '<?= session()->getFlashdata('berhasil') ?>',
            'success'
        ) 
    <?php endif ?>
</script>
          <?php $this->endSection();?>

<?php $this->endSection()?>