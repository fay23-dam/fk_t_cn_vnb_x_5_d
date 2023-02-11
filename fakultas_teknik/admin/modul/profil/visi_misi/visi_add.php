<script type="text/javascript" src="../assets/jQuery/jquery.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->

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
                <a href="#">Tambah Visi-Misi</a>
              </li>
            </ul>
          </div>
          <div class="row">

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Entry Visi-Misi</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=visi_misi&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Gambar</label>
								<input name="file" type="file" class="form-control" placeholder="gambar">
							</div>			
                            <div class="form-group">
								<label>Visi</label>		
                                <textarea name="visi" id="visi" class="form-control"></textarea>						
							</div>							
                            <div class="form-group">
								<label>Misi</label>
                                <textarea name="misi" id="misi" class="form-control"></textarea>
							</div>			
							<div class="form-group">
								<button name="saveGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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
