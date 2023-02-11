<?php 
$del = mysqli_query($con,"DELETE FROM tb_industri_pilihan WHERE no=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=industri_pilihan';
		</script>";	
}

 ?>