<?php
session_start();
include '../config/db.php';
if (!isset($_SESSION['admin'])) {
	?>
	<script>
		alert('Maaf ! Anda Belum Login !!');
		window.location = 'index.php';
	</script> 
<?php
} 
?>
<?php

// jumlah siswa
$jumlahGuru = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_mahasiswa"));
// jumlah guru
$jumlahSiswa = mysqli_num_rows(mysqli_query($con, "SELECT DISTINCT ip from tb_visit"));

$id_login = @$_SESSION['admin'];


$sql = mysqli_query($con, "SELECT * FROM tb_admin
 WHERE id_admin = '$id_login'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Administrator</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/kepala.png" type="image/png" />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: { "families": ["Lato:300,400,700,900"] },
			custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css'] },
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="dashboard.php" class="logo">
					<!-- <img src="../assets/img/mts.png" alt="navbar brand" class="navbar-brand" width="40"> -->
					<b class="text-white">Dashboard Admin</b>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<!-- 	<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div> -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<!-- <li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li> -->



						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
								aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/user/<?= $data['foto'] ?>" alt="..."
										class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/user/<?= $data['foto'] ?>"
													alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>
													<?= $data['nama_guru'] ?>
												</h4>
												<p class="text-muted"><?= $data['email'] ?></p>

											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal"
											data-target="#gantiPassword" class="collapsed">Ganti Password</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal"
											data-target="#pengaturanAkun" class="collapsed">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/user/<?= $data['foto'] ?>" alt="..."
								class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $data['nama_admin'] ?>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">

									<li>
										<a href="#" data-toggle="modal" data-target="#pengaturanAkun" class="collapsed">
											<span class="link-collapse">Pengaturan Akun</span>
										</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#gantiPassword" class="collapsed">
											<span class="link-collapse">Ganti Password</span>
										</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="dashboard.php" class="collapsed">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Main Utama</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#profil">
								<i class="fas fa-folder-open"></i>
								<p>Data Profil</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="profil">
								<ul class="nav nav-collapse">

								<li class="nav-item">
							<a data-toggle="collapse" href="#pimpinan">
								<i class="fas fa-folder-open"></i>
								<p>Pimpinan</p>
								<span class="caret"></span> 
							</a>
							<div class="collapse" id="pimpinan">
								<ul class="nav nav-collapse">
								<li>
										<a href="?page=pimpinan">
											<span class="sub-item">Pimpinan</span>
										</a>
									</li>
									<li>
										<a href="?page=ketua_fakultas">
											<span class="sub-item">ketua Jurusan</span>
										</a>
									</li>
									
								</ul>
							</div>
								</li>
									<li>
										<a href="?page=profil&act=sejarah">
											<span class="sub-item">Sejarah</span>
										</a>
									</li>

									<li>
										<a href="?page=visi_misi">
											<span class="sub-item">Visi-Misi</span>
										</a>
									</li>
									<li>
										<a href="?page=sambutan_dekan">
											<span class="sub-item">Sambutan Dekan</span>
										</a>
									</li>
									<li>
										<a href="?page=struktur_organisasi">
											<span class="sub-item">Struktur Organisasi</span>
										</a>
									</li>
									<li>
										<a href="?page=fasilitas">
											<span class="sub-item">Fasilitas</span>
										</a>
									</li>

								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#kerja_sama">
								<i class="fas fa-folder-open"></i>
								<p>Kerja Sama</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="kerja_sama">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=kerja_sama_dalam">
											<span class="sub-item">Kerja Sama Dalam Negeri</span>
										</a>
									</li>
									<li>
										<a href="?page=kerja_sama_luar">
											<span class="sub-item">Kerja Sama Luar Negeri</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#info_akademik">
								<i class="fas fa-folder-open"></i>
								<p>Info Akademik</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="info_akademik">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=pengumuman">
											<span class="sub-item">Pengumuman</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#pelayanan">
								<i class="fas fa-folder-open"></i>
								<p>Pelayanan Online</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="pelayanan">
								<ul class="nav nav-collapse">
								
								<li class="nav-item">
							<a data-toggle="collapse" href="#kurikulum">
								<i class="fas fa-folder-open"></i>
								<p>Kurikulum TI</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="kurikulum">
								<ul class="nav nav-collapse">
								<li>
										<a href="?page=it_pilihan">
											<span class="sub-item">IT Pilihan</span>
										</a>
									</li>
								
									<li>
										<a href="?page=semester_satu">
											<span class="sub-item">Semester 1</span>
										</a>
									</li>
									<li>
										<a href="?page=semester_dua">
											<span class="sub-item">Semester 2</span>
										</a>
									</li>
									<li>
										<a href="?page=semester_tiga">
											<span class="sub-item">Semester 3</span>
										</a>
									</li>
									<li>
										<a href="?page=semester_empat">
											<span class="sub-item">Semester 4</span>
										</a>
									</li>
									<li>
										<a href="?page=semester_lima">
											<span class="sub-item">Semester 5</span>
										</a>
									</li>
									<li>
										<a href="?page=semester_enam">
											<span class="sub-item">Semester 6</span>
										</a>
									</li>
									<li>
										<a href="?page=semester_tujuh">
											<span class="sub-item">Semester 7</span>
										</a>
									</li>
									<li>
										<a href="?page=semester_delapan">
											<span class="sub-item">Semester 8</span>
										</a>
									</li>
								</ul>
							</div>
							<li class="nav-item">
								<a data-toggle="collapse" href="#sipil">
									<i class="fas fa-folder-open"></i>
										<p>Kurikulum Sipil</p>
									<span class="caret"></span>
								</a>
							<div class="collapse" id="sipil">
								<ul class="nav nav-collapse">
									<li>
								<li>
							<a href="?page=sipil">
								<span class="sub-item">Sipil</span>
							</a>
								</li>
								<li>
							<a href="?page=sipil_pilihan">
								<span class="sub-item">Sipil Pilihan</span>
							</a>
								</li>
									</li>
								</ul>
							</div>
							<li class="nav-item">
							<a data-toggle="collapse" href="#industri">
								<i class="fas fa-folder-open"></i>
								<p>Kurikulum Industri</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="industri">
								<ul class="nav nav-collapse">
								<li>
								<li>
									<a href="?page=industri">
										<span class="sub-item">Industri</span>
									</a>
								</li>
								<li>
									<a href="?page=industri_pilihan">
										<span class="sub-item">Industri Pilihan</span>
									</a>
								</li>
								</li>
								</ul>
							</div>
							</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#akademik">
								<i class="fas fa-folder-open"></i>
								<p>Akademik</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="akademik">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=cuti_akademik">
											<span class="sub-item">cuti akademik</span>
										</a>
									</li>
									<li>
										<a href="?page=ijin_kuliah">
											<span class="sub-item">ijin_kuliah</span>
										</a>
									</li>
									<li>
									<a href="?page=ras">
											<span class="sub-item">RAS (Rencana Akademik Semester)</span>
										</a>
									</li>
									<li>
									<a href="?page=sks">
											<span class="sub-item">SKS (Satuan Kredit Semester)</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#inovasi">
								<i class="fas fa-folder-open"></i>
								<p>Inovasi</p>
								<span class="caret"></span>
							</a>
						<div class="collapse" id="inovasi">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=produk_riset">
											<span class="sub-item">Produk Riset</span>
										</a>
									</li>
									<li>
										<a href="?page=pusat_studi">
											<span class="sub-item">Pusat Studi</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#anggota">
								<i class="fas fa-user-friends"></i>
								<p>Data anggota</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="anggota">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=anggota">
											<span class="sub-item"> Daftar Anggota </span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->
						<li class="nav-item">
							<a data-toggle="collapse" href="#dokumen">
								<i class="fas fa-folder-open"></i>
								<p>Slide & Berita & video</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dokumen">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=slide">
											<span class="sub-item">Slide</span>
										</a>
									</li>
									<li>
										<a href="?page=berita">
											<span class="sub-item">Berita</span>
										</a>
									</li>
									<li>
										<a href="?page=video">
											<span class="sub-item">Video</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#testi">
								<i class="fas fa-folder-open"></i>
								<p>Testimoni</p>
								<span class="caret"></span>
							</a>
						<div class="collapse" id="testi">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=testi">
											<span class="sub-item">Testimoni</span>
										</a>
									</li>
									</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#download">
								<i class="fas fa-folder-open"></i>
								<p>Lainnya</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="download">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=download">
											<span class="sub-item">Download</span>
										</a>
									</li>
									<li>
										<a href="?page=pmb">
											<span class="sub-item">Pmb Brosur</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item active mt-3">
							<a href="index.php" class="collapsed">
								<i class="fas fa-arrow-alt-circle-left"></i>
								<p>Logout</p>
							</a>
						</li>

						<!-- 
						<li class="mx-4 mt-2">
							<a href="logout.php" class="btn btn-primary btn-block"><span class="btn-label"> <i class="fas fa-arrow-alt-circle-left"></i> </span> Logout</a> 
						</li> -->
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<?php
				error_reporting();
				$page = @$_GET['page'];
				$act = @$_GET['act'];

				if ($page == 'profil') {
					if ($act == 'sejarah') {
						include 'modul/profil/sejarah/sejarah_data.php';
					} elseif ($act == 'add') {
						include 'modul/profil/sejarah/sejarah_add.php';
						// semster
					} elseif ($act == 'proses') {
						include 'modul/profil/sejarah/sejarah_proses.php';
					} elseif ($act == 'edit') {
						include 'modul/profil/sejarah/sejarah_edit.php';
					} elseif ($act == 'del') {
						include 'modul/profil/sejarah/sejarah_hapus.php';
					}
				
				}elseif ($page == "visi_misi"){
					if ($act == '') {
						include 'modul/profil/visi_misi/visi_data.php';
					} elseif ($act == 'add') {
						include 'modul/profil/visi_misi/visi_add.php';
					} elseif ($act == 'edit') {
						include 'modul/profil/visi_misi/visi_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/profil/visi_misi/visi_proses.php';
					} elseif ($act == 'del') {
						include 'modul/profil/visi_misi/visi_hapus.php';
					}
				}elseif ($page == "sambutan_dekan"){
					if ($act == '') {
						include 'modul/profil/sambutan_dekan/sambutan_dekan_data.php';
					} elseif ($act == 'add') {
						include 'modul/profil/sambutan_dekan/sambutan_dekan_add.php';
					} elseif ($act == 'edit') {
						include 'modul/profil/sambutan_dekan/sambutan_dekan_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/profil/sambutan_dekan/sambutan_dekan_proses.php';
					} elseif ($act == 'del') {
						include 'modul/profil/sambutan_dekan/sambutan_dekan_hapus.php';
					}
				} elseif ($page == 'ketua_fakultas') {
					if ($act == '') {
						include 'modul/profil/pimpinan_fakultas/ketua_jurusan/ketua_jurusan_data.php';
					} elseif ($act == 'add') {
						include 'modul/profil/pimpinan_fakultas/ketua_jurusan/ketua_jurusan_add.php';
					} elseif ($act == 'edit') {
						include 'modul/profil/pimpinan_fakultas/ketua_jurusan/ketua_jurusan_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/profil/pimpinan_fakultas/ketua_jurusan/ketua_jurusan_proses.php';
					}elseif ($act == 'del') {
						include 'modul/profil/pimpinan_fakultas/ketua_jurusan/ketua_jurusan_hapus.php';
					}
				} elseif ($page == 'pimpinan') {
					if ($act == '') {
						include 'modul/profil/pimpinan_fakultas/pimpinan/pimpinan_data.php';
					} elseif ($act == 'add') {
						include 'modul/profil/pimpinan_fakultas/pimpinan/pimpinan_add.php';
					} elseif ($act == 'edit') {
						include 'modul/profil/pimpinan_fakultas/pimpinan/pimpinan_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/profil/pimpinan_fakultas/pimpinan/pimpinan_proses.php';
					}elseif ($act == 'del') {
						include 'modul/profil/pimpinan_fakultas/pimpinan/pimpinan_hapus.php';
					}
				} elseif ($page == 'testi') {
					if ($act == '') {
						include 'modul/testi/testi_data.php';
					} elseif ($act == 'add') {
						include 'modul/testi/testi_add.php';
					} elseif ($act == 'edit') {
						include 'modul/testi/testi_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/testi/testi_proses.php';
					}elseif ($act == 'del') {
						include 'modul/testi/testi_hapus.php';
					}
				} elseif ($page == 'pmb') {
					if ($act == '') {
						include 'modul/pmb/pmb_data.php';
					} elseif ($act == 'add') {
						include 'modul/pmb/pmb_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pmb/pmb_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/pmb/pmb_proses.php';
					}elseif ($act == 'del') {
						include 'modul/pmb/pmb_hapus.php';
					}
				} elseif ($page == 'fasilitas') {
					if ($act == '') {
						include 'modul/profil/fasilitas/fasilitas_data.php';
					} elseif ($act == 'add') {
						include 'modul/profil/fasilitas/fasilitas_add.php';
					} elseif ($act == 'edit') {
						include 'modul/profil/fasilitas/fasilitas_edit.php';
					} elseif ($act == 'del') {
						include 'modul/profil/fasilitas/fasilitas_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/profil/fasilitas/fasilitas_proses.php';
					}
				} elseif ($page == 'kerja_sama_dalam') {
					if ($act == '') {
						include 'modul/kerja_sama/dalam_negeri/dalam_negeri_data.php';
					} elseif ($act == 'add') {
						include 'modul/kerja_sama/dalam_negeri/dalam_negeri_add.php';
					} elseif ($act == 'edit') {
						include 'modul/kerja_sama/dalam_negeri/dalam_negeri_edit.php';
					} elseif ($act == 'del') {
						include 'modul/kerja_sama/dalam_negeri/dalam_negeri_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/kerja_sama/dalam_negeri/dalam_negeri_proses.php';
					}
				} elseif ($page == 'sipil') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/sipil/sipil_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/sipil/sipil_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/sipil/sipil_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/sipil/sipil_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/sipil/sipil_proses.php';
					}
				} elseif ($page == 'sipil_pilihan') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/sipil_pilihan/sipil_pilihan_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/sipil_pilihan/sipil_pilihan_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/sipil_pilihan/sipil_pilihan_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/sipil_pilihan/sipil_pilihan_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/sipil_pilihan/sipil_pilihan_proses.php';
					}
				} elseif ($page == 'industri') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/industri/industri_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/industri/industri_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/industri/industri_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/industri/industri_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/industri/industri_proses.php';
					}
				} elseif ($page == 'industri_pilihan') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/industri_pilihan/industri_pilihan_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/industri_pilihan/industri_pilihan_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/industri_pilihan/industri_pilihan_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/industri_pilihan/industri_pilihan_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/industri_pilihan/industri_pilihan_proses.php';
					}
				} elseif ($page == 'it_pilihan') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/it_pilihan/it_pilihan_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/it_pilihan/it_pilihan_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/it_pilihan/it_pilihan_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/it_pilihan/it_pilihan_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/it_pilihan/it_pilihan_proses.php';
					}
				} elseif ($page == 'semester_satu') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_1/semester_1_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_1/semester_1_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_1/semester_1_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_1/semester_1_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_1/semester_1_proses.php';
					}
				} elseif ($page == 'semester_dua') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_2/semester_2_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_2/semester_2_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_2/semester_2_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_2/semester_2_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_2/semester_2_proses.php';
					}
				} elseif ($page == 'semester_tiga') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_3/semester_3_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_3/semester_3_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_3/semester_3_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_3/semester_3_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_3/semester_3_proses.php';
					}
				} elseif ($page == 'semester_empat') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_4/semester_4_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_4/semester_4_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_4/semester_4_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_4/semester_4_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_4/semester_4_proses.php';
					}
				} elseif ($page == 'semester_lima') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_5/semester_5_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_5/semester_5_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_5/semester_5_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_5/semester_5_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_5/semester_5_proses.php';
					}
				} elseif ($page == 'semester_enam') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_6/semester_6_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_6/semester_6_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_6/semester_6_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_6/semester_6_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_6/semester_6_proses.php';
					}
				} elseif ($page == 'semester_tujuh') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_7/semester_7_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_7/semester_7_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_7/semester_7_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_7/semester_7_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_7/semester_7_proses.php';
					}
				} elseif ($page == 'semester_delapan') {
					if ($act == '') {
						include 'modul/pelayanan_online/kurikulum/semester_8/semester_8_data.php';
					} elseif ($act == 'add') {
						include 'modul/pelayanan_online/kurikulum/semester_8/semester_8_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pelayanan_online/kurikulum/semester_8/semester_8_edit.php';
					} elseif ($act == 'del') {
						include 'modul/pelayanan_online/kurikulum/semester_8/semester_8_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/pelayanan_online/kurikulum/semester_8/semester_8_proses.php';
					}
				}elseif ($page == "cuti_akademik"){
					if ($act == '') {
						include 'modul/akademik/cuti_akademik/cuti_data.php';
					} elseif ($act == 'add') {
						include 'modul/akademik/cuti_akademik/cuti_add.php';
					} elseif ($act == 'edit') {
						include 'modul/akademik/cuti_akademik/cuti_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/akademik/cuti_akademik/cuti_proses.php';
					} elseif ($act == 'del') {
						include 'modul/akademik/cuti_akademik/cuti_del.php';
					}

				}elseif ($page == "ijin_kuliah"){
					if ($act == '') {
						include 'modul/akademik/ijin_kuliah/ijin_data.php';
					} elseif ($act == 'add') {
						include 'modul/akademik/ijin_kuliah/ijin_add.php';
					} elseif ($act == 'edit') {
						include 'modul/akademik/ijin_kuliah/ijin_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/akademik/ijin_kuliah/ijin_proses.php';
					} elseif ($act == 'del') {
						include 'modul/akademik/ijin_kuliah/ijin_del.php';
					}

				}elseif ($page == "ras"){
					if ($act == '') {
						include 'modul/akademik/ras/ras_data.php';
					} elseif ($act == 'add') {
						include 'modul/akademik/ras/ras_add.php';
					} elseif ($act == 'edit') {
						include 'modul/akademik/ras/ras_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/akademik/ras/ras_proses.php';
					} elseif ($act == 'del') {
						include 'modul/akademik/ras/ras_del.php';
					}

				}elseif ($page == "sks"){
					if ($act == '') { 
						include 'modul/akademik/sks/sks_data.php';
					} elseif ($act == 'add') {
						include 'modul/akademik/sks/sks_add.php';
					} elseif ($act == 'edit') {
						include 'modul/akademik/sks/sks_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/akademik/sks/sks_proses.php';
					} elseif ($act == 'del') {
						include 'modul/akademik/sks/sks_del.php';
					}

				}elseif ($page == "ruangan"){
					if ($act == '') {
						include 'modul/layanan/ruangan/pinjam_data.php';
					} elseif ($act == 'add') {
						include 'modul/layanan/ruangan/pinjam_add.php';
					} elseif ($act == 'edit') {
						include 'modul/layanan/ruangan/pinjam_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/layanan/ruangan/pinjam_proses.php';
					} elseif ($act == 'del') {
						include 'modul/layanan/ruangan/pinjam_del.php';
					}
				}elseif ($page == "download"){
					if ($act == '') {
						include 'modul/download/download_data.php';
					} elseif ($act == 'add') {
						include 'modul/download/download_add.php';
					} elseif ($act == 'edit') {
						include 'modul/download/download_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/download/download_proses.php';
					} elseif ($act == 'del') {
						include 'modul/download/download_hapus.php';
					}
				}elseif ($page == "pengumuman"){
					if ($act == '') {
						include 'modul/pengumuman/pengumuman_data.php';
					} elseif ($act == 'add') {
						include 'modul/pengumuman/pengumuman_add.php';
					} elseif ($act == 'edit') {
						include 'modul/pengumuman/pengumuman_edit.php';
					} elseif ($act == 'proses') {
						include 'modul/pengumuman/pengumuman_proses.php';
					} elseif ($act == 'del') {
						include 'modul/pengumuman/pengumuman_hapus.php';
					}
				} elseif ($page == 'kerja_sama_luar') {
					if ($act == '') {
						include 'modul/kerja_sama/luar_negeri/luar_negeri_data.php';
					} elseif ($act == 'add') {
						include 'modul/kerja_sama/luar_negeri/luar_negeri_add.php';
					} elseif ($act == 'edit') {
						include 'modul/kerja_sama/luar_negeri/luar_negeri_edit.php';
					} elseif ($act == 'del') {
						include 'modul/kerja_sama/luar_negeri/luar_negeri_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/kerja_sama/luar_negeri/luar_negeri_proses.php';
					}
				} elseif ($page == 'struktur_organisasi') {
					if ($act == '') {
						include 'modul/profil/struktur_organisasi/struktur_organisasi_data.php';
					} elseif ($act == 'add') {
						include 'modul/profil/struktur_organisasi/struktur_organisasi_add.php';
					} elseif ($act == 'edit') {
						include 'modul/profil/struktur_organisasi/struktur_organisasi_edit.php';
					} elseif ($act == 'del') {
						include 'modul/profil/struktur_organisasi/struktur_organisasi_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/profil/struktur_organisasi/struktur_organisasi_proses.php';
					}
				} elseif ($page == 'slide') {
					if ($act == '') {
						include 'modul/slide/slide_data.php';
					} elseif ($act == 'add') {
						include 'modul/slide/slide_add.php';
					} elseif ($act == 'edit') {
						include 'modul/slide/slide_edit.php';
					} elseif ($act == 'del') {
						include 'modul/slide/slide_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/slide/slide_proses.php';
					}
				} elseif ($page == 'berita') {
					if ($act == '') {
						include 'modul/berita/berita_data.php';
					} elseif ($act == 'add') {
						include 'modul/berita/berita_add.php';
					} elseif ($act == 'edit') {
						include 'modul/berita/berita_edit.php';
					} elseif ($act == 'del') {
						include 'modul/berita/berita_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/berita/berita_proses.php';
					}
				} elseif ($page == 'produk_riset') {
					if ($act == '') {
						include 'modul/inovasi/produk_riset/produk_data.php';
					} elseif ($act == 'add') {
						include 'modul/inovasi/produk_riset/produk_add.php';
					} elseif ($act == 'edit') {
						include 'modul/inovasi/produk_riset/produk_edit.php';
					} elseif ($act == 'del') {
						include 'modul/berita/berita_hapus.php';
					} elseif ($act == 'proses') {
						include 'modul/inovasi/produk_riset/produk_proses.php';
					}
				} elseif ($page == 'video') {
					if ($act == '') {
						include 'modul/video/video_data.php';
					} elseif ($act == 'add') {
						include 'modul/video/video_add.php';
					} elseif ($act == 'proses') {
						include 'modul/video/video_proses.php';
					} elseif ($act == 'edit') {
						include 'modul/video/video_edit.php';
					} elseif ($act == 'del') {
						include 'modul/video/video_hapus.php';
					}
				} elseif ($page == '') {
					include 'modul/home.php';
				} else {
					echo "<b>Tidak ada Halaman</b>";
				}
				?>
			</div>


			<!-- modal ganti password -->
			<div class="modal fade bs-example-modal-sm" id="gantiPassword" tabindex="-1" role="dialog"
				aria-labelledby="gantiPass">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="gantiPass">Ganti Password</h4>
						</div>
						<form action="" method="post">
							<div class="modal-body">
								<div class="form-group">
									<label class="control-label">Password Lama</label>
									<input name="pass" type="text" class="form-control" placeholder="Password Lama">
								</div>
								<div class="form-group">
									<label class="control-label">Password Baru</label>
									<input name="pass1" type="text" class="form-control" placeholder="Password Baru">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button name="changePassword" type="submit" class="btn btn-primary">Ganti
									Password</button>
							</div>
						</form>
						<?php
						if (isset($_POST['changePassword'])) {
							$passLama = $data['password'];
							$pass = md5($_POST['pass']);
							$newPass = md5($_POST['pass1']);

							if ($passLama == $pass) {
								$set = mysqli_query($con, "UPDATE tb_admin SET password='$newPass' WHERE id_admin='$data[id_admin]' ");
								echo "<script type='text/javascript'>
													alert('Password Telah berubah')
													window.location.replace('dashboard.php'); 
													</script>";

							} else {
								echo "<script type='text/javascript'>
												alert('Password Lama Tidak cocok')
												window.location.replace('dashboard.php'); 
												</script>";
							}
						}
						?>


					</div>
				</div>
			</div>

			<!--end modal ganti password -->

			<!-- Modal pengaturan akun-->
			<div class="modal fade" id="pengaturanAkun" tabindex="-1" role="dialog" aria-labelledby="akunAtur">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="akunAtur"><i class="fas fa-user-cog"></i> Pengaturan Akun</h3>
						</div>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control"
										value="<?= $data['nama_admin'] ?>">
									<input type="hidden" name="id" value="<?= $data['id_admin'] ?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="username" class="form-control"
										value="<?= $data['username'] ?>">
								</div>
								<div class="form-group">
									<label>Foto Profile</label>
									<p>
										<img src="../assets/img/user/<?= $data['foto'] ?>" class="img-thumbnail"
											style="height: 50px;width: 50px;">
									</p>
									<input type="file" name="foto">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button name="updateProfile" type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
						<?php
						if (isset($_POST['updateProfile'])) {

							$gambar = @$_FILES['foto']['name'];
							if (!empty($gambar)) {
								move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/img/user/$gambar");
								$ganti = mysqli_query($con, "UPDATE tb_admin SET foto='$gambar' WHERE id_admin='$_POST[id]' ");
							}

							$sqlEdit = mysqli_query($con, "UPDATE tb_admin SET nama_admin='$_POST[nama]',username='$_POST[username]' WHERE id_admin='$_POST[id]' ") or die(mysqli_error($konek));

							if ($sqlEdit) {
								echo "<script>
                        alert('Sukses ! Data berhasil diperbarui');
                        window.location='dashboard.php';
                        </script>";
							}
						}
						?>
					</div>
				</div>
			</div>
			<!-- end modal pengaturan akun -->

			<footer class="footer">
				<div class="container">
					<div class="copyright ml-auto">
						&copy; <?php echo date('Y'); ?> Dam (<a href="index.php">SAZARA</a> | 2023)
					</div>
				</div>
			</footer>
		</div>


	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>



	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>

	<script>
		$(document).ready(function () {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every(function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function () {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function (d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function () {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>

</html>