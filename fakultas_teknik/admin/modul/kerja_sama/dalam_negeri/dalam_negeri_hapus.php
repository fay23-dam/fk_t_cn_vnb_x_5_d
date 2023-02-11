<?php 
$del = mysqli_query($con,"DELETE FROM tb_kerja_sama_dalam_negeri WHERE id_kerja_sama=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=kerja_sama_dalam';
		</script>";	
}

 ?>