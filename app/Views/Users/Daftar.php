<?= $this->extend('Users/index') ?>
<?= $this->section('daftar') ?>
    <?php foreach($tampildata as $s)?>
    <div class="container-xxl py-5" id="pricing">
                <div class="container py-5 px-lg-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Daftar Harga</h5>
                        <h1 class="mb-5">Paket Bimbel Rangking</h1>
                    </div>
                    <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-center bg-primary-gradient rounded-pill mb-5">
                        </ul>
                        <div class="tab-content text-start">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="bg-light rounded">
                                            <div class="border-bottom p-4 mb-4">
                                                <h4 class="text-primary-gradient mb-1">Regular Rangking</h4>
                                                <span>Awesome Paket</span>
                                            </div>
                                            <div class="p-4 pt-0">
                                                <h1 class="mb-3">
                                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>1.000.000<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                                </h1>
                                                <div class="d-flex justify-content-between mb-3"><span>Buku</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>Les 3 hari</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span> <?php
                                                
                                                if ($s['id'] >= 2) : ?>
                                                  <button type="button" class="btn btn-lg btn-danger" disabled>Kelas Telah Penuh</button>
                        <?php else : ?>
                          <a href="/User/Create" class="btn btn-primary">Daftar Sekarang</a>              
                        <?php endif ?>
                                             
                                    </div>
     
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="bg-light rounded border">
                                            <div class="border-bottom p-4 mb-4">
                                                <h4 class="text-primary-gradient mb-1">Class Rangking</h4>
                                                <span>Powerful</span>
                                            </div>
                                            <div class="p-4 pt-0">
                                                <h1 class="mb-3">
                                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>2.0000.0000<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                                </h1>
                                                <div class="d-flex justify-content-between mb-3"><span>Buku</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>Les 4 Hari</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>Conseling</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            
                                                <div class="d-flex justify-content-between mb-3"><span> <?php
                                             
                                                if ($s['id'] >= 3) : ?>
                                                  <button type="button" class="btn btn-lg btn-danger" disabled>Kelas Telah Penuh</button>
                        <?php else : ?>
                          <a href="/User/Create" class="btn btn-primary">Daftar Sekarang</a>              
                        <?php endif ?>
                                             
                                    </div>
                                              
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="bg-light rounded">
                                            <div class="border-bottom p-4 mb-4">
                                                <h4 class="text-primary-gradient mb-1">First Class Rangking</h4>
                                                <span>Powerful & Awesome</span>
                                            </div>
                                            <div class="p-4 pt-0">
                                                <h1 class="mb-3">
                                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>5.000.000<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                                </h1>
                                                <div class="d-flex justify-content-between mb-3"><span>Buku Paket</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>waktu Les Bebas</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>Conseling</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>  
                                                <div class="d-flex justify-content-between mb-2"><span>Private Class</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span> <?php 
                                               
                                                if ($s['id'] >= 4) : ?>
                                                  <button type="button" class="btn btn-lg btn-danger" disabled>Kelas Telah Penuh</button>
                        <?php else : ?>
                          <a href="/User/Create" class="btn btn-primary">Daftar Sekarang</a>              
                        <?php endif ?>
                        
<?= $this->endSection() ?>