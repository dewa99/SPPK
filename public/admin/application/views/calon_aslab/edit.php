<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Calon Aslab Edit</h3>
            </div>
			<?php echo form_open('calon_aslab/edit/'.$calon_aslab['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nilai_algo1" class="control-label">Nilai</label>
						<div class="form-group">
							<select name="nilai_algo1" class="form-control">
								<option value="">select nilai</option>
								<?php 
								foreach($all_nilai as $nilai)
								{
									$selected = ($nilai['id'] == $calon_aslab['nilai_algo1']) ? ' selected="selected"' : "";

									echo '<option value="'.$nilai['id'].'" '.$selected.'>'.$nilai['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('nilai_algo1');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai_algo2" class="control-label">Nilai</label>
						<div class="form-group">
							<select name="nilai_algo2" class="form-control">
								<option value="">select nilai</option>
								<?php 
								foreach($all_nilai as $nilai)
								{
									$selected = ($nilai['id'] == $calon_aslab['nilai_algo2']) ? ' selected="selected"' : "";

									echo '<option value="'.$nilai['id'].'" '.$selected.'>'.$nilai['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('nilai_algo2');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai_pbo1" class="control-label">Nilai</label>
						<div class="form-group">
							<select name="nilai_pbo1" class="form-control">
								<option value="">select nilai</option>
								<?php 
								foreach($all_nilai as $nilai)
								{
									$selected = ($nilai['id'] == $calon_aslab['nilai_pbo1']) ? ' selected="selected"' : "";

									echo '<option value="'.$nilai['id'].'" '.$selected.'>'.$nilai['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('nilai_pbo1');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai_pbo2" class="control-label">Nilai</label>
						<div class="form-group">
							<select name="nilai_pbo2" class="form-control">
								<option value="">select nilai</option>
								<?php 
								foreach($all_nilai as $nilai)
								{
									$selected = ($nilai['id'] == $calon_aslab['nilai_pbo2']) ? ' selected="selected"' : "";

									echo '<option value="'.$nilai['id'].'" '.$selected.'>'.$nilai['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('nilai_pbo2');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai_perweb" class="control-label">Nilai</label>
						<div class="form-group">
							<select name="nilai_perweb" class="form-control">
								<option value="">select nilai</option>
								<?php 
								foreach($all_nilai as $nilai)
								{
									$selected = ($nilai['id'] == $calon_aslab['nilai_perweb']) ? ' selected="selected"' : "";

									echo '<option value="'.$nilai['id'].'" '.$selected.'>'.$nilai['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('nilai_perweb');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nilai_pemweb" class="control-label">Nilai</label>
						<div class="form-group">
							<select name="nilai_pemweb" class="form-control">
								<option value="">select nilai</option>
								<?php 
								foreach($all_nilai as $nilai)
								{
									$selected = ($nilai['id'] == $calon_aslab['nilai_pemweb']) ? ' selected="selected"' : "";

									echo '<option value="'.$nilai['id'].'" '.$selected.'>'.$nilai['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('nilai_pemweb');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Alasan" class="control-label">Alasan</label>
						<div class="form-group">
							<select name="Alasan" class="form-control">
								<option value="">select alasan</option>
								<?php 
								foreach($all_alasan as $alasan)
								{
									$selected = ($alasan['id'] == $calon_aslab['Alasan']) ? ' selected="selected"' : "";

									echo '<option value="'.$alasan['id'].'" '.$selected.'>'.$alasan['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('Alasan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Sikap" class="control-label">Sikap</label>
						<div class="form-group">
							<select name="Sikap" class="form-control">
								<option value="">select sikap</option>
								<?php 
								foreach($all_sikap as $sikap)
								{
									$selected = ($sikap['id'] == $calon_aslab['Sikap']) ? ' selected="selected"' : "";

									echo '<option value="'.$sikap['id'].'" '.$selected.'>'.$sikap['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('Sikap');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $calon_aslab['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_lengkap" class="control-label"><span class="text-danger">*</span>Nama Lengkap</label>
						<div class="form-group">
							<input type="text" name="nama_lengkap" value="<?php echo ($this->input->post('nama_lengkap') ? $this->input->post('nama_lengkap') : $calon_aslab['nama_lengkap']); ?>" class="form-control" id="nama_lengkap" />
							<span class="text-danger"><?php echo form_error('nama_lengkap');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nim" class="control-label"><span class="text-danger">*</span>Nim</label>
						<div class="form-group">
							<input type="text" name="nim" value="<?php echo ($this->input->post('nim') ? $this->input->post('nim') : $calon_aslab['nim']); ?>" class="form-control" id="nim" />
							<span class="text-danger"><?php echo form_error('nim');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempat_lahir" class="control-label"><span class="text-danger">*</span>Tempat Lahir</label>
						<div class="form-group">
							<input type="text" name="tempat_lahir" value="<?php echo ($this->input->post('tempat_lahir') ? $this->input->post('tempat_lahir') : $calon_aslab['tempat_lahir']); ?>" class="form-control" id="tempat_lahir" />
							<span class="text-danger"><?php echo form_error('tempat_lahir');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_lahir" class="control-label"><span class="text-danger">*</span>Tanggal Lahir</label>
						<div class="form-group">
							<input type="text" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $calon_aslab['tanggal_lahir']); ?>" class="has-datepicker form-control" id="tanggal_lahir" />
							<span class="text-danger"><?php echo form_error('tanggal_lahir');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="hp" class="control-label"><span class="text-danger">*</span>Hp</label>
						<div class="form-group">
							<input type="text" name="hp" value="<?php echo ($this->input->post('hp') ? $this->input->post('hp') : $calon_aslab['hp']); ?>" class="form-control" id="hp" />
							<span class="text-danger"><?php echo form_error('hp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $calon_aslab['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="motto" class="control-label"><span class="text-danger">*</span>Motto</label>
						<div class="form-group">
							<input type="text" name="motto" value="<?php echo ($this->input->post('motto') ? $this->input->post('motto') : $calon_aslab['motto']); ?>" class="form-control" id="motto" />
							<span class="text-danger"><?php echo form_error('motto');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="motivasi" class="control-label"><span class="text-danger">*</span>Motivasi</label>
						<div class="form-group">
							<input type="text" name="motivasi" value="<?php echo ($this->input->post('motivasi') ? $this->input->post('motivasi') : $calon_aslab['motivasi']); ?>" class="form-control" id="motivasi" />
							<span class="text-danger"><?php echo form_error('motivasi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ipk" class="control-label"><span class="text-danger">*</span>Ipk</label>
						<div class="form-group">
							<input type="text" name="ipk" value="<?php echo ($this->input->post('ipk') ? $this->input->post('ipk') : $calon_aslab['ipk']); ?>" class="form-control" id="ipk" />
							<span class="text-danger"><?php echo form_error('ipk');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $calon_aslab['alamat']); ?></textarea>
							<span class="text-danger"><?php echo form_error('alamat');?></span>
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