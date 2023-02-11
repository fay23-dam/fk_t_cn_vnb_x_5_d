<?php 

if (isset($_POST['saveGuru'])) {
    $nama = $_POST['nama'];
    $kata = $_POST['kata'];
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/sambutan_dekan/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {

        $save = mysqli_query($con, "INSERT INTO tb_sambutan_dekan VALUES(null,'$nama','$nama_file','$kata') ");
        if ($save) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[id_sambutan]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=sambutan_dekan&act=sambutan_dekan_data');
				} ,3000);   
				</script>";
        }

    }


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/sambutan_dekan/';
	$gambar = @$_FILES['file']['name'];
if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_sambutan_dekan SET gambar='$gambar',nama='$_POST[nama]',kata_dekan='$_POST[kata]' WHERE id_sambutan='$_POST[id]' ");
}else{
	$editGuru = mysqli_query($con, "UPDATE tb_sambutan_dekan SET nama='$_POST[nama]',kata_dekan='$_POST[kata]' WHERE id_sambutan='$_POST[id]' ");
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
				window.location.replace('?page=sambutan_dekan&act=sambutan_dekan_data');
				} ,3000);   
				</script>";
        }
    }
 ?>