<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
 
 

    <title>Document</title>
    
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user-signup">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user-signup">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user-signup">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="user-signup" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 






      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/a.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/b.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/c.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    </header>

    <section class="abc mt-5">
        <div class="container-fluid">
            <div class="row mt-2 px-3">
                <div class="col-md-4 col-lg-4 col-12 p-1">
                    <img src="img/g.avif" alt="" style="width: 100%; height: 200px;">
                </div>

                <div class="col-md-4 col-lg-4 col-12 p-1">
                    <img src="img/e.jpg" alt="" style="width: 100%; height: 200px;">
                </div>

                <div class="col-md-4 col-lg-4 col-12 p-1">
                    <img src="img/d.jpg" alt="" style="width: 100%; height: 200px;">
                </div>
            </div>
        </div>
    </section>

    <section class="filter">

        <section class="img-gallery">
            <div class="container heading text-center">
              <div class="col-md-10 offset-md-1 mt-5">
                
                <h1 style="border-bottom: 2px solid gray;">IMAGE GALLERY</h1>
                
                <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque
                    fuga
                    in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
          
            </div>




        <div class="gallery">
            <ul class="controls">
              <li class="buttons active" data-filter="all">All</li>
              <li class="buttons" data-filter="NORTH">NORTH</li>
              <li class="buttons" data-filter="SOUTH">SOUTH</li>
              <li class="buttons" data-filter="EAST">EAST</li>
              <li class="buttons" data-filter="WEST">WEST</li>
      
            </ul>
            <div class="image-container">
              <a href="img/a.jpg" class="image NORTH">
                <img src="img/a.jpg" alt="">
              </a>
              
              <a href="img/a.jpg" class="image NORTH">
                <img src="img/a.jpg" alt="">
              </a>
      
              
              <!-- --------- -->
      
      
              <a href="img/a.jpg" class="image SOUTH">
                <img src="img/a.jpg" alt="">
              </a>
      
              <a href="img/a.jpg" class="image SOUTH">
                <img src="img/a.jpg" alt="">
              </a>
      
              <!-- ------- -->
              
      
              <a href="img/a.jpgp" class="image EAST">
                <img src="img/a.jpg" alt="">
              </a>
      
              <a href="img/a.jpgp" class="image EAST">
                <img src="img/a.jpg" alt="">
              </a>
      
              <!-- --------------- -->
      
              <a href="img/a.jpg" class="image WEST">
                <img src="img/a.jpg" alt="">
                
              </a>  
                <a href="img/a.jpg" class="image WEST">
                  <img src="img/a.jpg" alt="">
                </a>
                  
              <!-- ------------------>
      
      
      
            </div>
          </div>
       
      </div>
    </section>

    <section class="services mt-5">
        <div class="services">
        <div class="container-fluid">
            <div class="row text-center">
                <h1 class="text-white mt-5">SERVICES</h1>
                <div class="col-md-4 col-12 mt-5">
                    <div class="abc">
                    <i class="fa fa-faceboo mt-3"></i>
                    <h3>lorem</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div> 

            <div class="col-md-4 col-12 mt-5">
                <div class="abc">
                <i class="fa fa-facebook mt-3"></i>
                <h3>lorem</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="col-md-4 col-12 mt-5">
            <div class="abc">
            <i class="fa fa-facebook mt-3"></i>
            <h3>lorem</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
    </div>

    <div class="col-md-4 col-12 mt-5">
        <div class="abc">
        <i class="fa fa-facebook mt-3"></i>
        <h3>lorem</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    </div>
</div>
<div class="col-md-4 col-12 mt-5">
    <div class="abc">
    <i class="fa fa-facebook mt-3"></i>
    <h3>lorem</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
</div>
</div>

<div class="col-md-4 col-12 mt-5">
            <div class="abc">
            <i class="fa fa-facebook mt-3"></i>
            <h3>lorem</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
    </div>

            </div>
        </div>
    </div>
    </section>

    <section class="blog mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="card">
                        <img src="img/c.jpg" alt="">
                        <h3>lorem ipsum</h3>
                        <p class="text-center px-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint esse molestiae commodi amet ab blanditiis quaerat accusantium, necessitatibus laudantium mollitia quas.</p>
                    <button><a href="user-signup">more</a></button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="img/c.jpg" alt="">
                        <h3>lorem ipsum</h3>
                        <p class="text-center px-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint esse molestiae commodi amet ab blanditiis quaerat accusantium, necessitatibus laudantium mollitia quas.</p>
                    <button><a href="user-signup">more</a></button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="img/c.jpg" alt="">
                        <h3>lorem ipsum</h3>
                        <p class="text-center px-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint esse molestiae commodi amet ab blanditiis quaerat accusantium, necessitatibus laudantium mollitia quas.</p>
                    <button><a href="user-signup">more</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>





    









<a href="user-signup">login</a>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
$(document).ready(function(){

$('.buttons').click(function(){

$(this).addClass('active').siblings().removeClass('active');

var filter = $(this).attr('data-filter')

if(filter == 'all'){
  $('.image').show(400);
 }else{
 $('.image').not('.'+filter).hide(200);
 $('.image').filter('.'+filter).show(400);
 }

});

$('.gallery').magnificPopup({

 delegate:'a',
 type:'image',
 gallery:{
     enabled:true
     
 }

});

});



</script>




  




 
<script src="js/index.js"></script>
</body>
</html>