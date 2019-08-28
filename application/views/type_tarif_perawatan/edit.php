<?php echo form_open('type_tarif_perawatan/edit/'.$type_tarif_perawatan['kd_type_prwtn'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="kd_jenis_perawatan" class="col-md-4 control-label">Kd Jenis Perawatan</label>
		<div class="col-md-8">
			<input type="text" name="kd_jenis_perawatan" value="<?php echo ($this->input->post('kd_jenis_perawatan') ? $this->input->post('kd_jenis_perawatan') : $type_tarif_perawatan['kd_jenis_perawatan']); ?>" class="form-control" id="kd_jenis_perawatan" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_tarif_master" class="col-md-4 control-label">Kd Tarif Master</label>
		<div class="col-md-8">
			<input type="text" name="kd_tarif_master" value="<?php echo ($this->input->post('kd_tarif_master') ? $this->input->post('kd_tarif_master') : $type_tarif_perawatan['kd_tarif_master']); ?>" class="form-control" id="kd_tarif_master" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>