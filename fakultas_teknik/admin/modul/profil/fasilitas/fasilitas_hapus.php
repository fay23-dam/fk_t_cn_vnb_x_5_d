<?php 
$del = mysqli_query($con,"DELETE FROM tb_fasilitas WHERE id_fasilitas=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=fasilitas';
		</script>";	
}

 ?>