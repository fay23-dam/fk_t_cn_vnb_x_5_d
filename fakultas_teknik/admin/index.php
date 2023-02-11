<?php
session_start();
include '../config/db.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login - Dashboard Admin Fakultas Teknik </title>
  <link rel="icon" href="../assets/assets/img/kepala teknik.png"/>
  <link rel="stylesheet" href="./style.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <style>
    .right{
      width: 100%;
      height: 130%;
    }
    .left{
      height: 115%;
    }
  </style>
</head>

<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login Admin</div>
      <div class="eula">Login terlebih dahulu sebelum masuk dashboard</div>
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
      <div class="form" >
        <form action="" method="post">
        <label for="email">Username</label>
        <input type="email" id="email" name="username" placeholder="username" >
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password">
        <ul></ul>
        <div class="g-recaptcha" data-sitekey="6LeqYU4kAAAAAHPgiZOSGe7ijoP7l4XM9a0YPCxm" ></div>
        <input type="submit" id="submit" value="Submit">
        </form>
        			<?php
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {

              // Secret Key ini kita ambil dari halaman Google reCaptcha
              // Sesuai pada catatan saya di STEP 1 nomor 6
              $secret_key = "6LeqYU4kAAAAAD4r6gJXp82vDP4OUij1e-7BpgIT";
              // Disini kita akan melakukan komunkasi dengan google recpatcha
              // dengan mengirimkan scret key dan hasil dari response recaptcha nya
              $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
                $response = json_decode($verify);
                if($response->success){ 
                // Jika proses validasi captcha berhasil  
                $pass = md5($_POST['password']);
					$sqlCek = mysqli_query($con, "SELECT * FROM tb_admin WHERE username='$_POST[username]' AND password='$pass' ");
					$jml = mysqli_num_rows($sqlCek);
					$d = mysqli_fetch_array($sqlCek);

					if ($jml > 0) {
						$_SESSION['admin'] = $d['id_admin'];


						echo "
									<script type='text/javascript'>
									setTimeout(function () { 
									
									swal('(Administrator) ', 'Login berhasil', {
									icon : 'success',
									buttons: {        			
									confirm: {
									className : 'btn btn-success'
									}
									},
									});    
									},10);  
									window.setTimeout(function(){ 
									window.location.replace('./dashboard.php');
									} ,3000);   
									</script>";




					} else {
						echo "
									<script type='text/javascript'>
									setTimeout(function () { 
									
									swal('Sorry!', 'Username / Password Salah', {
									icon : 'error',
									buttons: {        			
									confirm: {
									className : 'btn btn-danger'
									}
									},
									});    
									},10);  
									window.setTimeout(function(){ 
									window.location.replace('index.php');
									} ,3000);   
									</script>";
					}
                
                      }else{ 
                        // Jika captcha tidak valid  
                        echo "<h2>Captcha Tidak Valid</h2>"; 
                         echo "Ohh sorry, you're not human (Anda bukan manusia)<hr>";  
                         echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";}
				
					
				}
				?>
		<br>
		<a style="color: antiquewhite;" href="pass-reset.php"><p style="text-align: center;">Lupa Password</p></a>
      </div>
    </div>
	
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script><script  src="./script.js"></script>

</body>
</html>



