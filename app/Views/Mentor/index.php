<?php $this->extend('Template/Layout');?>
<?php $this->section('content')?>
<div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">
                    Mentor Bimbel
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Mentor</th>
                                <th>Mata Pelajaran</th>
                                <th>Jam Pelajaran</th>
                                <th>Materi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                        $nomor = 1 + (($nohalaman - 1) * 5);
                         ?>
    <?php foreach ($mentor as $s) :
        ?>
              <tr>
                                     <td><?= $nomor++; ?></td>
                                <td> <img src="<?= base_url('hasil/' . $s['foto_mentor']); ?>" alt="Photo" style="width: 100px;"></td>
                                <td><?= $s['nama'] ?></td>
                                <td><?= $s['pelajaran'] ?></td>
                                <td><?= $s['jampel'] ?></td>
                                <td><?= $s['materi'] ?></td>
                               <td>
                                   <a href="/TaskControll/formedit/<?= $s['alias'] ?>" class="badge bg-primary"><i class="bi bi-pen-fill"></i></a>
                                   <a href="<?= base_url('TaskControll/delete/'.$s['id']) ?>" class="badge bg-danger" onclick="return confirm('Apa kamu Yakin?')"><i class="bi bi-trash3-fill"></i></a>
                                   <a href="/taskControll/create" class="badge bg-primary"><i class="bi bi-cloud-plus-fill"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="float-center">
  <?= $pager->links('daftar', 'paging'); ?>
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