<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Berita</h4>
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
                <a href="#">Data Berita</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Daftar Berita</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">
                     <a href="?page=berita&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  
                      <div class="table-responsive">
                   <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Sub Menu</th>
                            <th>Gambar</th>
                            <th>tanggal</th>
                            <th>Deskripsi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php 
                        $no=1;
      $guru = mysqli_query($con,"SELECT * FROM tb_berita");
                        foreach ($guru as $g) {?>
                        <tr>
                            <td><?=$g['id']?></td>
                            <td><?=$g['judul'];?></td>
                            <td><?=$g['submenu'];?></td>
                            <td><img src="../assets/img/berita/<?=$g['gambar'];?>" alt="gambar" width="45" height="45"></td>
                            <td><?=$g['tanggal'];?></td>
                            <?php
                            if($g['keterangan'] == true){
                            ?>
                            <td>Deskripsi Tersedia Silahkan Edit Untuk Melihat Isi Keterangan</td>
                            <?php
                            }else{
                            ?>
                            <td></td>
                            <?php
                            }
                            ?>
                            
                              <td>
              <a class="btn btn-info btn-sm" href="?page=berita&act=edit&id=<?=$g['id'] ?>"><i class="far fa-edit"></i></a>
              <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=berita&act=del&id=<?=$g['id'] ?>"><i class="fas fa-trash"></i>
              </a>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>                        
                </table>
                      </div>
                    </div>
                  </div>
                </div>



</div>
</div>