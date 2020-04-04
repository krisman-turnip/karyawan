<?php
$this->load->view('layout');
?>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<div class="container">
		<form class="form-horizontal" action="<?php echo 'tambah_aksi'; ?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Jabatan:</label>
				<div class="col-sm-6">
                <select name="jenis_kelamin" class="col-sm-2" value="<?php echo $u->jenis_kelamin ?>">
                    <?php 
                    foreach($jabatan as $row)
                    { 
                    echo '<option value="'.$row->kode.'">'.$row->jabatan.'</option>';
                    }
                    ?>
                </select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Masa Kerja:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="masa_kerja" required></td>
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-2" for="email">Insentif:</label>
				<div class="col-sm-6">
					<input type="text" name="insentif" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Bonus:</label>
				<div class="col-sm-6">
					<input type="text" name="bonus" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Tambah">
			</div>
		</form>	
	</div>
</body>
</html>