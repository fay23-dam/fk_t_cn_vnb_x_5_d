<?php 
if (isset($_POST['saveGuru'])) {
 
    $visi = $_POST['judul'];
	$misi = $_POST['isi'];
        $save = mysqli_query($con, "INSERT INTO tb_ras VALUES(null,'$visi','$misi') ");
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
				window.location.replace('?page=ras');
				} ,3000);   
				</script>";
        }
		


  }elseif (isset($_POST['editGuru'])) {
	$visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $target = '../assets/img/visi/';
	$gambar = @$_FILES['file']['name'];
	if(!empty($gambar)){
		$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
		$editGuru = mysqli_query($con, "UPDATE tb_visi_misi SET gambar='$gambar',visi='$_POST[visi]',misi='$_POST[misi]' WHERE id_visi_misi='$_POST[id_visi_misi]' ");
	}else{
		$editGuru = mysqli_query($con, "UPDATE tb_visi_misi SET visi='$_POST[visi]',misi='$_POST[misi]' WHERE id_visi_misi='$_POST[id_visi_misi]' ");
	}
	

			if ($editGuru) {
				echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[id_visi_misi]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=ijin_kuliah');
				} ,3000);   
				</script>";
			}
		}
        
    

  
 ?>