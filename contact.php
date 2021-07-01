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

  <title>Food Inc - Contact Us</title>

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
        background: url(img/parallax2.jpg);
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
      <h1 class="text-center">CONTACT US</h1>
    </div>
  </section>

  <section id="contact-page">
    <style>
      #contact-page{
        background: rgb(135,0,0);
        color: white;
      }

      #contact-page button{
        transition: 0.4s;
      }

      #contact-page button:hover{
        background: red;
      }

      #contact-page img{
        width: 100%;
        border-radius: 100%;
      }

      .map-cont{
      	height: 500px;
      }

      .map-cont iframe{
      	width: 100%;
      	height: 100%;
      }

      .i-contact{
      	color: white;
      }
    </style>
    <div class="p-4">
      <div class="row align-items-center">
        <div class="col-md-6 pb-3 text-center">
        	<div class="row">
	    		<div class="col-md-6 text-center py-2" data-aos="fade-down" data-aos-delay="600">
	    			<p><a href=""><i class="fab fa-facebook-square fa-5x i-contact"></i></a></p>
	    			<p class="text-center">Click like to our Facebook</p>
	    		</div>
	    		<div class="col-md-6 text-center py-2" data-aos="fade-down" data-aos-delay="600">
	    			<p><a href=""><i class="fab fa-instagram fa-5x i-contact"></i></a></p>
	    			<p class="text-center">Follow us in Instagram</p>
	    		</div>

	    		<div class="col-md-6 text-center py-2" data-aos="fade-down" data-aos-delay="600">
	    			<p><a href=""><i class="fas fa-phone fa-5x i-contact"></i></a></p>
	    			<p class="text-center">Call Us: (702)637-4222</p>
	    		</div>
	    		<div class="col-md-6 text-center py-2" data-aos="fade-down" data-aos-delay="600">
	    			<p><a href="mailto:info@foodinc.com"><i class="fas fa-envelope fa-5x i-contact"></i></a></p>
	    			<p class="text-center">Send a message: info@foodinc.com</p>
	    		</div>
        	</div>
        </div>
	    <div class="col-md-6 map-cont">
	    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5427.722533376726!2d-115.16269232430894!3d36.01191351173899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa61d3a9a52726bc!2sSilvera%20Enterprises%20%7C%20Website%20Design%20%26%20Marketing%20Agency!5e0!3m2!1sen!2sve!4v1606679442437!5m2!1sen!2sve" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	    </div>
      </div>
    </div>
  </section>

  <section id="form-section">
  	<style>
      #form-section{
        background: rgb(222,222,222);        
      }

      #form-section button{
      	transition: 0.4s;
      }

      #form-section button:hover{
      	background: red;
      }

  	</style>
  	<div class="p-4">
      <div class="row align-items-center">
      	<div class="col-12">
        <form id="form">
          <h2 class="pb-3 text-center">Make A Reservation</h2>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" placeholder="Lastname">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="number" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <input type="date" class="form-control">
          </div>
          <div class="form-group">
            <textarea placeholder="Message" class="form-control"></textarea>
          </div>
          <div class="text-center">
          	<button type="submit" class="btn btn-success badge badge-pill py-3 px-4">Send Your Reservation</button>
      	  </div>
        </form>
    	</div>
      </div>
  	</div>
  </section>

</main>

<?php 
  require_once("layouts/footer.inc.php");
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
  easing: 'ease-out-back',
  duration: 1000
  });
</script>
</body>
</html>