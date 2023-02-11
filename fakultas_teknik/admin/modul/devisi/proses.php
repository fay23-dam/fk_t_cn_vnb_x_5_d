<?php 

if (isset($_POST['saveGuru'])) {

    $pass= sha1($_POST['nd']);

		
			$save= mysqli_query($con,"INSERT INTO tb_devisi VALUES(NULL,'$_POST[nd]','Y') ");
			if ($save) {
				echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nd]) ', 'Berhasil disimpan', {
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

		


  }elseif (isset($_POST['editGuru'])) {

		$editGuru= mysqli_query($con,"UPDATE tb_devisi SET nama_devisi='$_POST[nama]',aktif='$_POST[aktif]' WHERE id_devisi='$_POST[id]' ");

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