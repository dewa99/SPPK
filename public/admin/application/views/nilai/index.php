<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Nilai Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('nilai/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Bobot</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($nilai as $n){ ?>
                    <tr>
						<td><?php echo $n['id']; ?></td>
						<td><?php echo $n['name']; ?></td>
						<td><?php echo $n['bobot']; ?></td>
						<td>
                            <a href="<?php echo site_url('nilai/edit/'.$n['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('nilai/remove/'.$n['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
