

	<div class="container mt-5">

	<div class="card shadow">
	<div class="card-header">
		<h2> Aplikasi Hapus Antrian dan Pendaftaran SIM RS</h2>
		<hr>
	</div>
	<?php if ($this->session->flashdata('succses')) : ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('succses'); ?>
                    </div>
                <?php endif; ?>
	<?php echo form_open('welcome/edit') ?>
<div class="card-body">
	<div class="row mt-4">
	<div class="col form-group">
			<label>Kode Dokter</label>
			<input type="text" name="kode_dokter" class="form-control">
		</div>
		<div class=" col form-group">
			<label>Tanggal</label>
			<input type="date" name="tanggal" class="form-control">
		</div>
	</div>

		<div class="row mt-2">
		<div class=" col form-group">
			<label>No MR</label>
			<input type="number" name="nomr1" class="form-control">
		</div>
		<br>
		<br>
		<div class="mt-4">
            <p>sampai</p>
        </div>
		<div class="col form-group">
			<label>No MR</label>
			<input type="number" name="nomr2" class="form-control">
		</div>
		</div>
		<div class="">
	<button type="submit"  class="btn-sm btn-warning">LIHAT</button>
	<!-- <a href="welcome/edit" class="btn-sm btn-success">Lihat Pasien</a> -->
	<!-- onclick="return confirm('Yakin Hapus?')" -->
	</div>
	</div>


	
<?php echo form_close(); ?>
	

	</div>
	</div>

	<!-- <div class="container col-10 mt-3">
		<table class="table table-bordered">
			<tr>

				<th class="text-center">No</th>
				<th class="text-center">No Antrian</th>
				<th class="text-center">No MR</th>
				<th class="text-center">Nama Pasien</th>
				<th class="text-center">Tanggal Pendaftaran</th>
			</tr>
			<tr>
				<?php 
				$no=1;
				foreach ($antrian as $row){				
				?>


				<td><?= $no++?></td>
				<td><?= $row->Nomor;?></td>
				<td><?= $row->No_MR;?></td>
				<td><?= $row->Nama_Pasien;?></td>
				<td><?= $row->Tanggal;?></td>
			</tr>
			<?php } ?>
		</table>
	</div> -->

