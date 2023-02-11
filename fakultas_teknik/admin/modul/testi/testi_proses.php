<?php 

if (isset($_POST['saveGuru'])) {
    $nama = $_POST['nama'];
    $kata = $_POST['kata'];
	$tahun = $_POST['tahun'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/testi/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {

        $save = mysqli_query($con, "INSERT INTO tb_testi VALUES(null,'$nama','$tahun','$nama_file','$kata') ");
        if ($save) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[id]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=testi');
				} ,3000);   
				</script>";
        }

    }


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/testi/';
	$gambar = @$_FILES['file']['name'];
if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_testi SET tahun='$_POST[tahun]',foto='$gambar',nama='$_POST[nama]',keterangan='$_POST[kata]' WHERE id='$_POST[id]' ");
}else{
	$editGuru = mysqli_query($con, "UPDATE tb_testi SET tahun='$_POST[tahun]',nama='$_POST[nama]',keterangan'$_POST[kata]' WHERE id='$_POST[id]' ");
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
				window.location.replace('?page=testi');
				} ,3000);   
				</script>";
        }
    }
 ?>