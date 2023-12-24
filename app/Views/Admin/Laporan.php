<?php $this->extend('Template/Layout');?>
<?php $this->section('content')?>
<div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">
                    Laporan Siswa
                </h5>
            </div>
            <form action="<?= base_url('User/Print') ?>" method="get" class="mb-3">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="bulanSelect">Pilih Bulan</label>
                        <select class="form-control" id="bulanSelect" name="bulanSelect">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <!-- ... -->
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>Nama Mentor</th>
                                <th>Alamat</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor = 1; ?>
    <?php foreach ($tampildata as $s) :
        ?>
              <tr>
                                     <td><?= $nomor++; ?></td>
                                <td><?= $s['nama_lengkap'] ?></td>
                                <td><?= $s['pelajaran'] ?></td>
                                <td><?= $s['nama'] ?></td>
                                <td><?= $s['alamat'] ?></td>
                                <td><?= $s['nominal'] ?></td>
                               
                               <td>
                                   <a href="/User/cek" class="badge bg-success"><i class="bi bi-printer-fill"></i></a>
                                   <a href="/User/Print" class="badge bg-primary"><i class="bi bi-newspaper"></i></a>
                                   <a href="/Rangking/Exel" class="badge bg-primary"><i class="bi bi-file-earmark"></i></a>
                                   
                                </td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                        
                    </table>

                    <div style="margin-top: 9rem;text-align:right">
                         <p> Total Pendapatan</p> <p> Rp  <?= $total?><p>
                            </div>
                           
  
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