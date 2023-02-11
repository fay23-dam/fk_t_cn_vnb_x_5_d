<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->
<?php
$edit = mysqli_query($con,"SELECT * FROM tb_pengumuman WHERE id='$_GET[id]' ");
foreach ($edit as $d)?>
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">pengumuman</h4>
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
                <a href="#">Data Pengumuman</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit Pengumuman</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit Pengumuman</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=pengumuman&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>ID Pengumuman</label>
								<input type="hidden" name="id" value="<?=$d['id'] ?>">
                                <input type="text" name="id" value="<?=$d['id'] ?>" class="form-control" readonly>								
							</div>
              <div class="form-group">
								<label>Judul</label>
								<input name="judul" type="text" class="form-control" value="<?=$d['judul'] ?>">
                               
							</div>
              <div class="form-group">
								<label>Tanggal</label>
								<input name="tanggal" type="date" class="form-control" value="<?=$d['tanggal'] ?>">
                               
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<input name="file" type="file" class="form-control" value="<?=$d['gambar'] ?>">
                               
							</div>
              <div class="form-group">
								<label>Link</label>
								<input name="link" type="text" class="form-control" value="<?=$d['link'] ?>">
                               
							</div>
              <div class="form-group">
								<label>Keterangan</label>
                <textarea name="keterangan" id="visi" class="form-control"><?=$d['keterangan']?></textarea>							</div>
							<div class="form-group">
								<button name="editGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>
                            <script>
		    CKEDITOR.replace('visi');
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
