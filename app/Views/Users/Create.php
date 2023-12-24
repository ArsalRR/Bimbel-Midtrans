<?= $this->extend('Users/index') ?>
<?= $this->section('daftar') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                      <h3 class="text-center">Form Pengisian Pendaftaran Bimbel</h3>
                    <form  id="myForm" action="/Rangking/simpan" method="POST" >
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
        <select class="form-control <?= (isset($validation) && $validation->hasError('tipe_bimbel')) ? 'is-invalid' : '' ?>" name="tipe_bimbel" id="tipe_bimbel" onchange="updateNominal()">
            <?php if (isset(session()->get('validation')['tipe_bimbel'])) : ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= session()->get('validation')['tipe_bimbel']; ?>
                </div>
            <?php endif ?>
            <option value="">===  Paket Bimbingan ===</option>
            <option value="Regular" id="regularOption">Paket Regular</option>
            <option value="Class Rangking" id="rangkingOption">Class Rangking</option>
            <option value="Private Class" id="privateOption">Private Class</option>
        </select>
        <p id="paketPenuhMessage" style="color: red; display: none;">Paket telah penuh</p>
    </div>
</div>

    <div class="form-group">
    <label for="" class="col-sm-2 col-form-label mr-3" >Harga Bimbel</label>
    <div class="col-sm-12">
        <select class="form-control" name="nominal" id="nominal" disabled>
            <option value="">Total Harga</option>
            <option value="1000000">Rp 1.000.000</option>
            <option value="2000000">Rp 2.000.000</option>
            <option value="5000000">Rp 5.000.000</option>
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
    <script>
    function updateNominal() {
        const tipeBimbel = document.getElementById('tipe_bimbel');
        const pilihnominal = document.getElementById('nominal');
        const paketPenuhMessage = document.getElementById('paketPenuhMessage');

        const pilihtipe = tipeBimbel.options[tipeBimbel.selectedIndex].value;

        switch (pilihtipe) {
            case 'Regular':
                pilihnominal.value = '1000000';
                break;
            case 'Class Rangking':
                pilihnominal.value = '2000000';
                break;
            case 'Private Class':
                pilihnominal.value = '5000000';
                break;
            default:
                pilihnominal.value = '';
                break;
        }

        const selectedRegular = document.querySelectorAll('#tipe_bimbel option:checked[value="Regular"]');
        const selectedRangking = document.querySelectorAll('#tipe_bimbel option:checked[value="Class Rangking"]');
        const selectedPrivate = document.querySelectorAll('#tipe_bimbel option:checked[value="Private Class"]');

        const regularOption = document.querySelector('#tipe_bimbel option[value="Regular"]');
        const rangkingOption = document.querySelector('#tipe_bimbel option[value="Class Rangking"]');
        const privateOption = document.querySelector('#tipe_bimbel option[value="Private Class"]');
        
        regularOption.disabled = selectedRegular.length >= 2;
        rangkingOption.disabled = selectedRangking.length >= 3;
        privateOption.disabled = selectedPrivate.length >= 4;

        paketPenuhMessage.style.display = (regularOption.disabled || rangkingOption.disabled || privateOption.disabled) ? 'block' : 'none';
    }

    document.addEventListener('DOMContentLoaded', function () {
        const myForm = document.getElementById('myForm');

        myForm.addEventListener('submit', function () {
            const nominalSelect = document.getElementById('nominal');
            nominalSelect.removeAttribute('disabled');
        });
    });
</script>
    

    
<?= $this->endSection() ?>