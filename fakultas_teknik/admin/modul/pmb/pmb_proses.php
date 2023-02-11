<?php 
if (isset($_POST['saveGuru'])) {
	$judul = $_POST['judul'];
	$link = $_POST['link'];
    $keterangan = $_POST['keterangan'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/pmb/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {
        $save = mysqli_query($con, "INSERT INTO tb_pmb VALUES(null,'$judul','$keterangan','$nama_file','$link') ");
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
				window.location.replace('?page=pmb');
				} ,3000);   
				</script>";
        }
    }
		


  }elseif (isset($_POST['editGuru'])) {
	$visi = $_POST['visi'];
    $target = '../assets/img/pmb/';
	$gambar = @$_FILES['file']['name'];
	if(!empty($gambar)){
		$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
		$editGuru = mysqli_query($con, "UPDATE tb_pmb SET gambar='$gambar', judul='$_POST[judul]', deskripsi='$_POST[keterangan]',link='$_POST[link]' WHERE id='$_POST[id]' ");
	}else{
		$editGuru = mysqli_query($con, "UPDATE tb_pmb SET judul='$_POST[judul]',deskripsi='$_POST[keterangan]',link='$_POST[link]' WHERE id='$_POST[id]' ");
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
				window.location.replace('?page=pmb');
				} ,3000);   
				</script>";
			}
		}
        
    

  
 ?>