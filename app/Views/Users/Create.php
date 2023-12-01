<?= $this->extend('Users/index') ?>
<?= $this->section('daftar') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                      <h3 class="text-center">Form Pengisian Pendaftaran Bimbel</h3>
                    <form action="/Rangking/simpan" method="POST">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= (isset(session()->get('validation')['nama_lengkap'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Nama Lengkap" name="nama_lengkap" autofocus>
                                    <?php if (isset(session()->get('validation')['nama_lengkap'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['nama_lengkap']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Alamat</label>
                                    <input type="text" class="form-control <?= (isset(session()->get('validation')['alamat'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Alamat" name="alamat" autofocus>
                                    <?php if (isset(session()->get('validation')['alamat'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['alamat']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="email" class="form-control <?= (isset(session()->get('validation')['email'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Email" name="email" autofocus>
                                    <?php if (isset(session()->get('validation')['email'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['email']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">No Handphone</label>
                                    <input type="number" class="form-control <?= (isset(session()->get('validation')['no_hp'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Nomer Handphone" name="no_hp" autofocus>
                                    <?php if (isset(session()->get('validation')['no_hp'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['no_hp']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Asal Sekolah</label>
                                    <input type="text" class="form-control <?= (isset(session()->get('validation')['asal_sekolah'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Asal Sekolah" name="asal_sekolah" autofocus>
                                    <?php if (isset(session()->get('validation')['asal_sekolah'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['asal_sekolah']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
        <label for="" class="col-sm-2 col-form-label mr-3">Pilih Paket</label>
        <div class="col-sm-12">
            <select class="form-control <?= (isset($validation) && $validation->hasError('tipe_bimbel')) ? 'is-invalid' : '' ?>" name="tipe_bimbel">
            <?php if (isset(session()->get('validation')['tipe_bimbel'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['tipe_bimbel']; ?>
                                        </div>
                                    <?php endif ?>
            <option value="">===  Paket Bimbingan ===</option>
                                            <option value="Regular ">Paket Regular</option>
                                            <option value="Class Rangking">Class Rangking</option>
                                            <option value="Private Class">Private Class</option>
            </select>
          
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2 col-form-label mr-3">Pilih Nominal Harga</label>
        <div class="col-sm-12">
            <select class="form-control <?= (isset($validation) && $validation->hasError('nominal')) ? 'is-invalid' : '' ?>" name="nominal">
            <?php if (isset(session()->get('validation')['nominal'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['nominal']; ?>
                                        </div>
                                    <?php endif ?>
            <option value="">=== Pilih Paket Harga ===</option>
                                            <option value="1000000">Rp 1.000.000</option>
                                            <option value="2000000"> Rp 2.000.000</option>
                                            <option value="5000000"> Rp 5.000.000</option>
            </select>
          
        </div>
    </div>
                             
                                
                                <div class="form-group">
                            <label for="" class="col-sm-2 col-form-label mr-3">Nama Mentor</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="id_mentor">
         <option value="">-- Pilih Mentor -- </option>
                                    <?php foreach ($mentor as $m) : ?>
                                        <option value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                      <button type="submit" class="btn btn-warning">Daftar Sekarang</button>
                <a href="/User" class="btn btn-primary"><i class="bi bi-house"></i></a>
                            </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?= $this->endSection() ?>