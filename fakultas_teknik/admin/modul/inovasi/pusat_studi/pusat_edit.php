<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->
<?php
$edit = mysqli_query($con,"SELECT * FROM tb_pusat_studi WHERE id ='$_GET[id]' ");
foreach ($edit as $d)?>
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Visi-Misi</h4>
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
                <a href="#">Data Pusat Studi</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit Isi Pusat Studi</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit Pusat Studi</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=pusat_studi&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>ID Pusat Studi</label>
								<input type="hidden" name="id" value="<?=$d['id'] ?>">
                                <input type="text" name="id" value="<?=$d['id'] ?>" class="form-control" readonly>								
							</div>
                                
                            <div class="form-group">
								<label>Isi</label>
                                <textarea name="isi" id="misi" class="form-control"><?=$d['isi_pusat_studi']?></textarea>							</div>
							<div class="form-group">
								<button name="editGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>
                            <script>
            CKEDITOR.replace('misi');
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
