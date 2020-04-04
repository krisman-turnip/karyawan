<?php
$this->load->view('layout');
?>

<div class="wrapper">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
			<div class="box-body">
	<center><?php echo anchor('Jabatan/tambah','Tambah Data'); ?></center>
	<div class="table-responsive">
	<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Jabatan</th>
			<th>Standart Gaji</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach($jabatan as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->kode ?></td>
			<td><?php echo $u->jabatan ?></td>
			<td><?php echo $u->standart_gaji ?></td>
			<td><?php echo $u->keterangan ?></td>
			<td>
			<?php echo anchor('jabatan/edit/'.$u->kode,'edit'); ?>
			<?php echo anchor('jabatan/hapus/'.$u->kode,'Hapus'); ?>
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