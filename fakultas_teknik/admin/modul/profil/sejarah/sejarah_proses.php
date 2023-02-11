<?php 

if (isset($_POST['saveGuru'])) {

    $periode = $_POST['periode'];
    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];

		
			$save= mysqli_query($con,"INSERT INTO tb_sejarah VALUES(null,'$periode','$nama','$fakultas') ");
			if ($save) {
				echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[periode]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=profil');
				} ,3000);   
				</script>";
			}

		


  }elseif (isset($_POST['editGuru'])) {

		$editGuru= mysqli_query($con,"UPDATE sejarah SET periode='$_POST[periode]',fakultas='$_POST[fakultas]' WHERE nama='$_POST[nama]' ");

		if ($editGuru) {
			echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=devisi');
				} ,3000);   
				</script>";
		}


  }
 ?>