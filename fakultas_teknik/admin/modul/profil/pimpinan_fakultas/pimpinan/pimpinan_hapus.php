<?php 
$del = mysqli_query($con,"DELETE FROM tb_pimpinan WHERE nip=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=pimpinan';
		</script>";	
}

 ?>