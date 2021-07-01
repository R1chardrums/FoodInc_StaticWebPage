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

  <title>Food Inc - About Us</title>

</head>
<body>

<?php 
	require_once("layouts/header.inc.php");
?>

  <main role="main">

  <section id="parallax-page" class="p-5">
    <style>
      #parallax-page{
      	height: 400px;
        position: relative;
        background: url(img/parallax5.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }

      #parallax-page::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.5);
        z-index: 1;
      }

      #parallax-page .row{
        position: relative;
        height: 100%;
        z-index: 100;
      }
    </style>
    <div class="row align-items-center justify-content-center">
      <h1 class="text-center">ABOUT US</h1>
    </div>
  </section>

  <section id="about-page">
    <style>
      #about-page{
        background: rgb(222,222,222);
      }

      #about-page button{
        transition: 0.4s;
      }

      #about-page button:hover{
        background: red;
      }

      #about-page img{
        width: 100%;
        border-radius: 100%;
      }
    </style>
    <div class="p-4">
      <div class="row align-items-center py-5">
        <div class="col-md-4 pb-3 text-center">
          <p>This Restaurant, emerged as the greatest dream of the Kent brothers, who from a very young age, were passionate about food, since they grew up on the West Village farm, where every weekend, they saw how their grandparents were the hosts of great family barbecues, receiving a lot of respect and good comments from all the neighbors. So they agreed that, when they grew up, they would have their own Restaurant, to honor the delicious recipes of their ancestors.</p>
        </div>

        <div class="col-md-4">
        	<img class="py-3" src="img/carousel2/about3.jpg" alt="...">
        	<img class="py-3" src="img/carousel2/about5.jpg" alt="...">
        </div>

        <div class="col-md-4 pt-3 text-center">
          <p>The Kent brothers, decided to get down to work to make their dream come true, so they studied Culinary Arts and Marketing at the University, graduating with honors, and partnering with a beloved Professor who helped them have their first food truck, and then, with the success they had, they managed to rent their first food establishment, where step by step, it gave life to their own Restaurant.</p>
        </div>
      </div>
    </div>
  </section>

<?php 
  require_once("layouts/carousel.inc.php");
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