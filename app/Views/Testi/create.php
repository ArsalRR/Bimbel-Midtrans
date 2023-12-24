<?= $this->extend('Template/User') ?>
<?= $this->section('content') ?>
<style>
    .rating {
      unicode-bidi: bidi-override;
      direction: rtl;
      text-align: left;
    }

    .rating input {
      display: none;
    }

    .rating label {
      display: inline-block;
      padding: 5px;
      font-size: 24px;
      cursor: pointer;
      color: #ddd;
    }

    .rating label:before {
      content: '\2605';
    }

    .rating input:checked ~ label {
      color: #f90;
    }
  </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Masukkan Testimonial</h3>
                    <form action="/TestiController/simpan" method="POST">
                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Siswa</label>
                            <input type="text" class="form-control <?= (isset(session()->get('validation')['nama_siswa'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Masukkan Nama Siswa" name="nama_siswa" autofocus>
                            <?php if (isset(session()->get('validation')['nama_siswa'])) : ?>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= session()->get('validation')['nama_siswa']; ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Masukkan Pesan dan Kesan</label>
                            <input type="text" class="form-control <?= (isset(session()->get('validation')['pesan'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Masukkan Pesan dan Kesan" name="pesan" autofocus>
                            <?php if (isset(session()->get('validation')['pesan'])) : ?>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= session()->get('validation')['pesan']; ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 col-form-label mr-3">Bagaimana Pelayanan Kami</label>
                            <div class="col-sm-12">
                                <div class="rating">
                                    <input type="radio" id="star5" name="rating" value="Sangat Baik">
                                    <label for="star5">Sangat Baik</label>
                                    <input type="radio" id="star4" name="rating" value="Baik">
                                    <label for="star4">Baik</label>
                                    <input type="radio" id="star3" name="rating" value="Buruk">
                                    <label for="star3">Buruk</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/TaskControll" class="btn btn-warning"><i class="bi bi-house"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
 
    
<?= $this->endSection() ?>