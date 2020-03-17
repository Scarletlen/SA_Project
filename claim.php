<?php
//ตรวจสอบความถูกต้อง 
include('auth.php');
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<!------------------------------------------------------ import css ----------------------------------------------------------------------->
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MBK</title>

 
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 
  <link href="css/garys1.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top" class="bg-light">
<!-----------------------------------------เมนูบา--------------------------------------------------------------------->
 
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
            <a class="nav-link js-scroll-trigger" href="#cc">เงื่อนไข</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">เคลมสินค้า</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#mm">ติดตามสถานะ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.html">ลงชื่อออก</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<!----------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">ยินดีต้อนรับ</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">เว็บไซต์ เคลมสินค้า</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">เคลมสินค้า</a>
      </div>
    </div>
  </header>
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------------เงื่อนไข------------------------------------------------------------------------>
  <section id="cc" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2 class="text-white mb-4">เงื่อนไขการเคลม</h2>
          <p class="text-white-50">เงื่อนไขการเครมสินค้านั้นขึ้นอยู่กับประเภทของสินค้าเเละต้องป็นไปตามเงื่อนไขดังนี้
            1. สินค้าอยู่ในระยะเวลาประกัน         
            2. สินค้าไม่ผิดเงื่อนไขการรับประกัน
            3. ทดสอบแล้วมีอาการเสียจริง
            4. เปลี่ยนเฉพาะตัวสินค้า
            5. เมื่อส่งสินค้ามาเคลมต้องเเนบใบเสร็จมาทุกครั้ง
            6. ภายใน 7 วันหลังจากซื้อสิค้าสามารถเปลี่ยนใหม่ได้
            
        </div>
        
      </div>
      <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
  </section>
<!---------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------กรอกข้อมูลเคลม------------------------------------------------------------------------------->
 
  <header id="about" class="loadking">
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-10 col-md-20">
        <div class="card o-hidden border-9 shadow-lg my-5">
          <div class="card-body p-0">

              <div class="col-lg-15">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">เคลมสินค้า</h1>
                  </div>
      
              <!---------------------form ตัวกรอก--------------------------------->    
                  <form class="user">

                   <!----------------input ----------------------->

                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="ชื่อ">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="นามสกุล">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="ที่อยู่ email ที่ติดต่อได้">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="ชื่อสินค้า">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="รหัสสินค้า">
                      </div>
                      
                    </div>
                    
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="วัน/เดือน/ปี  ที่ทำการซื้อ">
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="ชื่อสินค้า">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="รหัสสินค้า">
                      </div>
                      
                    </div>
                    <div class="col-lg-15">
                      <div class="p-3">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">ที่อยู่ของลูกค้า</h1>
                    </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="บ้านเลขที่">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="ตำบล">
                      </div>
                      
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="อำเภอ/เขต">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="จังหวัด">
                      </div>
                      
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="ถนน">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="รหัสไปรษณีย์">
                      </div>
                      
                    </div>
                  
                    <div class="form-group">
                      
                      <a class="nav-link js-scroll-trigger" href="#cc">อ่านเงื่อนไข</a>
                       
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">ยอมรับเงื่อนไข</label>
                      </div>
                    </div>
                    
                    <!----------------------------------------------------------------------------------------->

                    <!--------------------------------link เชื่อม เมื่อกด ยืนยัน--------------------------------------------------------->
                    <a href="#" class="btn btn-primary btn-user btn-block">
                      ยืนยันข้มูล
                    </a>
                  </form>
                    <!------------------------------------------------------------------------------------------------------------->

                 
                  <!----------------------------------------------------------------------------------------------------------------------------------------------------->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
<!------------------------------------------- ติตามสถานะ------------------------------------------------------------------------------------------------------------>
  <footer class="bg-black small text-center " id="mm">
    <section id="projects" class="projects-section">
      <div class="container">
        
        <div class="row justify-content-center no-gutters mb-0 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/123.jpg" alt="">
          </div>
          
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">ติดตามสถานะของสินค้าที่ส่งเคลม</h4>
<!-----------------------------------ช่องกรอกรหัสใบเสร็จ------------------------------------->
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="กรอกรหัสใบเสร็จ">
                  </div>
<!-----------------------------------ส่วนเเสดงสถานะ---------------------------------------------------->
                  <p class="mb-0 text-white-50">สถานะปัจจุบัน</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>
      
    </section>
  </footer>

  <!--------------------------------------------import java ------------------------------------------------------------------------------------->

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/grayscale.min.js"></script>

</body>

</html>
