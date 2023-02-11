<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">SEMESTER 2</h4>
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
                <a href="#">Data Semester 2</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Daftar Semester 2</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">
                     <a href="?page=semester_dua&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  
                      <div class="table-responsive">
                   <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Kode</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php 
                        $no=1;
      $guru = mysqli_query($con,"SELECT * FROM tb_semester_2 ");
                        foreach ($guru as $g) {?>
                        <tr>
                            <td><?= $g['no']?></td>
                            <td><?=$g['matakuliah'];?></td>
                            <td><?=$g['sks'];?></td>
                            <td><?=$g['kode'];?> </td>
                            <td><?=$g['prasyarat'];?> </td>
                              <td>
              <a class="btn btn-info btn-sm" href="?page=semester_dua&act=edit&id=<?=$g['no']?>"><i class="far fa-edit"></i></a>
              <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=semester_dua&act=del&id=<?=$g['no'] ?>"><i class="fas fa-trash"></i>
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