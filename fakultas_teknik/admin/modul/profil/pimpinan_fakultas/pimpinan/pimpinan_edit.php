<?php 

$edit = mysqli_query($con,"SELECT * FROM tb_pimpinan WHERE nip='$_GET[id]'");
foreach ($edit as $d)?>
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">PIMPINAN</h4>
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
                <a href="#">PIMPINAN</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit PIMPINAN</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit PIMPINAN</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=pimpinan&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>NIP</label>
								<input type="hidden" name="nip" value="<?=$d['nip'] ?>">
                <input type="text" name="nip" value="<?=$d['nip'] ?>" class="form-control" readonly>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input name="nama" type="text" class="form-control" value="<?=$d['nama']; ?>">								
							</div>
                            <div class="form-group">
								<label>Gelar</label>
								<input name="gelar" type="text" class="form-control" value="<?=$d['gelar']; ?>" >								
							</div>
              <label>Jabatan</label>
								<input name="jabatan" type="text" class="form-control" value="<?=$d['jabatan']; ?>" >								
							</div>
              <div class="form-group">
								<label>Gambar</label>
								<input name="file" type="file" class="form-control" value="<?=$d['gambar']; ?>">								
							</div>
							<div class="form-group">
								<button name="editGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>


						</form>
			
					
</div>
</div>
</div>
</div>
</div>
