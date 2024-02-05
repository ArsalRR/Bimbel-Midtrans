<!doctype html>
<html lang="en">
  <head>
    <title>Hasil Laporan Siswa Bimbingan Belajar Rangking Bulanan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- Add any necessary styles in the head section of your HTML -->
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .text-center {
        text-align: center;
    }

    .card {
        margin: 20px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="card">
    <div class="card-header">
       <h1 class="text-center">Hasil Laporan Siswa Bimbingan Belajar Rangking Bulanan</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive datatable-minimal">
            <table class="table" id="table2">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Siswa</th>
                        <th>Alamat</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Tanggal Daftar</th>
                        <th class="text-center">Paket Yang Diambil</th>
                        <th class="text-center">Total Pendapatan Pertahun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($tampildata as $s) : ?>
                        <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $s['nama_lengkap'] ?></td>
                            <td><?= $s['alamat'] ?></td>
                            <td class="text-center"><?= $s['nominal'] ?></td>
                            <td class="text-center"><?= date('d-m-Y', strtotime($s['created_at'])) ?></td>
                            <td class="text-center"><?= $s['tipe_bimbel'] ?></td>
                            <td class="text-center"><?= $total ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div style="margin-top: 9rem;text-align:right">
                         <p> Ynag Bertangung jawab</p> <p> Admin<p>
                            </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>