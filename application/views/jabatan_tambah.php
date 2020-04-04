<?php
$this->load->view('layout');
?>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<div class="container">
		<form class="form-horizontal" action="<?php echo 'tambah_aksi'; ?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Kode:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="kode" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Jabatan:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="jabatan" required></td>
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-2" for="email">Standart Gaji:</label>
				<div class="col-sm-6">
					<input type="text" name="standart_gaji" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Keterangan:</label>
				<div class="col-sm-6">
					<input type="text" name="keterangan" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Tambah">
			</div>
		</form>	
	</div>
</body>
</html>