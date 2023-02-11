<?php 

if (isset($_POST['saveGuru'])) {
    $sumber = @$_FILES['file']['tmp_name'];
	$target = '../assets/img/slide/';
	$nama_file = @$_FILES['file']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
    if ($pindah) {

        $save = mysqli_query($con, "INSERT INTO tb_slide VALUES(null,'$nama_file') ");
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
				window.location.replace('?page=slide');
				} ,3000);   
				</script>";
        }

    }


  }elseif (isset($_POST['editGuru'])) {
    $target = '../assets/img/slide/';
	$gambar = @$_FILES['file']['name'];
if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_slide SET gambar='$gambar'WHERE id='$_POST[id]' ");
}else{
	$editGuru = mysqli_query($con, "UPDATE tb_slide SET  WHERE id='$_POST[id]' ");
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
				window.location.replace('?page=slide');
				} ,3000);   
				</script>";
        }
    }
 ?>