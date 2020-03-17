<!DOCTYPE php>
<php lang="en">


<!-----------------------------import css--------------------------------------------------------------->

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MBK</title>

 
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  


  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/graymain4.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<!---------------------------------------------------------------------------------------------------------->

<!-------------------------------------เมนูบา---------------------------------------------------------------->

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MBK STORE X </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">ลงชื่อเข้าใช้</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">เปลี่ยนรหัสผ่าน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Create_1.php">สร้างบัญชีใหม่</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!---------------------------------------------------------------------------------------------------------->

 <!-----------------------------------ส่วนการกรอกข้อมูล-------------------------------------------------------------------->
  <header id="about" class="loadking3">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
          
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image">
              	<img class="mx-auto " src="img/6.jpg" alt="" width="470"  height="600">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">คุณลืมรหัสผ่านใช่ไหม?</h1>
                    <p class="mb-4"> กรอก Email ของท่านที่ได้ทำการลงทะบียน เพื่อส่งทำการส่งข้อความทำการรีเซ็ตรหัส</p>
                  </div>
                  <!-------------------------------------------form กรอกข้อมูล------------------------------------------------------------------------------------------------------------>
                  <form class="user">
                    <!-----------------------------------------input email ------------------------------------------------------------------------------------------------------------------------->
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <!------------------------------------------------------------------------------------------------------------------------------------------------------------->

                    <!-----------------------------------------link เชื่อม เมื่อกด เปลี่ยนระหัสผ่าน--------------------------------------------------------------------------------------------------------------------->
                    <a href="index.php" class="btn btn-primary btn-user btn-block">
                      เปลี่ยนรหัสผ่าน
                    </a>
                    <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                  </form>
                  <hr>
                  <!---------------------------------link เชื่อม เมื่อกดสร้างบัญชีเเละกลับสู่หน้าหลัก---------------------------------------------------------------------------->
                  <div class="text-center">
                    <a class="small" href="Create_1.php">สร้างบัญชีใหม่</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="index.php">กลับสู่หน้าหลักเพื่อลงชื่อเข้าใช้</a>
                  </div>
                  <!------------------------------------------------------------------------------------------------------------------------------------------------------->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  </header>
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

<!----------------------------------import java script------------------------------------------------------------------>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/grayscale.min.js"></script>

</body>

</php>
