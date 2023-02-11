<?php 

if (isset($_POST['saveGuru'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $gelar = $_POST['gelar'];
	$jabatan = $_POST['jabatan'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/pimpinan/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {

        $save = mysqli_query($con, "INSERT INTO tb_pimpinan VALUES('$nip','$nama','$gelar','$jabatan','$nama_file') ");
        if ($save) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nip]) ', 'Berhasil disimpan', {
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


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/pimpinan/';
	$gambar = @$_FILES['file']['name'];
if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_pimpinan SET gambar='$gambar',nama='$_POST[nama]',jabatan='$_POST[jabatan]',gelar='$_POST[gelar]' WHERE nip='$_POST[nip]' ");
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