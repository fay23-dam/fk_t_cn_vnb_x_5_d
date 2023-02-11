<?php 

if (isset($_POST['saveGuru'])) {
    $nama = $_POST['nama'];
    $kata = $_POST['keterangan'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/fasilitas/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {

        $save = mysqli_query($con, "INSERT INTO tb_fasilitas VALUES(null,'$nama','$kata','$nama_file') ");
        if ($save) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=fasilitas');
				} ,3000);   
				</script>";
        }

    }
 


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/fasilitas/';
	$gambar = @$_FILES['file']['name'];
	if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_fasilitas SET gambar='$gambar',nama_fasilitas='$_POST[nama]',keterangan_fasilitas='$_POST[keterangan]' WHERE id_fasilitas='$_POST[id]' ");
  }else{
	$editGuru = mysqli_query($con, "UPDATE tb_fasilitas SET nama_fasilitas='$_POST[nama]',keterangan_fasilitas='$_POST[keterangan]' WHERE id_fasilitas='$_POST[id]' ");
	}
      

        if ($editGuru) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=fasilitas');
				} ,3000);   
				</script>";
        }
    }
 ?>