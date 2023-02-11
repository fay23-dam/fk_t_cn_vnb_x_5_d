<?php 
if (isset($_POST['saveGuru'])) {
	$judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
	$link = $_POST['link'];
    $keterangan = $_POST['keterangan'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/video/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    $sumber1 = @$_FILES['file_v']['tmp_name'];
	$target1 = '../assets/video/';
	$nama_file1 = @$_FILES['file_v']['name'];
	$pindah1 = move_uploaded_file($sumber1, $target1.$nama_file1);
	if ($pindah) {
		$save = mysqli_query($con, "INSERT INTO tb_video VALUES(null,'$judul','$nama_file1','$nama_file','$tanggal','$keterangan','$link') ");
		if ($save) {
			echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal(' ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=video');
				} ,3000);   
				</script>";
		}

	}


  }elseif (isset($_POST['editGuru'])) {
	
    $target = '../assets/img/video/';
	$gambar = @$_FILES['file']['name'];

	$sumber1 = @$_FILES['file_v']['tmp_name'];
	$target1 = '../assets/video/';
	$nama_file1 = @$_FILES['file_v']['name'];
	$pindah1 = move_uploaded_file($sumber1, $target1.$nama_file1);
	
	if(!empty($gambar)){
		$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
		$editGuru = mysqli_query($con, "UPDATE tb_video SET video='$nama_file1',gambar='$gambar',judul='$_POST[judul]',tanggal='$_POST[tanggal]',keterangan='$_POST[keterangan]',link='$_POST[link]' WHERE id='$_POST[id]' ");
	}else{
		$editGuru = mysqli_query($con, "UPDATE tb_video SET video='$nama_file1',judul='$_POST[judul]',tanggal='$_POST[tanggal]',keterangan='$_POST[keterangan]',link='$_POST[link]' WHERE id='$_POST[id]' ");
	}
	

			if ($editGuru) {
				echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[id]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=video');
				} ,3000);   
				</script>";
			}
		}
        
    

  
 ?>