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
  <link href="css/graymain3.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>
<!-------------------------------------เมนูบา---------------------------------------------------------------->
<body id="page-top">
  <?php
    require('db.php');
    //if submint insert to db
    if(isset($_REQUEST['FirstName'])){
      //remove //
      $firstName = stripslashes($_REQUEST['FirstName']);
      //escape spaical char
      $firstName = mysqli_real_escape_string($con,$firstName);
      $lastName = stripslashes($_REQUEST['LastName']);
      //escape spaical char
      $lastName = mysqli_real_escape_string($con,$lastName);
      $email = stripslashes($_REQUEST['Email']);
      $email = mysqli_real_escape_string($con,$email);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($con,$password);
      $trn_date = date("Y-m-d H:i:s");
      //userid มีปัญหา
      $sql = "SELECT * FROM users";
      $objquery = mysqli_query($con,$sql);
      $num = mysqli_num_rows($objquery);
      $userid = str_pad($num,6,"0",STR_PAD_LEFT);
      $query = "INSERT INTO users(userid,first_name,last_name,email,password,time)
                VALUES ('$userid','$firstName','$lastName','$email','$password','$trn_date');";
      $result = mysqli_query($con,$query);
      if($result)
      {
        header("Location: Create1complete.php");
      }
      
    }
      else{
    ?>
 <form action="" method = "POST" name="Create_1" class = "user">   
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MBK STORE X </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i></button>
      <div class="collapse navbar-collapse" id="navbarResponsive"><ul class="navbar-nav ml-auto"><li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">ลงชื่อเข้าใช้</a></li><li class="nav-item"><a class="nav-link js-scroll-trigger" href="indexForgot.php">เปลี่ยนรหัสผ่าน</a></li><li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">สร้างบัญชีใหม่</a></li></ul></div>
    </div>
  </nav>
  <!-----------------------------------ส่วนการกรอกข้อมูล-------------------------------------------------------------------->
  <header id="about" class="loadking2" >

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-password-image"><img class="mx-auto " src="img/8.jpg" alt="" width="470"  height="600"></div>
                <div class="col-lg-6"><div class="p-5"><div class="text-center"><h1 class="h4 text-gray-900 mb-4">สร้างบัญชี</h1></div>
                <form class="user">
                  <!-----input ชื่อ เเละ นามสกุล ติดภาษาภาษาอังกฤษ-->
                  <div class="form-group row">
                    <!--input ชื่อ--->
                    <div class="col-sm-6 mb-3 mb-sm-0"><input type="text" class="form-control form-control-user" id="exampleFirstName" name="FirstName" pattern="[A-Za-z]{0,50}" title="โปรดใช้ภาษาอังกฤษ ห้ามใส่ตัวอักษรพิเศษและตัวเลข เช่น !@#_+=" placeholder="First Name" require></div>
                    <!--input นามสกุล-->
                    <div class="col-sm-6"><input type="text" class="form-control form-control-user" id="exampleLastName" name="LastName" pattern="[A-Za-z]{0,50}" title="โปรดใช้ภาษาอังกฤษ ห้ามใส่ตัวอักษรพิเศษและตัวเลข เช่น !@#_+=" placeholder="Last Name" require></div>
                  </div>
                  <!--input email-->
                  <div class="form-group"><input type="email" class="form-control form-control-user" id="exampleInputEmail" name="Email" placeholder="Email Address" require></div>
                  <!--input รหัสผ่าน-->
                  <div class="form-group row"><div class="col-sm-6 mb-3 mb-sm-0"><input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" require></div>
                  <!--repass-->
                  <div class="col-sm-6"><input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password"></div></div>
                  <!---link เชื่อม เมื่อกดสร้างบัญชี-->
                  <input type="submit" name="submit" value="สร้างบัญชี" class="btn btn-primary btn-user btn-block">
                </form>
                <hr>
                <div class="text-center"><a class="small" href="indexForgot.php">คุณลืมรหัสใช่ไหม</a></div>
                <div class="text-center"><a class="small" href="index.php">กลับไปยังหน้าหลักเพื่อเข้าสู่ระบบ</a></div>
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
