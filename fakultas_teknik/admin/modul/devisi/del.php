<?php 
$del = mysqli_query($con,"DELETE FROM tb_devisi WHERE id_devisi=$_GET[id]");
if ($del) {
		echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('Data', 'Berhasil Dihapus', {
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

 ?>