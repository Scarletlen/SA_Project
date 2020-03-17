<!DOCTYPE html>
<html lang="en">

<!-----------------------------import css--------------------------------------------------------------->
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MBK</title>
 
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/graymain2.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<!-------------------------------------เมนูบา---------------------------------------------------------------->
<body id="page-top">
  <?php 
        require('db.php');
        session_start();
        if(isset($_POST['Email'])){
          $email = stripslashes($_REQUEST['Email']);
          $email = mysqli_real_escape_string($con,$email);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con,$password);
          $query = "SELECT * FROM users WHERE email='$email' AND password ='$password'";

          $result = mysqli_query($con,$query) or die(mysqli_error());
          $rows = mysqli_num_rows($result);
          if($rows == 1){
            //ถ้าข้อมูลถูกเข้าระบบ
            $_SESSION['email']= $email;
            //go to หน้าเคลม
            header("Location: claim.php");
          } else{
            //ผิด
              echo"
                <div class='form'>
                  <h3>email/pass is incorrect.</h3>
                  <br>click here to <a href='index.php'>Login</a>
              ";
          }
        }
        else{
  ?>
<form action="" method = "POST" name="index" class="user">   
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MBK STORE X </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">ลงชื่อเข้าใช้</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="indexForgot.php">เปลี่ยนรหัสผ่าน</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Create_1.php">สร้างบัญชีใหม่</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-----------------------------------ส่วนการกรอกข้อมูล-------------------------------------------------------------------->
  <header id="about" class="loadking">
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-9 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"><img class="mx-auto " src="img/5.jpg" alt="" width="470"  height="600"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center"><h1 class="h4 text-gray-900 mb-4">ลงชื่อเข้าใช้</h1></div>   
                  <form class="user">
                   <!--input email-->
                    <div class="form-group"><input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="Email" placeholder="Enter Email Address " require></div>
                    <!--input password-->
                    <div class="form-group"><input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" require></div>
                    <!--ส่วน remember me จดจำระหัสไหม-->
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <!--------------------------------link เชื่อม เมื่อกด login--------------------------------------------------------->
                    <input type="submit" name="submit" value="เข้าสู่ระบบ" class="btn btn-primary btn-user btn-block">
                      
                 
                  </form>
                    <!---------------------------------link เชื่อม เมื่อกดเปลี่ยนรหัสผ่านเเละสร้างบัญชี---------------------------------------------------------------------------->
                  <hr>
                  <div class="text-center"><a class="small" href="indexForgot.php">คุณลืมรหัสผ่านใช่ไหม</a></div>
                  <div class="text-center"><a class="small" href="Create_1.php">สร้างบัญชีใหม่</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/grayscale.min.js"></script>
</form>
<?php } ?>
</body>

</html>
