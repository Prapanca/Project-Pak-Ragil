	<?php if ($this->session->flashdata('message')==1) { ?>
	<!--
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
		<h4>Error</h4>
		<?php echo $this->session->flashdata('alert')?>
	</div>	
	-->
	<?php } ?>
	
	<?php if ($this->session->flashdata('message')=="sukses") { ?>
	<div class="alert alert-block alert-success">
		<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
		<h4>Sukses</h4>
		<?php echo $this->session->flashdata('alert')?>
	</div>	
	<?php } ?>
	
	<?php $attributes = array('class' => 'form-horizontal');
		echo form_open('c_jurusan/update_ak_prosiding', $attributes);
	?>
	
	<div class="control-group">
		<label class="control-label" for="internasional">Internasional</label>
		<div class="controls">
			<input type="text" name="internasional"/>
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="nasional">Nasional Terakreditasi</label>
		<div class="controls">
		 <input type="text" name="nasional" />
		</div>
	</div>
	
	<div class="form-actions">
		<button class="btn btn-info" type="submit">
			<i class="icon-ok bigger-110"></i>
			Submit
		</button>

		&nbsp; &nbsp; &nbsp;
		<button class="btn" type="reset">
			<i class="icon-undo bigger-110"></i>
			Reset
		</button>
	</div>
	

<h4>
BOBOT AK PROSIDING
</h4>
<table class="table table-striped table-bordered example">
		<thead>
			<tr>
				<th>No</th>
				<th>Internasional</th>
				<th>Nasional</th>
				
			</tr>
		</thead>
			
		<tbody>
			<?php
				$jumlah = count($query);
				for ($i=0;  $i<$jumlah; $i++){
					$data = $query[$i];
			
						echo "<tr>
							 <td>1</td>
							 <td>$data[internasional]</td>
							 <td>$data[nasional]</td>
							 </tr>
				    ";
				}
			?>
		</tbody>
	</table>
