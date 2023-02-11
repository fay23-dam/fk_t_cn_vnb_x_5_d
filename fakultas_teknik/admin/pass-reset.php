<?php 
    if(isset($_POST["submit-reset"])){
        include('../config/db.php');
        $email = $_POST["email"];

        $sql = mysqli_query($con, "SELECT * FROM tb_admin WHERE username='$email'");
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, no emails exists "?>");
            </script>
            <?php
        }else if($fetch["code"] == 0){
            ?>
               <script>
                   alert("Sorry, your account must verify first, before you recover your password !");
                   window.location.replace("index.php");
               </script>
           <?php
        }else{
            // generate token by binaryhexa 
           $token = rand(999999, 111111);
    var_dump($token);
            //session_start ();
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            require "../Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // h-hotel account
            $mail->Username='saddansatria23@gmail.com';
            $mail->Password='tbyxrfjgjjokpqpm';

            // send by h-hotel email
            $mail->setFrom('saddansatria23@gmail.com', 'Password Reset');
            // get email from input
            $mail->addAddress($_POST["email"]);
            //$mail->addReplyTo('lamkaizhe16@gmail.com');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Untuk Kamu</b>
            <h3> Ubah Password.</h3>
            <p>Kode Recover :<b> $token</b></p>
            salin kode di atas dan pastekan ke bagian kode verifikasi
            <br><br>
            <p>With Sazara,</p>
            <b>Have a Nice Day</b>";

            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo " Invalid Email "?>");
                    </script>
                <?php
            }else{
      $cv = mysqli_query($con, "UPDATE tb_admin SET code='$token' WHERE username='$_POST[email]'");       
      
      
                ?>
                <script>
            window.location.replace('kode_pass.php');
        </script>
                  
                <?php
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login - Dashboard Admin Fakultas Teknik </title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Password Recover</div>
      <div class="eula">Password Recover.</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
      <form action="#" method="post">
        <label for="email">Enter Email</label>
        <input type="email" id="email" name="email">
        <input type="submit" id="submit" value="Submit" name="submit-reset">
        <a style="color: antiquewhite;" href="index.php"><p style="text-align: center;">Login</p></a>
          </form>
     
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script><script  src="./script.js"></script>

<!-- partial -->
  

</body>
</html>



