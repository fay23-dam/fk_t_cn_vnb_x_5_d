          <div class="page-header">
            <h4 class="page-title">Pimpinan</h4>
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
                <a href="#">Data Pimpinan</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Tambah pimpinan</a>
              </li>
            </ul>
          </div>
          <div class="row">

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Entry Pimpinan</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=pimpinan&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Nip</label>
								<input name="nip" type="text" class="form-control" placeholder="Nip">
							</div>	
              <div class="form-group">
								<label>Nama</label>
								<input name="nama" type="text" class="form-control" placeholder="Nama">
							</div>			
              <div class="form-group">
								<label>Gelar</label>
								<input name="gelar" type="text" class="form-control" placeholder="gelar">
							</div>	
              <div class="form-group">
								<label>gambar</label>
								<input name="file" type="file" class="form-control">								
							</div>
							<div class="form-group">
								<button name="saveGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>
						</form>
</div>
</div>
</div>
</div>
</div>
