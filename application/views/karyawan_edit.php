<?php
$this->load->view('layout');
?>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<div class="container">
    <?php foreach($karyawan as $u){ ?>
	<form class="form-horizontal" action="<?php echo '../update'; ?>" method="post">
				<div class="form-group">
				<label class="control-label col-sm-2" for="email">NIP:</label>
				<div class="col-sm-6">
					<input type="text" name="nip" class="form-control" value="<?php echo $u->nip ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Nama:</label>
				<div class="col-sm-6">
				<input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Jenis Kelamin:</label>
				<div class="col-sm-6">
				<select name="jenis_kelamin" class="form-control" value="<?php echo $u->jenis_kelamin ?>">
                    <?php 
                    foreach($karyawan as $row)
                    { 
                    echo '<option value="'.$row->jenis_kelamin.'">'.$row->jenis_kelamin.'</option>';
                    }
                    ?>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                    </select>
                </div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-2" for="email">Tanggal Lahir:</label>
				<div class="col-sm-6">
				<input type="text" name="tanggal_lahir" class="form-control" id="datepicker1" value="<?php echo $u->tanggal_lahir ?>">
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Telp:</label>
				<div class="col-sm-6">
				<input type="text" name="telp" class="form-control" value="<?php echo $u->telp ?>">
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-6">
				<td><input type="text" name="email" class="form-control" value="<?php echo $u->email ?>">
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Alamat:</label>
				<div class="col-sm-6">
				<input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat ?>">
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Jabatan:</label>
				<div class="col-sm-6">
                <select name="jenis_kelamin" class="form-control" value="<?php echo $u->jenis_kelamin ?> " class="form-control">
                    <?php 
                    foreach($karyawan as $row)
                    { 
                    echo '<option value="'.$row->jabatan.'">'.$row->jabatan.'</option>';
                    }
                    ?>
                </select>
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Masa Kerja:</label>
				<div class="col-sm-6">
				<input type="text" class="form-control" name="masa_kerja" value="<?php echo $u->masa_kerja ?>">
			</div>
			</div>
			<div class="form-group">
				<div class="col-sm-6">
			<input type="submit" value="Edit"></td>
			</div>
			</div>
		</table>
	</form>	
    <?php } ?>
</body>
</html>
<script>
  $( function() {
    $("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
  <script type="text/javascript">
	$(document).ready(function(){
		$('.input-tanggal').datepicker({dateFormat:"yy-mm-dd"});		
	});
</script>