<?php 
$del = mysqli_query($con,"DELETE FROM tb_sipil WHERE no=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=sipil';
		</script>";	
}

 ?>