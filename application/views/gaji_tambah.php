<?php
$this->load->view('layout');
?>
	<center>
		<h3>Tambah gaji baru</h3>
	</center>
	<div class="container">
		<form class="form-horizontal" action="<?php echo 'tambah_aksi'; ?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">NIP:</label>
				<div class="col-sm-6">
                <select name="nip" class="col-sm-2">
                    <?php 
                    foreach($karyawan as $row)
                    { 
                    echo '<option value="'.$row->nip.'">'.$row->nip.'</option>';
                    }
                    ?>
                </select>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Tambah">
			</div>
		</form>	
	</div>
</body>
</html>