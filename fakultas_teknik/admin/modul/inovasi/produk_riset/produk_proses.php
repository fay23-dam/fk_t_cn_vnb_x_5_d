<?php 

if (isset($_POST['saveGuru'])) {
	$judul = $_POST['judul'];
    $isi = $_POST['isi'];
        $save = mysqli_query($con, "INSERT INTO tb_produk_riset VALUES(null,'$judul','$isi') ");
        if ($save) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal( 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=produk_riset');
				} ,3000);   
				</script>";
        }

    


  }elseif (isset($_POST['editGuru'])) {
	$editGuru = mysqli_query($con, "UPDATE tb_produk_riset SET isi='$_POST[isi]' WHERE id='$_POST[id]' ");
	}
      

        if ($editGuru) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal(') ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=produk_riset');
				} ,3000);   
				</script>";
        }
    
 ?>