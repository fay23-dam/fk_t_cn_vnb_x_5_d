<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Struktur Organisasi</h4>
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
                <a href="#">Data Struktur Organisasi</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Tambah Struktur Organisasi</a>
              </li>
            </ul>
          </div>
          <div class="row">

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Entry Struktur Organisasi</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=struktur_organisasi&act=proses" method="post" enctype="multipart/form-data">		
                            <div class="form-group">
								<label>Gambar Struktur</label>
								<input name="file" type="file" class="form-control">								
							</div>							
                            <div class="form-group">
								<label>keterangan Struktur</label>
                                <textarea name="kata" id="kata" class="form-control"></textarea>
							</div>			
							<div class="form-group">
								<button name="saveGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>
                            <script>
		    CKEDITOR.replace('kata');
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
