<?php 
$del = mysqli_query($con,"DELETE FROM tb_akademik WHERE id=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=cuti_akademik';
		</script>";	
}

 ?>