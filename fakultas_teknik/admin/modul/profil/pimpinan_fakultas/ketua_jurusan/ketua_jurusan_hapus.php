<?php 
$del = mysqli_query($con,"DELETE FROM tb_ketua WHERE id_struktur=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=ketua_fakultas';
		</script>";	
}

 ?>