<?php
$this->load->view('layout');
?>

<div class="wrapper">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
			<div class="box-body">
	<center><?php echo anchor('aturan/tambah','Tambah Data'); ?></center>
	<div class="table-responsive">
	<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Jabatan</th>
			<th>Masa Kerja</th>
			<th>Insentif</th>
			<th>Bonus</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach($aturan as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->jabatan ?></td>
			<td><?php echo $u->masa_kerja ?></td>
			<td><?php echo $u->insentif ?></td>
			<td><?php echo $u->bonus ?></td>
			<td>
			<?php echo anchor('aturan/edit/'.$u->jabatan,'Edit'); ?>
			<?php echo anchor('aturan/hapus/'.$u->jabatan,'Hapus'); ?>
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