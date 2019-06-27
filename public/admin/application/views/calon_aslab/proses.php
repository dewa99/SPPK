<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Pendaftar</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
                            <th>Nama Lengkap</th>
							<th>IPK</th>
							<th>Nilai Algo1</th>
							<th>Nilai Algo2</th>
							<th>Nilai Pbo1</th>
							<th>Nilai Pbo2</th>
							<th>Nilai Perweb</th>
							<th>Nilai Pemweb</th>
							<th>Alasan</th>
							<th>Sikap</th>
						</tr>
						<?php foreach ($data_pendaftar as $c) { ?>
							<tr>
								<td><?php echo $c['nama_lengkap']; ?></td>
								<td><?php echo $c['ipk']; ?></td>
                                <td><?php echo $c['nilai_algo1']; ?></td>
								<td><?php echo $c['nilai_algo2']; ?></td>
								<td><?php echo $c['nilai_pbo1']; ?></td>
								<td><?php echo $c['nilai_pbo2']; ?></td>
								<td><?php echo $c['nilai_perweb']; ?></td>
								<td><?php echo $c['nilai_pemweb']; ?></td>
								<td><?php echo $c['alasan']; ?></td>
								<td><?php echo $c['sikap']; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
        </div>
        
        <div class="box">
			<div class="box-header">
				<h3 class="box-title">Data bobot</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
                            <th>nama lengkap</th>
							<th>IPK</th>
							<th>Nilai Algo1</th>
							<th>Nilai Algo2</th>
							<th>Nilai Pbo1</th>
							<th>Nilai Pbo2</th>
							<th>Nilai Perweb</th>
							<th>Nilai Pemweb</th>
							<th>Alasan</th>
							<th>Sikap</th>
						</tr>
						<?php foreach ($data_bobot['data'] as $c) { ?>
							<tr>
                                <td><?php echo $c['nama_lengkap']; ?></td>
								<td><?php echo $c['ipk']; ?></td>
								<td><?php echo $c['nilai_algo1']; ?></td>
								<td><?php echo $c['nilai_algo2']; ?></td>
								<td><?php echo $c['nilai_pbo1']; ?></td>
								<td><?php echo $c['nilai_pbo2']; ?></td>
								<td><?php echo $c['nilai_perweb']; ?></td>
								<td><?php echo $c['nilai_pemweb']; ?></td>
								<td><?php echo $c['alasan']; ?></td>
								<td><?php echo $c['sikap']; ?></td>
							</tr>
                        <?php } ?>
                        <?php $c = $data_bobot['max']; ?>
							<tr>
                                <td> <b>MAX</b> </td>
								<td><?php echo $c['ipk']; ?></td>
								<td><?php echo $c['nilai_algo1']; ?></td>
								<td><?php echo $c['nilai_algo2']; ?></td>
								<td><?php echo $c['nilai_pbo1']; ?></td>
								<td><?php echo $c['nilai_pbo2']; ?></td>
								<td><?php echo $c['nilai_perweb']; ?></td>
								<td><?php echo $c['nilai_pemweb']; ?></td>
								<td><?php echo $c['alasan']; ?></td>
								<td><?php echo $c['sikap']; ?></td>
                            </tr>
                            <?php $c = $data_bobot['min']; ?>
							<tr>
                                <td> <b>MIN</b> </td>
								<td><?php echo $c['ipk']; ?></td>
								<td><?php echo $c['nilai_algo1']; ?></td>
								<td><?php echo $c['nilai_algo2']; ?></td>
								<td><?php echo $c['nilai_pbo1']; ?></td>
								<td><?php echo $c['nilai_pbo2']; ?></td>
								<td><?php echo $c['nilai_perweb']; ?></td>
								<td><?php echo $c['nilai_pemweb']; ?></td>
								<td><?php echo $c['alasan']; ?></td>
								<td><?php echo $c['sikap']; ?></td>
							</tr>
                    </table>
				</div>
			</div>
        </div>
        
        <div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Nilai Utility</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
                            <th>Nama Lengkap</th>
							<th>IPK</th>
							<th>Nilai Algo1</th>
							<th>Nilai Algo2</th>
							<th>Nilai Pbo1</th>
							<th>Nilai Pbo2</th>
							<th>Nilai Perweb</th>
							<th>Nilai Pemweb</th>
							<th>Alasan</th>
							<th>Sikap</th>
						</tr>
						<?php foreach ($nilai_utility as $c) { ?>
							<tr>
								<td><?php echo $c['nama_lengkap']; ?></td>
								<td><?php echo $c['ipk']; ?></td>
                                <td><?php echo $c['nilai_algo1']; ?></td>
								<td><?php echo $c['nilai_algo2']; ?></td>
								<td><?php echo $c['nilai_pbo1']; ?></td>
								<td><?php echo $c['nilai_pbo2']; ?></td>
								<td><?php echo $c['nilai_perweb']; ?></td>
								<td><?php echo $c['nilai_pemweb']; ?></td>
								<td><?php echo $c['alasan']; ?></td>
								<td><?php echo $c['sikap']; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
        </div>

        <div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Nilai Akhir</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
                            <th>Nama Lengkap</th>
							<th>IPK</th>
							<th>Nilai Algo1</th>
							<th>Nilai Algo2</th>
							<th>Nilai Pbo1</th>
							<th>Nilai Pbo2</th>
							<th>Nilai Perweb</th>
							<th>Nilai Pemweb</th>
                            <th>Alasan</th>
                            <th>Sikap</th>
							<th>Total</th>
						</tr>
						<?php foreach ($nilai_akhir as $c) { ?>
							<tr>
								<td><?php echo $c['nama_lengkap']; ?></td>
								<td><?php echo $c['ipk']; ?></td>
                                <td><?php echo $c['nilai_algo1']; ?></td>
								<td><?php echo $c['nilai_algo2']; ?></td>
								<td><?php echo $c['nilai_pbo1']; ?></td>
								<td><?php echo $c['nilai_pbo2']; ?></td>
								<td><?php echo $c['nilai_perweb']; ?></td>
								<td><?php echo $c['nilai_pemweb']; ?></td>
								<td><?php echo $c['alasan']; ?></td>
                                <td><?php echo $c['sikap']; ?></td>
                                <td><?php echo $c['total']; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
        </div>

        <div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Rangking akhir</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
                            <th>Nama Lengkap</th>
							<th>IPK</th>
							<th>Nilai Algo1</th>
							<th>Nilai Algo2</th>
							<th>Nilai Pbo1</th>
							<th>Nilai Pbo2</th>
							<th>Nilai Perweb</th>
							<th>Nilai Pemweb</th>
                            <th>Alasan</th>
                            <th>Sikap</th>
							<th>Total</th>
						</tr>
						<?php foreach ($rank as $c) { ?>
							<tr>
								<td><?php echo $c['nama_lengkap']; ?></td>
								<td><?php echo $c['ipk']; ?></td>
                                <td><?php echo $c['nilai_algo1']; ?></td>
								<td><?php echo $c['nilai_algo2']; ?></td>
								<td><?php echo $c['nilai_pbo1']; ?></td>
								<td><?php echo $c['nilai_pbo2']; ?></td>
								<td><?php echo $c['nilai_perweb']; ?></td>
								<td><?php echo $c['nilai_pemweb']; ?></td>
								<td><?php echo $c['alasan']; ?></td>
                                <td><?php echo $c['sikap']; ?></td>
                                <td><?php echo $c['total']; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
        </div>
	</div>
</div>