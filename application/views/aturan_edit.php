<?php
$this->load->view('layout');
?>
	<center>
		<h3>Edit data</h3>
	</center>
	<div class="container">
    <?php foreach($aturan as $u){ ?>
		<form class="form-horizontal" action="<?php echo '../updateAturan'; ?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Jabatan:</label>
				<div class="col-sm-6">
                <select name="jabatan" class="col-sm-2">
                    <?php 
                    foreach($aturan as $row)
                    { 
                    echo '<option value="'.$row->jabatan.'">'.$row->jabatan.'</option>';
                    }
                    ?>
                    <?php 
                    foreach($a as $rows)
                    { 
                    echo '<option value="'.$rows->kode.'">'.$rows->jabatan.'</option>';
                    }
                    ?> 
                </select> 
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Masa Kerja:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="masa_kerja" value="<?php echo $u->masa_kerja ?>"></td>
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-2" for="email">Insentif:</label>
				<div class="col-sm-6">
					<input type="text" name="insentif" class="form-control" value="<?php echo $u->insentif ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Bonus:</label>
				<div class="col-sm-6">
					<input type="text" name="bonus" class="form-control" value="<?php echo $u->bonus ?>"">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Edit">
			</div>
		</form>	
        <?php } ?>
	</div>
</body>
</html>