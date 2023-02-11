<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Administrator</h2>
								<h5 class="text-white op-7 mb-2">Selamat Datang, <b class="text-warning"><?=$data['nama_admin']; ?></b> | Admin Control</h5>
							</div>
							<!-- <div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
							</div> -->
						</div>
					</div>
				</div>
<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<center>
											<img src="../assets/img/fakultas teknik.png" width="350">
											<br>
											<br>
										</center>
									</div>
									<div class="card-category">
										<center>
	Jl. Pendidikan, No. 27, Remu Utara, Malaingkedi, Kec. Sorong Utara, Kota Sorong, Papua 98416
	<br>Email :- Telp.-
										</center>
									</div>
								</div>
							</div>
							<div class="card">
									<div class="card-body">
										<div class="card-title">
											<center>
											<canvas id="my"></canvas>
											</center>
										</div>		
									</div>
								</div>
					
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-secondary card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="flaticon-users"></i>
																</div>
															</div>
															<div class="col-7 col-stats">
																<div class="numbers">
																	<p class="card-category">Total Mahasiswa Teknik</p>
																	<h4 class="card-title"><?php echo $jumlahGuru; ?></h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-default card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="fas fa-user-tie"></i>
																</div>
															</div>
														<div class="col-7 col-stats">
													<div class="numbers">
														<p class="card-category">Total Pengunjung</p>
														<h4 class="card-title"><?php echo $jumlahSiswa; ?></h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="card">
								<div class="card-body">
									<div class="card-title">
										<center>
										<canvas id="myChart"></canvas>
										</center>
									</div>			
									</div>
								</div>
						</div>
					<div class="row">		
					<?php
					$ckb = "SELECT DAYNAME(tanggal) AS 'hari',COUNT(*) AS 'total' FROM tb_visit GROUP BY tanggal";
					$xxv = "SELECT tanggal AS 'hari',COUNT(*) AS 'total' FROM tb_visit WHERE tanggal >=DATE(NOW()) - INTERVAL 7 DAY GROUP BY tanggal";
					$quer = mysqli_query($con, $xxv);

	while($dat = mysqli_fetch_array($quer)){
		//ambil nilai dari database
		$jur = $dat['hari'];
		$nama_jurus .= "'$jur'". ",";
		//ambil total dari database
		$jum = $dat['total'];
		$jumla .= "$jum". ",";
		$hig = 5 + $jumlah;
	}
	?>
					
									<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [<?= $nama_jurus ?>],
				datasets: [{
					label: 'Data pengunjung',
					data: [<?php echo $jumla ?>, <?= $hig ?>],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>		
	<?php
	$sql = "SELECT jurusan,COUNT(*) as 'total' FROM tb_mahasiswa GROUP by jurusan";
	$query = mysqli_query($con, $sql);

	while($data = mysqli_fetch_array($query)){
		//ambil nilai dari database
		$jur = $data['jurusan'];
		$nama_jurusan .= "'$jur'". ",";
		//ambil total dari database
		$jum = $data['total'];
		$jumlah .= "$jum". ",";
		$high = 5 + $jumlah;
	}
	?>
<script>
		var ctx = document.getElementById("my").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [<?php echo $nama_jurusan?>],
				datasets: [{
					label: 'Data Mahasiswa Jurusan Teknik',
					data: [<?php echo $jumlah ?>, <?= $high ?>],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(255, 99, 132, 0.2)',
						'rgba(255, 99, 132, 0.2)',
						'rgba(255, 99, 132, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(255,99,132,1)',
					'rgba(255,99,132,1)',
					'rgba(255,99,132,1)',
					],
					borderWidth: 2 
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>						
</div>
	</div>