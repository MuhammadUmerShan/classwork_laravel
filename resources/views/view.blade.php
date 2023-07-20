<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    .complete-body{
      background-image: url(img/bg.jpg);
      background-position: center;
      color: white;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      width: 100%;
      overflow: hidden;
      animation: animateBg 5s linear infinite;

    }@keyframes animateBg{
      100% {
        filter: hue-rotate(360deg);
      }
    }
    .offcanvas-body ul li{
        list-style: none;
        border-bottom: 2px dashed gray;
        width: 100%;
        padding: 20px 0 10px 0; 
        font-size: 1.4rem;
        
    }a{
        text-decoration: none;
        color: white;
    }.offcanvas{
        background-color: rgba(0, 0, 0, 0.8);
    }.offcanvas-header{
        background-color: black;
        height: 100px;
        color: white;
    }.btn-close{
        color: white;
        background-color: white;
    }.nav-icon ul li{
      margin-left: 20px;
    }.nav-icon ul li a{
      color: white;
      font-size: 1.2rem;
    }
    .navbar-toggler-icon{
      color: white;
      font-size: 1.2rem;
    }
    /* }body{
        background-image: url();
    } */
  </style>
</head>
<body>
  <section class="complete-body">
<div class="container-fluid">
            
        
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <img src="img/bg5.jpg" alt="" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; background-size: cover; background-repeat: no-repeat; margin-top: 50px; margin-left: 50px;">
    <h1 class="offcanvas-title" style="margin-top: 50px;">UMER</h1>

    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" ></button>
  </div>
  <div class="offcanvas-body">
   <ul>
    <li><a href="view.php">HOME</a></li>
    <li><a href="insert.php">INSERT</a></li>
    <li><a href="edit.php">UPDATE</a></li>
    <li><a href="#">ABOUT</a></li>
    <li><a href="#">CONTACT US</a></li>
   </ul>
    <button class="btn btn-secondary pe-3" type="button">A Button</button>
  </div>
</div>

<div class="container-fluid">

         

<div class="nav-icon">


  <nav class="main-header navbar navbar-expand navbar-white text-inline">

<span class="navbar-toggler-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" style="color: black; background-color: white;"></span>  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

</div> 
</div>
</div>

<section>
  <div class="container">
    <!-- <div class="row">
      <div class="col-md-10">

      </div>
    </div> -->
    <div class="card-body">
      <table style="background-color: rgba(0, 0, 0, 0.7); text-align: center;">    
        <!-- table-striped -->
          <thead style="border-bottom: 1px solid white;  height: 50px;">
              <tr>
                  <th style="width: 5%;">
                      Sr#
                  </th>
                  <th style="width: 20%">
                      NAME
                  </th>
                  <!-- <th style="width: 10%">
                      DP
                  </th> -->
                  
                  <th style="width: 20%">
                      STUDENT_ID
                  </th>
                  <th style="width: 20%">
                    EMAIL
                </th>
                  <th style="width: 10% ">
                    BATCH_CODE
                  </th>
              </tr>
          </thead>
          
          <tbody>
            <tr>
              <td>1</td>
              
              <td>1</td>
              
              <td>1</td>
              
              <td>1</td>

              
              <td>1</td>

              <td class="project-actions text-center">
                <a class="btn btn-primary btn-sm" href="#">
                  <i class="fa fa-trash-o" aria-hidden="true"></i>

                    DELETE
                </a>
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fa fa-pencil" aria-hidden="true"></i>

                    
                    Edit
                </a>
                
            </td>
            </tr>


          </tbody>
  </div>

</section>
</section>
</body>
</html>


























<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
 -->