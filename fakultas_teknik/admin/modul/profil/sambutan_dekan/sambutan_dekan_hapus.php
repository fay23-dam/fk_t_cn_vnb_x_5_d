<?php 
$del = mysqli_query($con,"DELETE FROM tb_sambutan_dekan WHERE id_sambutan=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=sambutan_dekan';
		</script>";	
}

 ?>