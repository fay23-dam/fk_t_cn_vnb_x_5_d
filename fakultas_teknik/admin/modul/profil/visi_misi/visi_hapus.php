<?php 
$del = mysqli_query($con,"DELETE FROM tb_visi_misi WHERE id_visi_misi=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=visi_misi';
		</script>";	
}

 ?>