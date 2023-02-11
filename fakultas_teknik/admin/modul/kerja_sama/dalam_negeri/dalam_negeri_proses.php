<?php 

if (isset($_POST['saveGuru'])) {
    $nama = $_POST['nama'];
    $link = $_POST['link'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/kerja_sama_dalam_negeri/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {

        $save = mysqli_query($con, "INSERT INTO tb_kerjasama_dalam_negeri VALUES(null,'$nama_file','$nama','$link') ");
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
				window.location.replace('?page=kerja_sama_dalam');
				} ,3000);   
				</script>";
        }

    }


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/kerja_sama_dalam_negeri/';
	$gambar = @$_FILES['file']['name'];
	if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_kerjasama_dalam_negeri SET gambar='$gambar',nama='$_POST[nama]',link='$_POST[link]' WHERE id_kerja_sama='$_POST[id]' ");
  }else{
	$editGuru = mysqli_query($con, "UPDATE tb_kerjasama_dalam_negeri SET nama='$_POST[nama]',link='$_POST[keterangan]' WHERE id_kerja_sama='$_POST[id]' ");
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
				window.location.replace('?page=kerja_sama_dalam');
				} ,3000);   
				</script>";
        }
    }
 ?>