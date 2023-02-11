<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// connecting to database
$conn = mysqli_connect("localhost", "root", "", " fakultas_teknik") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT jawaban FROM chat WHERE id='$getMesg'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['jawaban'];
    echo $replay;
}else{

	//ini sesuaikan foldernya ke file 3 ini
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';


   	//sesuaikan name dengan di form nya ya 
  	$email = 'saddamsword23@gmail.com';
  	$judul = 'Kirim E-Mail';
  	$pesan = $getMesg;

     // https://gilacoding.com/read/cara-kirim-email-sederhana-dengan-php-mailer

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    //$mail->SMTPDebug = 2;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'saddansatria23@gmail.com';                     //SMTP username
	    $mail->Password   = 'tbyxrfjgjjokpqpm';                               //SMTP password
	    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
	    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	    //pengirim
	    $mail->setFrom('saddansatria23@gmail.com', 'Customer Service');
	    $mail->addAddress($email);     //Add a recipient
	 
	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = $judul;
	    $mail->Body    = $pesan;
	    $mail->AltBody = '';
	    //$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
	    //$mail->addAttachment(''); 

	    $mail->send();
	    echo '';
	} catch (Exception $e) {
	    echo '';

	}

        
    echo "Pertanyaan kamu sudah kami kirim ke Email";
}

?>