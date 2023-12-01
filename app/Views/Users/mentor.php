<?= $this->extend('Users/index') ?>
<?= $this->section('mentor') ?>
<section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Mentor
      </h2>
      <p class="text-center">
        Perpengalaman Dalam Pession
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card">
            <?php foreach($mentor as $m):?>  
              <div class="card-body">
              <div class="card">
            <div class="text-center">
            <?php if ($m['foto_mentor']): ?>
                <img src="<?= base_url('hasil/' . $m['foto_mentor']) ?>" alt="Foto Mentor" style="max-width: 200px; max-height: 200px;">
            <?php else: ?>
                Tanpa Foto
            <?php endif; ?>
              <h5 class=" "><?= $m['nama'] ?></h5>
              <h5><?= $m['pelajaran'] ?></h5>
              <h5><?= $m['jampel'] ?></h5>
              </div> 
            </div>
            </div>
            <?php endforeach?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?= $this->endSection() ?>