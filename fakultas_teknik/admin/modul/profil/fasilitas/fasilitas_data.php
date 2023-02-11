<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Fasilitas</h4>
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
                <a href="#">Data Fasilitas</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Daftar Fasilitas</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">
                     <a href="?page=fasilitas&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  
                      <div class="table-responsive">
                   <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Fasilitas</th>
                            <th>Keterangan Fasilitas</th>
                            <th>Gambar Fasilitas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php 
                        $no=1;
      $guru = mysqli_query($con,"SELECT * FROM tb_fasilitas ");
                        foreach ($guru as $g) {?>
                        <tr>
                            <td><?= $g['id_fasilitas']?></td>
                            <td><?=$g['nama_fasilitas'];?></td>
                            <td><?=$g['keterangan_fasilitas'];?></td>
                             <td> <img src="../assets/img/fasilitas/<?=$g['gambar'];?> " alt="Gambar Fasilitas" width="45" height="45"> </td>
                              <td>
              <a class="btn btn-info btn-sm" href="?page=fasilitas&act=edit&id=<?=$g['id_fasilitas']?>"><i class="far fa-edit"></i></a>
              <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=fasilitas&act=del&id=<?=$g['id_fasilitas'] ?>"><i class="fas fa-trash"></i>
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