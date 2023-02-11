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
                <a href="#">Daftar Visi-Misi</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">
                     <a href="?page=visi_misi&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  
                      <div class="table-responsive">
                   <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Gambar</th>
                            <th>Gambar</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php 
                        $no=1;
      $guru = mysqli_query($con,"SELECT * FROM tb_visi_misi");
                        foreach ($guru as $g) {?>
                        <tr>
                            <td><?=$g['id_visi_misi']?></td>
                            <td id="nama_k"><?=$g['gambar'];?></td>
                            <td><img src="../assets/img/visi/<?=$g['gambar'];?>" alt="gambar" width="45" height="45"></td>
                            <td><?=$g['visi'];?></td>
                            <td><?=$g['misi']?></td>
                              <td>
              <a class="btn btn-info btn-sm" href="?page=visi_misi&act=edit&id=<?=$g['id_visi_misi'] ?>"><i class="far fa-edit"></i></a>
              <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=visi_misi&act=del&id=<?=$g['id_visi_misi'] ?>"><i class="fas fa-trash"></i>
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