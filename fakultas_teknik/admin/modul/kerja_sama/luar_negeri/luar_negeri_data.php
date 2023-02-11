<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Data Kerja Sama Luar Negeri</h4>
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
                <a href="#">Data Kerja Sama Luar Negeri</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Daftar Kerja Sama Luar Negeri</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">
                     <a href="?page=kerja_sama_luar&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  
                      <div class="table-responsive">
                   <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>link</th>
                            <th>Gambar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php 
                        $no=1;
      $guru = mysqli_query($con,"SELECT * FROM tb_kerjasama_luar_negeri ");
                        foreach ($guru as $g) {?>
                        <tr>
                            <td><?= $g['id_kerja_sama']?></td>
                            <td><?=$g['nama'];?></td>
                            <td><?=$g['link'];?></td>
                            <td> <img src="../assets/img/kerja_sama_luar_negeri/<?=$g['gambar'];?> " alt="Gambar Fasilitas" width="45" height="45"> </td>
                              <td>
              <a class="btn btn-info btn-sm" href="?page=kerja_sama_luar&act=edit&id=<?=$g['id_kerja_sama']?>"><i class="far fa-edit"></i></a>
              <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=devisi&act=del&id=<?=$g['id_devisi'] ?>"><i class="fas fa-trash"></i>
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