<?php $this->extend('Template/User')?>
<?php $this->section('content')?>
<div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">
                    Data Order 
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Order</th>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Asal Sekolah</th>
                                <th>Paket Bimbel</th>
                                <th>Harga</th>
                                <th>Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor = 1;?>
    <?php foreach ($tampildata as $s) : ?>
              <tr>
                                     <td><?= $nomor++; ?></td>
                                <td><?= $s['id_order'] ?></td>
                                <td><?= $s['nama_lengkap'] ?></td>
                                <td><?= $s['alamat'] ?></td>
                                <td><?= $s['email'] ?></td>
                                <td><?= $s['no_hp'] ?></td>
                                <td><?= $s['asal_sekolah'] ?></td>
                                <td><?= $s['tipe_bimbel'] ?></td>
                                <td><?= $s['nominal'] ?></td>
                                <td>
                                <a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/<?= $s['token'] ?>" target="blank" class="btn btn-warning rounded-circle"><i class="bi bi-cash"></i></a>                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
         </div>
            </div>
        </div>
        <?= $this->section('javasc') ?>
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