<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="This is a short description about Food Inc company.">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/182929ea1e.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

  <title>Food Inc</title>

</head>
<body>

<?php 
	require_once("layouts/header.inc.php");
?>

<section class="cover-hero">
  <style>

    .cover-hero{
      position: relative;
      overflow: hidden;
      height: 100%;
    }

    @media screen and (max-width: 413px) {
      .cover-hero{
        height: 116%;
      }         
    }

    .cover-hero::after{
      position: absolute;
      content: "";
      width: 100%;
      height: 100%;
      bottom:0;
      right:0;
      background: rgba(0,0,0,0.5);
      z-index: 1;
    }

    #cover-div{
      position: relative;
      height: 100%;
      color: white;
      z-index: 10;
    }

    form{
      background: rgba(255,0,0,0.5);
    }

    form .btn{
      transition: 0.3s;
      background: green!important;
      color: white;
    }

    form .btn:hover{
      color: black;
    }

    @media screen and (min-width: 1000px) {
      .cent-colums{
        margin-top: 10%;
      }         
    }

    @media screen and (max-width: 3000px) {
      .boton-form{
        display: none;
      }         
    }

    @media screen and (max-width: 320px), (max-width: 640px) and (max-height: 360px) {
      #form{
        display: none;
      }

     .boton-form{
       display: block;
     }  
   }

    .mod-space{
      height: 100%;
    }

    .modal-content{
      background: transparent!important;
      color: white!important;
      border: 0!important;
    }

    .modal-content span{
      color: white!important;
    }

  </style>

  <video autoplay muted loop style="

      position:absolute;
      bottom:0;
      right:0;
      min-height:100%;
      min-width:100%;">

        <source src="video/video.mp4" type="video/mp4">
  </video>

  <div class="container" id="cover-div">
    <div class="row align-items-center text-center" id="cover-div">
      <div class="col">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 order-md-2 cent-colums" data-aos="fade-in" data-aos-duration="3000">
            <h1>Food Inc</h1>
            <p>Excellent Catering and food services 24/7.</p>
          </div>
          <div class="col-12 col-md-7 order-md-1 cent-colums" data-aos="fade-in" data-aos-duration="3000">
            <form id="form" class="p-3">
              <h2 class="pb-3">Make A Reservation</h2>
              <div class="form-row">
                <div class="form-group col-6">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group col-6">
                  <input type="text" class="form-control" placeholder="Lastname">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <input type="number" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group col-6">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>

                <div class="form-group">
                  <input type="date" class="form-control">
                </div>
                <div class="form-group">
                  <textarea placeholder="Message" class="form-control"></textarea>
                </div>

              <button type="submit" class="btn badge badge-pill py-3 px-4">Send Your Reservation</button>
            </form>
          </div>
          <div class="col-12 boton-form text-center"><button type="button" class="btn btn-dark badge badge-pill p-3" data-toggle="modal" data-target="#formulario">Make A Reservation</button></div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="formulario" role="form" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="row align-items-center mod-space">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center">Make A Reservation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="p-2">
              <div class="form-row">
                <div class="form-group col-6">
                  <input type="text" class="form-control" placeholder="Names">
                </div>
                <div class="form-group col-6">
                  <input type="text" class="form-control" placeholder="Lastnames">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <input type="number" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group col-6">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn badge badge-pill px-4 form-control">Send Your Reservation</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>

</section>


<main role="main">

  <section id="news-scroll" class="p-5">
    <style>
      #news-scroll{
        background: rgb(222,222,222);
      }

      #news-scroll button{
        transition: 0.3s;
      }

      #news-scroll button:hover{
        background: red;
      }
    </style>
    <div class="row align-items-center py-5">
      <div class="col-12 text-center" data-aos="fade-in" data-aos-duration="1500">
        <h2 class="text-center">Join Our Newsletter</h2>
        <a href="#newsletter-section"><button type="button" class="btn btn-success badge badge-pill py-3 px-4 mt-3">Go ahead</button></a>
      </div>
    </div>
  </section>

  <section id="parallax1" class="p-5">
    <style>
      #parallax1{
        position: relative;
        background: url(img/parallax1.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }

      #parallax1::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.5);
        z-index: 1;
      }

      .menu-title{
        position: relative;
        z-index: 100;
      }
    </style>
    <div class="menu-title">
      <h2 class="text-center">Menu</h2>
    </div>
  </section>

  <section id="menu-section">
    <style>
      #menu-section button{
        transition: 0.3s;
      }

      #menu-section button:hover{
        background: red;
      }

      #menu-section .pic{
        width: 90%;
        border-radius: 100%;
        box-shadow: 6px 6px 10px grey, -6px -6px 10px grey;
      }
    </style>
    <div class="p-4">
      <div class="row py-5">
        <div class="col-12 text-center">
        <div class="owl-carousel">

          <div class="item m-3">
        <div class="container">
          <div class="row justify-content-center">
          <img class="pic" src="img/minestrone.jpg" alt="food-picture">
          <h3 class="pt-3">Minestrone Soup</h3>
          </div>
        </div>
          </div>

          <div class="item m-3">
        <div class="container">
          <div class="row justify-content-center">
          <img class="pic" src="img/pizza.jpg" alt="food-picture">
          <h3 class="pt-3">Italian Pizza</h3>
          </div>
        </div>
          </div>

          <div class="item m-3">
        <div class="container">
          <div class="row justify-content-center">
          <img class="pic" src="img/rice.jpg" alt="food-picture">
          <h3 class="pt-3">Fried Rice</h3>
          </div>
        </div>
          </div>

          <div class="item m-3">
        <div class="container">
          <div class="row justify-content-center">
          <img class="pic" src="img/chiken.jpg" alt="food-picture">
          <h3 class="pt-3">Fried Chiken</h3>
          </div>
        </div>
          </div>

          <div class="item m-3">
        <div class="container">
          <div class="row justify-content-center">
          <img class="pic" src="img/omelet.jpg" alt="food-picture">
          <h3 class="pt-3">Omelet</h3>
          </div>
        </div>
          </div>
        </div>
        </div>



        <div class="col text-center" data-aos="fade-up" data-aos-duration="1500">
          <a href="menu.php"><button type="button" class="btn btn-success mt-4 badge badge-pill py-3 px-4">See More</button></a>
        </div>
      </div>

    </div>
  </section>

<?php 

  require_once("layouts/why_is_good.inc.php");
  require_once("layouts/carousel.inc.php");
?>

  <section id="parallax4" class="p-5">
    <style>
      #parallax4{
        position: relative;
        background: url(img/parallax4.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }

      #parallax4::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.5);
        z-index: 1;
      }

      .catering-title{
        position: relative;
        z-index: 100;
      }
    </style>
    <div class="catering-title">
      <h2 class="text-center">We Cater For Your Events</h2>
    </div>
  </section>

  <section id="catering-section">
    <style>
      #catering-section{
        background: rgb(222,222,222);
      }

      #catering-section button{
        transition: 0.3s;
      }

      #catering-section button:hover{
        background: red;
      }

      #catering-section img{
        width: 100%;
        box-shadow: 6px 6px 10px grey, -6px -6px 10px grey;
      }
    </style>
    <div class="p-4">
      <div class="row align-items-center py-5">
        <div class="col-md-6" data-aos="fade-in" data-aos-duration="1500">
          <img src="img/catering.jpg" alt="catering-image">
        </div>

        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1500">
          <p class="pt-3">We offer you a catering service for any event, even allowing you to agree the menu directly with our chef.</p>
          <button type="button" class="btn btn-success badge badge-pill py-3 px-4" data-toggle="modal" data-target="#booknow">Book Now</button>
        </div>
      </div>
    </div>


    <div class="modal fade" id="booknow" role="form" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="row align-items-center mod-space">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center">Make A Reservation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="p-2">
              <div class="form-row">
                <div class="form-group col-6">
                  <input type="text" class="form-control" placeholder="Names">
                </div>
                <div class="form-group col-6">
                  <input type="text" class="form-control" placeholder="Lastnames">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <input type="number" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group col-6">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn badge badge-pill px-4 form-control">Send Your Reservation</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>


  </section>

  <section id="parallax5" class="p-5">
    <style>
      #parallax5{
        position: relative;
        background: url(img/parallax5.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }

      #parallax5::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.5);
        z-index: 1;
      }

      .about-title{
        position: relative;
        z-index: 100;
      }
    </style>
    <div class="about-title">
      <h2 class="text-center">About Us</h2>
    </div>
  </section>

  <section id="about-section">
    <style>

      #about-section button{
        transition: 0.3s;
      }

      #about-section button:hover{
        background: red;
      }

      #about-section img{
        width: 100%;
        border-radius: 100%;
      }

      .owl-carousel2 img{
        box-shadow: 6px 6px 10px grey, -6px -6px 10px grey;
      }
    </style>
    <div class="p-4">
      <div class="row align-items-center py-5">
        <div class="col-12 pb-3 text-center">
          <p>This Restaurant, emerged as the greatest dream of the Kent brothers, who from a very young age, were passionate about food, since they grew up on the West Village farm, where every weekend, they saw how their grandparents were the hosts of great family barbecues, receiving a lot of respect and good comments from all the neighbors.</p>
        </div>

        <div class="col-12 text-center">
        <div class="owl-carousel">

          <div class="item m-3">
            <img src="img/carousel2/about1.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel2/about2.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel2/about3.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel2/about4.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel2/about5.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel2/about6.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel2/about7.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel2/about8.jpg" alt="...">
          </div>
        </div>
        </div>

        <div class="col-12 pt-3 text-center">
          <p>So they agreed that, when they grew up, they would have their own Restaurant, to honor the delicious recipes of their ancestors.</p>
          <a href="about.php"><button type="button" class="btn btn-success badge badge-pill py-3 px-4">Read More</button></a>
        </div>
      </div>
    </div>
  </section>

<?php 
  require_once("layouts/newsletter.inc.php");
?>

</main>


<?php 
  require_once("layouts/footer.inc.php");
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
  AOS.init({
  easing: 'ease-out-back',
  duration: 1000
  });

  var owl = $('.owl-carousel');
  owl.owlCarousel({
      items:4,
      loop:true,
      autoplay:true,
      autoplayTimeout:2500,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        500:{
            items:3
        },
        1000:{
            items:4
        }
    }
  });
</script>
</body>
</html>