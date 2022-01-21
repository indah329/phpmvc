<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php flasher::flash();?>
  </div>
</div>

</div class="row">
<div class="col-lg-6">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
    tambah data pelajar
  </button>
  <br><br>
  <h3>Daftar Pelajar</h3>
  <ul class="list-group">
    <?php foreach ($data['plj'] as $plj) : ?>
      <li class="list-group-item">
        <?= $plj['nama']; ?>
        <a href="<?= BASEURL; ?>/pelajar/hapus/<?= $plj['id']; ?>" class="badge bg-danger float-end me-1"  onclick="return confirm('yakin?')">hapus</a>
        <a href="<?= BASEURL; ?>/pelajar/ubah/<?= $plj['id']; ?>" class="badge bg-warning float-end me-1" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<? $plj['id']; ?>">ubah</a>
        <a href="<?= BASEURL; ?>/pelajar/detail/<?= $plj['id']; ?>" class="badge bg-primary float-end me-1">detail</a>
        


      </li>
    <?php endforeach; ?> 
  </ul>

</div>
</div>

</div>  


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah data pelajar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/pelajar/tambah" method="post">
             <div class="form-group">
                 <label for="nama">Nama address</label>
                 <input type="text" class="form-control" id="nama" name="nama" />
              </div>

          <div class="form-group">
            <label for="nrp">nrp</label>
            <input type="number" class="form-control" id="nrp" name="nrp" />
          </div>


          <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email" />
          </div>

          <div class="form-group">
               <label for="jurusan">jurusan</label>
                 <select class="form-control" id="jurusan" name="jurusan">
                     <option value="rekayasa perangkat lunak">rekasaya perangkat lunak</option>
                 <option value="teknik komputer">teknik komputer</option>  
               <option value="rekayasa perangkat lunak">rekasaya perangkat lunak</option>
              <option value="multimedia">multimedia</option>
                   
            </select>
              </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
    </div>