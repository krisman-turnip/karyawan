<?php
$this->load->view('layout');
?>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<div class="container">
		<form class="form-horizontal" action="<?php echo 'tambah_aksi'; ?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">NIP:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="nip" required> 
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Nama:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="nama" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Jenis Kelamin:</label>
				<div class="col-sm-6">
				<select name="jenis_kelamin" class="form-control" >
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-2" for="email">Tanggal Lahir:</label>
				<div class="col-sm-6">
					<input type="text" name="tanggal_lahir" class="form_control" id="datepicker1" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Telepon:</label>
				<div class="col-sm-6">
					<input type="text" name="telp" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-6">
				<td><input type="text" name="email" class="form-control" required></td>
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Alamat:</label>
				<div class="col-sm-6">
				<td><input type="text" name="alamat" class="form-control" required></td>
			</div>
			</div>
			<div class="form-group">
				<<label class="control-label col-sm-2" for="email">Jabatan:</label>
				<div class="col-sm-6">
                <select name="jabatan" value="<?php echo $u->jenis_kelamin ?> " class="form-control">
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
				<td><input type="text" name="masa_kerja" class="form-control" required></td>
			</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Tambah">
			</div>
		</form>	
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('.input-tanggal').datepicker({dateFormat:"yy-mm-dd"});		
	});
</script>
<script>
  $( function() {
    $("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
