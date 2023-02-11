<?php 
$del = mysqli_query($con,"DELETE FROM tb_struktur_organisasi WHERE id_struktur=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=struktur_organisasi';
		</script>";	
}

 ?>