<div class="container mt-5">

<div class="card shadow">
<div class="card-header">
    <h2><?=$title?></h2>
    <hr>
</div>
<?php if ($this->session->flashdata('succses')) : ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('succses'); ?>
                </div>
            <?php endif; ?>

<div class="card-body">
<div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Dokter</th>
          <th scope="col">Jenis Spesialis</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
      
        foreach ($dokters as $dokter){ 
            ?>
            <tr>
              <th scope="row"><?=$no++?></th>
              <td><?=$dokter->Nama_Dokter?></td>
              <td><?=$dokter->Spesialis?></td>
              <td>
                <?php if ($dokter->status=='aktif'){?>
                    <span class="badge badge-success"><?=$dokter->status?></span>
                <?php } else { ?>
                    <span class="badge badge-danger"><?=$dokter->status?></span>
                <?php } ?>
          
                </td>
              <td>      <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-edit-dokter<?=$dokter->Kode_Dokter?>"> Edit</button></td>
            </tr>
    
        <?php } ?>
    
      </tbody>
    </table>
    
</div>

</div>

<!-- modal cppt -->
<?php foreach ($dokters as $dokter){?>
    <div class="modal fade" id="modal-edit-dokter<?=$dokter->Kode_Dokter?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Dokter</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?php echo base_url('Dokter/update_dokter'); ?>" method="POST">
                    <div class="card-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" name="kode_dokter" value="<?=$dokter->Kode_Dokter?>">
                                    <label>Status Aktif/Tidak </label>
                                   <select name="status" id="" class="form-control">
                                    <option value="">pilih</option>
                                    <option value="aktif" <?= $dokter->status ==  'aktif' ? 'selected' : '' ?>>aktif</option>
                                    <option value="nonaktif" <?= $dokter->status ==  'nonaktif' ? 'selected' : '' ?>>nonaktif</option>
                                   </select>
                                </div>
                        </div>
                    
                    </div>
    
                </div>
                <div class="card-footer text-left">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Simpan</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>

<?php } ?>