<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Struktur Organisasi</h4>
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
                <a href="#">Data Struktur Organisasi</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Daftar Struktur Organisasi</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">
                     <a href="?page=struktur_organisasi&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  
                      <div class="table-responsive">
                   <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>keterangan Struktur</th>
                            <th>Gambar Struktur</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php 
      $guru = mysqli_query($con,"SELECT * FROM tb_struktur_organisasi");
                        foreach ($guru as $g) {?>
                        <tr>
                            <td><?=$g['id_struktur']?>.</td>
                            <td><?=$g['keterangan_struktur'];?></td>
                            <td> <img src="../assets/img/struktur_organisasi/<?=$g['gambar'];?>" alt="dekan" width="45" height="45"> </td>
                              <td>
              <a class="btn btn-info btn-sm" href="?page=struktur_organisasi&act=edit&id=<?=$g['id_struktur'] ?>"><i class="far fa-edit"></i></a>
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