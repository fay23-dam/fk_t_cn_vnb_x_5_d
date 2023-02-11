<?php 
$del = mysqli_query($con,"DELETE FROM tb_ijin WHERE id=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=ijin_kuliah';
		</script>";	
}

 ?>