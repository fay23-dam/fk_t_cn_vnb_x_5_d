<?php 
include "../admin/modul/pelayanan_online/kurikulum/excel_reader2.php";
if (isset($_POST['saveGuru'])) {
    $target = basename($_FILES['file']['name']);
    $pindah = move_uploaded_file($_FILES['file']['tmp_name'], $target);
    if ($pindah) {
        chmod($_FILES['file']['name'], 0777);
        $data = new Spreadsheet_Excel_Reader($_FILES['file']['name'], false);
        $jumlah_baris = $data->rowcount($sheet_index = 0);

        $berhasil = 0;
    for($i = 2; $i <= $jumlah_baris; $i++){
        $matakuliah = $data->val($i, 1);
	   $kode   = $data->val($i, 2);
	   $sks = $data->val($i, 3);
	    $prasyarat = $data->val($i, 4);

        if($matakuliah != "" && $sks != "" && $kode != "" && $prasyarat != ""){
            //persiapkan insert data ke database
        $save = mysqli_query($con, "INSERT INTO tb_sipil_pilihan VALUES ('', '$matakuliah', '$kode', '$sks', '$prasyarat') ");
            $berhasil++;
        }
    }
    unlink($_FILES['file']['name']);
        if ($save) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=sipil_pilihan');
				} ,3000);   
				</script>";
        }

    }


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/pimpinan/';
	$gambar = @$_FILES['file']['name'];
if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_industri SET gambar='$gambar',nama='$_POST[nama]',jabatan='$_POST[jabatan]',gelar='$_POST[gelar]' WHERE nip='$_POST[nip]' ");
}else{
	$editGuru = mysqli_query($con, "UPDATE tb_pimpinan SET nama='$_POST[nama]',jabatan='$_POST[jabatan]',gelar='$_POST[gelar]' WHERE nip='$_POST[nip]' ");
}
	

        if ($editGuru) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nip]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=pimpinan');
				} ,3000);   
				</script>";
        }
    }
 ?>