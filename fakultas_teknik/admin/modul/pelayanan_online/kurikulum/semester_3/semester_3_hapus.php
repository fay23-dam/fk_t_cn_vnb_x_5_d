<?php 
$del = mysqli_query($con,"DELETE FROM tb_semester_3 WHERE no=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=semester_tiga';
		</script>";	
}

 ?>