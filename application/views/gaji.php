<?php
$this->load->view('layout');
?>

<div class="wrapper">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
			<div class="box-body">
	<center><?php echo anchor('gaji/tambah','Tambah Data'); ?></center>
	<div class="table-responsive">
	<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nip</th>
			<th>Nama Karyawan</th>
			<th>Tanggal Penerimaan</th>
			<th>Nominal</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach($gaji as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->kode_penggajian ?></td>
			<td><?php echo $u->nip ?></td>
			<td><?php echo $u->nama_karyawan ?></td>
			<td><?php echo $u->tanggal_penerimaan ?></td>
            <td><?php echo $u->nominal ?></td>

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