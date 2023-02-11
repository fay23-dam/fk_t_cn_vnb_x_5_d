<?php 

if (isset($_POST['saveGuru'])) {
    $judul_pdf = htmlentities($_POST['judul'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf');
    $file = $_FILES['file']['name'];
    $x = explode('.', $file);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name']; 
    $folder = "../assets/file_pdf_download/$file";
  
  // cek apakah ekstensi nya berupa PDF
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        // maka tambahkan ke folder assets
        if (move_uploaded_file($file_tmp, "$folder")) {
            $query = mysqli_query($con, "INSERT INTO tb_pdf_book VALUES('', '$file', '$judul_pdf')");
            if ($query) {
                echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=download');
				} ,3000);   
				</script>";
            }

        }
    }

  }elseif (isset($_POST['editGuru'])) {
	$judul_pdf = htmlentities($_POST['judul'], ENT_QUOTES);
    $target = '../assets/file_pdf_download/';
	$gambar = @$_FILES['file']['name'];
	if(!empty($gambar)){
	$pemindah=move_uploaded_file($_FILES['file']['tmp_name'],$target.$gambar);
	$editGuru = mysqli_query($con, "UPDATE tb_pdf_book SET 	nama_file_pdf='$gambar',judul_file_pdf='$judul_pdf' WHERE id='$_POST[id]' ");
  }else{
	$editGuru = mysqli_query($con, "UPDATE tb_pdf_book SET nama='$_POST[nama]',link='$_POST[keterangan]' WHERE id_kerja_sama='$_POST[id]' ");
	}
      

        if ($editGuru) {
            echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[id]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=download');
				} ,3000);   
				</script>";
        }
    }
 ?>