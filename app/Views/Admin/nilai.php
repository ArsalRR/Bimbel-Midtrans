<?php $this->extend('Template/Layout');?>
<?php $this->section('content')?>
<div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">
                    Massukan Dan Kritik
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Pesan</th>
                                <th>Penilaian</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                        $nomor = 1;
                         ?>
    <?php foreach ($tampildata as $s) :
        ?>
              <tr>
                                     <td><?= $nomor++; ?></td>
                                <td><?= $s['nama_siswa'] ?></td>
                                <td><?= $s['pesan'] ?></td>
                                <td><?= $s['rating'] ?></td>
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