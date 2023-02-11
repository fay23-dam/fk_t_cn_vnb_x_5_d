	<?php 

$edit = mysqli_query($con,"SELECT * FROM tb_devisi WHERE id_devisi='$_GET[id]' ");
foreach ($edit as $d)?>
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Devisi</h4>
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
                <a href="#">Data Devisi</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit Devisi</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit Devisi</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=devisi&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Id Devisi</label>
								<input type="hidden" name="id" value="<?=$d['id_devisi'] ?>">
								<input name="nip" type="text" class="form-control" value="<?=$d['id_devisi'] ?>" readonly>								
							</div>

							<div class="form-group">
								<label>Nama Devisi</label>
								<input name="nama" type="text" class="form-control" value="<?=$d['nama_devisi'] ?>">								
							</div>

							<div class="form-group">
								<label>Ke Aktifan</label>
								<!-- <span class="text-danger"><em>Email digunakan unruk Password default</em></span> -->
								<input name="aktif" type="text" class="form-control" value="<?=$d['aktif'] ?>">
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
