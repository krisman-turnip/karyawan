<?php
$this->load->view('layout');
?>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<div class="container">
    <?php foreach($jabatan as $u){ ?>
		<form class="form-horizontal" action="<?php echo '../updateJabatan'; ?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Kode:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="kode" value="<?php echo $u->kode ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Jabatan:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="jabatan" value="<?php echo $u->jabatan ?>"></td>
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-2" for="email">Standart Gaji:</label>
				<div class="col-sm-6">
					<input type="text" name="standart_gaji" class="form-control" value="<?php echo $u->standart_gaji ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Keterangan:</label>
				<div class="col-sm-6">
					<input type="text" name="keterangan" class="form-control" value="<?php echo $u->keterangan ?>">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Tambah">
			</div>
		</form>	
        <?php } ?>
	</div>
</body>
</html>