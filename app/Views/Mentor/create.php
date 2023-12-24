<?= $this->extend('Template/Layout') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                      <h3 class="text-center">Form Mentor</h3>
                    <form action="/TaskControll/simpan" method="POST"enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Mentor</label>
                                    <input type="text" class="form-control <?= (isset(session()->get('validation')['nama'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Nama Mentor" name="nama" autofocus>
                                    <?php if (isset(session()->get('validation')['nama'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['nama']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Pelajaran Yang diajar</label>
                                    <input type="text" class="form-control <?= (isset(session()->get('validation')['pelajaran'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Pelajaran" name="pelajaran" autofocus>
                                    <?php if (isset(session()->get('validation')['pelajaran'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['pelajaran']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Jam Pelajaran Dimulai</label>
                                    <input type="time" class="form-control <?= (isset(session()->get('validation')['jampel'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Jam Pelajaran" name="jampel" autofocus>
                                    <?php if (isset(session()->get('validation')['jampel'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['jampel']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Uplod Foto Mentor</label>
                                    <input type="file" class="form-control <?= (isset(session()->get('validation')['foto_mentor'])) ? 'is-invalid' : '' ?>" id="exampleInputUsername1" placeholder="Foto Mentor" name="foto_mentor" autofocus>
                                    <?php if (isset(session()->get('validation')['foto_mentor'])) : ?>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= session()->get('validation')['foto_mentor']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
    <label class="font-weight-bold">Materi</label>
    <textarea class="form-control <?php echo isset($validation) && $validation->hasError('materi') ? 'is-invalid' : ''; ?>" name="materi" rows="5" placeholder="Masukkan Materi Yang akan diajarkan"><?= set_value('materi'); ?></textarea>
    <?php if (isset($validation) && $validation->hasError('materi')) : ?>
        <div class="alert alert-danger mt-2">
            <?= $validation->getError('materi'); ?>
        </div>
    <?php endif; ?>
</div>
                                </div>
                             
                        </div>
                        <div class="modal-footer">
                      <button type="submit" class="btn btn-warning pr-3">Inputkan Mentor</button>
                <a href="/TaskControll" class="btn btn-primary"><i class="bi bi-house"></i></a>
                            </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?= $this->endSection() ?>