<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Calon Aslab Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('calon_aslab/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nilai Algo1</th>
						<th>Nilai Algo2</th>
						<th>Nilai Pbo1</th>
						<th>Nilai Pbo2</th>
						<th>Nilai Perweb</th>
						<th>Nilai Pemweb</th>
						<th>Alasan</th>
						<th>Sikap</th>
						<th>Password</th>
						<th>Nama Lengkap</th>
						<th>Nim</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Hp</th>
						<th>Email</th>
						<th>Motto</th>
						<th>Motivasi</th>
						<th>Ipk</th>
						<th>Alamat</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($calon_aslab as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['nilai_algo1']; ?></td>
						<td><?php echo $c['nilai_algo2']; ?></td>
						<td><?php echo $c['nilai_pbo1']; ?></td>
						<td><?php echo $c['nilai_pbo2']; ?></td>
						<td><?php echo $c['nilai_perweb']; ?></td>
						<td><?php echo $c['nilai_pemweb']; ?></td>
						<td><?php echo $c['Alasan']; ?></td>
						<td><?php echo $c['Sikap']; ?></td>
						<td><?php echo $c['password']; ?></td>
						<td><?php echo $c['nama_lengkap']; ?></td>
						<td><?php echo $c['nim']; ?></td>
						<td><?php echo $c['tempat_lahir']; ?></td>
						<td><?php echo $c['tanggal_lahir']; ?></td>
						<td><?php echo $c['hp']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['motto']; ?></td>
						<td><?php echo $c['motivasi']; ?></td>
						<td><?php echo $c['ipk']; ?></td>
						<td><?php echo $c['alamat']; ?></td>
						<td>
                            <a href="<?php echo site_url('calon_aslab/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('calon_aslab/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
