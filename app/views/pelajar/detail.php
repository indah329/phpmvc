<div class="container mt-5"> 

<div class="card" style="width: 18rem;">
   <div class="card-body">
    <h5 class="card-title"><?= $data['plj']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['plj']['nrp'];?></h6>
    <p class="card-text"><?= $data['plj']['email']; ?></p
    <p class="card-text"><?= $data['plj']['jurusan']; ?></p>
    <a href="<?=BASEURL; ?>/pelajar" class="card-link">kembali</a>
  </div>
</div>

</div>