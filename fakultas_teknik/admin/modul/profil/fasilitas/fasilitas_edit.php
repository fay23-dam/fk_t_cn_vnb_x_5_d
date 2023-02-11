<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->
<?php
$edit = mysqli_query($con,"SELECT * FROM tb_fasilitas WHERE id_fasilitas='$_GET[id]' ");
foreach ($edit as $d)?>
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Fasilitas</h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="#">
                  <i class="flaticon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Data Fasilitas</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit Fasilitas</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit Fasilitas</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=fasilitas&act=proses" method="post" enctype="multipart/form-data">
                        <div class="form-group">
								<label>ID</label>
								<input type="hidden" name="id" value="<?=$d['id_fasilitas'] ?>">
                                <input type="text" name="id" value="<?=$d['id_fasilitas'] ?>" class="form-control" readonly>								
							</div>
                            <div class="form-group">
								<label>Nama Fasilitas</label>
								<input name="nama" type="text" class="form-control" value="<?=$d['nama_fasilitas'] ?>">								
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<input name="file" type="file" class="form-control" value="<?=$d['gambar'] ?>">								
							</div>
                            <div class="form-group">
								<label>Keterangan Fasilitas</label>
                                <textarea name="keterangan" id="keterangan" class="form-control"><?=$d['keterangan_fasilitas']?></textarea>							
                            </div>
							<div class="form-group">
							<div class="form-group">
								<button name="editGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>
                            <script>
		    CKEDITOR.replace('keterangan');
	    </script>

						</form>
                        <script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->			
					
</div>
</div>
</div>
</div>
</div>
