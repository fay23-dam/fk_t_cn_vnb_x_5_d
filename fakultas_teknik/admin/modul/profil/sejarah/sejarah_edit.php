<?php 

$edit = mysqli_query($con,"SELECT * FROM tb_sejarah WHERE id_sejarah='$_GET[id]'");
foreach ($edit as $d)?>
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Sejarah</h4>
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
                <a href="#">Data Sejarah</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit Sejarah</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit Sejarah</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=profil&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>ID</label>
								<input type="hidden" name="id" value="<?=$d['id_sejarah'] ?>">
                <input type="text" name="id" value="<?=$d['id_sejarah'] ?>" class="form-control" readonly>
							</div>
              <div class="form-group">
								<label>Periode</label>
								<input name="periode" type="text" class="form-control" value="<?=$d['periode'] ?>" >								
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input name="nama" type="text" class="form-control" value="<?=$d['nama'] ?>">								
							</div>
                            <div class="form-group">
								<label>Fakultas</label>
								<input name="fakultas" type="text" class="form-control" value="<?=$d['fakultas'] ?>">								
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
