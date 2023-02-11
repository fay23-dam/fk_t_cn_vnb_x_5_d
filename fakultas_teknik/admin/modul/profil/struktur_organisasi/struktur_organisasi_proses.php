<?php 

if (isset($_POST['saveGuru'])) {
    $kata = $_POST['kata'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/struktur_organisasi/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {

        $save = mysqli_query($con, "INSERT INTO tb_struktur_organisasi VALUES('$kata','$nama_file',null) ");
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
				window.location.replace('?page=struktur_organisasi');
				} ,3000);   
				</script>";
        }

    }


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/struktur_organisasi/';
	$gambar = @$_FILES['file']['name'];
if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_struktur_organisasi SET gambar='$gambar',keterangan_struktur='$_POST[kata]' WHERE id_struktur='$_POST[id]' ");
}else{
	$editGuru = mysqli_query($con, "UPDATE tb_struktur_organisasi SET keterangan_struktur='$_POST[kata]' WHERE id_struktur='$_POST[id]' ");
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
				window.location.replace('?page=struktur_organisasi');
				} ,3000);   
				</script>";
        }
    }
 ?>