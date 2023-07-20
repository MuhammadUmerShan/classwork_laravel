<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    .complete-body{
      background-image: url(img/bg1.jpg);
      background-position: center;
      color: #0f0;
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
        color: #0f0;
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
    <li><a href="view">HOME</a></li>
    <li><a href="insert">INSERT</a></li>
    <li><a href="edit">UPDATE</a></li>
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
<section class="card" style="background-color: rgba(0, 0, 0, 0.1);">
<form method="POST" enctype="multipart/form_data">

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="background-color: rgba(0, 0, 0, 0.3); color: #0f0;">
            <div class="card-header">
              <h3 class="card-title">UPDATE</h3>

            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">SR#</label>
                <input type="text" id="inputid" class="form-control" name="sr" style="background-color: rgba(0, 0, 0, 0.5); color: white;">
              </div>
              
              <!-- <div class="form-group">
                <label for="inputName">DP</label>
                <input type="file" id="dp">
                <button>upload dp</button>
              </div> -->
              <div class="form-group">
                <label for="inputName">NAME</label>
                <input type="text" id="inputName" class="form-control" name="name" style="background-color: rgba(0, 0, 0, 0.5); color: white;">
              </div>

              <div class="form-group">
                <label for="inputName">STUDENT_ID</label>
                <input type="text" id="inputName" class="form-control" name="s_id" style="background-color: rgba(0, 0, 0, 0.5); color: white;">
              </div>
              <div class="form-group">
                <label for="inputName">EMAIL</label>
                <input type="text" id="batch code" class="form-control" name="email"  style="background-color: rgba(0, 0, 0, 0.5); color: white;">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">BATCH_CODE</label>
                <input type="text" id="email" class="form-control" name="b_code" style="background-color: rgba(0, 0, 0, 0.5); color: white;">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row mt-5" style="text-align: center;">
        <div class="col-md-12">
          <a href="projects.php" class="btn btn-secondary">UPDATE</a>
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
</section>
</section>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






















