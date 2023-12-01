<?php $this->extend('Template/Layout');?>
<?php $this->section('content')?>
<div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Data Pendaftar
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Asal Sekolah</th>
                                <th>Harga</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor = 1 + (($nohalaman - 1) * 5); ?>
    <?php foreach ($siswa as $s) :
    $id = $s['id_order'];
    $serverkey = base64_encode("SB-Mid-server-II_md8vOI_7aaHmQaiOp0XHZ:");
    $url = "https://api.sandbox.midtrans.com/v2/". $id ."/status";
    $header = array(
        'Accept: application/json',
   'Authorization: Basic '. $serverkey ,
   'Content-Type: application/json'
    );
    $method = 'GET';
    $cuel = curl_init();
    curl_setopt($cuel,CURLOPT_URL,$url);
    curl_setopt($cuel,CURLOPT_HTTPHEADER,$header);
    curl_setopt($cuel,CURLOPT_CUSTOMREQUEST,$method);
    curl_setopt($cuel,CURLOPT_POSTFIELDS,false);
    curl_setopt($cuel,CURLINFO_HEADER_OUT,true);
    curl_setopt($cuel,CURLOPT_RETURNTRANSFER,true);
    $hasil = curl_exec($cuel);
    $json = json_decode($hasil,true);
        ?>
              <tr>
                                     <td><?= $nomor++; ?></td>
                                <td><?= $s['nama_lengkap'] ?></td>
                                <td><?= $s['alamat'] ?></td>
                                <td><?= $s['email'] ?></td>
                                <td><?= $s['no_hp'] ?></td>
                                <td><?= $s['asal_sekolah'] ?></td>
                                <td><?= $s['nominal'] ?></td>
                                <td><?= $json['status_message'] ?></td>
                               <td>
                                   <a href="/Rangking/formedit/<?= $s['alias'] ?>" class="badge bg-primary"><i class="bi bi-pen-fill"></i></a>
                                   <a href="<?= base_url('Rangking/delete/'.$s['id']) ?>" class="badge bg-danger" onclick="return confirm('Apa kamu Yakin?')"><i class="bi bi-trash3-fill"></i></a>
                                   <a href="/Rangking/formemail/<?= $s['alias'] ?>" class="badge bg-success"><i class="bi bi-envelope"></i></a>
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