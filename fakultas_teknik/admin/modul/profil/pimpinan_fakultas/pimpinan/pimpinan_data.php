<div class="page-inner">
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
                <a href="#">Daftar Pimpinan</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">
                     <a href="?page=pimpinan&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  
                      <div class="table-responsive">
                   <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Gelar</th>
                            <th>Jabatan</th>
                            <th>Gambar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php 
                        $no=1;
      $guru = mysqli_query($con,"SELECT * FROM tb_pimpinan");
                        foreach ($guru as $g) {?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?=$g['nip']?></td>
                            <td><?=$g['nama'];?></td>
                            <td><?=$g['gelar']?></td>
                            <td><?=$g['jabatan']?></td>
                            <td><img src="../assets/img/visi/<?=$g['gambar'];?>" alt="gambar" width="45" height="45"></td>
                            
                              <td>
              <a class="btn btn-info btn-sm" href="?page=pimpinan&act=edit&id=<?=$g['nip'] ?>"><i class="far fa-edit"></i></a>
              <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=pimpinan&act=del&id=<?=$g['nip'] ?>"><i class="fas fa-trash"></i>
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