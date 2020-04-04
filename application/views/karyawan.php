
<?php
$this->load->view('layout');
?>

<div class="wrapper">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
			<div class="box-body">
	<center><?php echo anchor('Karyawan/tambah','Tambah Data'); ?></center>
	<div class="table-responsive">
	<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Telepon</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Jabatan</th>
			<th>Masa Kerja</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		foreach($karyawan as $u){ 
		?>
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nip ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td><?php echo $u->tanggal_lahir ?></td>
			<td><?php echo $u->telp ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->jabatan ?></td>
			<td><?php echo $u->masa_kerja ?></td>
			
			<td>
			<?php echo anchor('karyawan/edit/'.$u->nip,'edit'); ?>
			<?php echo anchor('karyawan/hapus/'.$u->nip,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

