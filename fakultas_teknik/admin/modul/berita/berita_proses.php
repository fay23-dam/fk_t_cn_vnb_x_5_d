<?php 
if (isset($_POST['saveGuru'])) {
	$judul = $_POST['judul'];
	$tanggal = $_POST['tanggal'];
	$sub = $_POST['sub'];
    $keterangan = $_POST['keterangan'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/berita/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {
        $save = mysqli_query($con, "INSERT INTO tb_berita VALUES(null,'$judul','$tanggal','$nama_file','$keterangan','$sub') ");
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
				window.location.replace('?page=berita');
				} ,3000);   
				</script>";
        }
    }
		


  }elseif (isset($_POST['editGuru'])) {
	$visi = $_POST['visi'];
    $target = '../assets/img/berita/';
	$gambar = @$_FILES['file']['name'];
	if(!empty($gambar)){
		$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
		$editGuru = mysqli_query($con, "UPDATE tb_berita SET gambar='$gambar',submenu='$_POST[sub]',judul='$_POST[judul]',tanggal='$_POST[tanggal]',keterangan='$_POST[keterangan]' WHERE id='$_POST[id]' ");
	}else{
		$editGuru = mysqli_query($con, "UPDATE tb_berita SET judul='$_POST[judul]', submenu='$_POST[sub]', tanggal='$_POST[tanggal]',keterangan='$_POST[keterangan]' WHERE id='$_POST[id]' ");
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
				window.location.replace('?page=berita');
				} ,3000);   
				</script>";
			}
		}
        
    

  
 ?>