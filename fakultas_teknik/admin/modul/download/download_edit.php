<?php 

$edit = mysqli_query($con,"SELECT * FROM tb_pdf_book WHERE id='$_GET[id]'");
foreach ($edit as $d)?>
<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Download</h4>
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
                <a href="#">Download</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Edit Download</a>
              </li>
            </ul>
          </div>
          <div class="row">
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Edit Download</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=download&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>ID</label>
								<input type="hidden" name="id"  value="<?=$d['id'] ?>">
                <input type="text" name="id" value="<?=$d['id'] ?>" class="form-control" readonly>
							</div>
                            <div class="form-group">
								<label>Judul</label>
								<input name="judul" type="text" class="form-control" value="<?=$d['judul_file_pdf'] ?>">								
							</div>
			
              <div class="form-group">
								<label>File</label>
								<input name="file" type="file" class="form-control">								
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
