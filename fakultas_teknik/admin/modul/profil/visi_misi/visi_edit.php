<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->
<?php
$edit = mysqli_query($con,"SELECT * FROM tb_visi_misi WHERE id_visi_misi='$_GET[id]' ");
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
                <a href="#">Data Visi-Misi</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit Visi-Misi</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit Visi-Misi</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=visi_misi&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>ID Visi</label>
								<input type="hidden" name="id_visi_misi" value="<?=$d['id_visi_misi'] ?>">
                                <input type="text" name="id_visi_misi" value="<?=$d['id_visi_misi'] ?>" class="form-control" readonly>								
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<input name="file" type="file" class="form-control" value="<?=$d['gambar'] ?>">
                               
							</div>
                            <div class="form-group">
								<label>Visi</label>
                                <textarea name="visi" id="visi" class="form-control"><?=$d['visi']?></textarea>							</div>
							<div class="form-group">
                                
                            <div class="form-group">
								<label>Misi</label>
                                <textarea name="misi" id="misi" class="form-control"><?=$d['misi']?></textarea>							</div>
							<div class="form-group">
								<button name="editGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>
                            <script>
		    CKEDITOR.replace('visi');
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
