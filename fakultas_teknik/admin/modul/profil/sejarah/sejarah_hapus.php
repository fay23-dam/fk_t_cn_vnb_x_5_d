<?php 
$del = mysqli_query($con,"DELETE FROM tb_sejarah WHERE id_sejarah=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=profil';
		</script>";	
}

 ?>