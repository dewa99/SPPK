<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sikap Edit</h3>
            </div>
			<?php echo form_open('sikap/edit/'.$sikap['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $sikap['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bobot" class="control-label"><span class="text-danger">*</span>Bobot</label>
						<div class="form-group">
							<input type="text" name="bobot" value="<?php echo ($this->input->post('bobot') ? $this->input->post('bobot') : $sikap['bobot']); ?>" class="form-control" id="bobot" />
							<span class="text-danger"><?php echo form_error('bobot');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>