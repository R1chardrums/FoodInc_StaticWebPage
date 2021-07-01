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

  <title>Food Inc - Menu</title>

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
        background: url(img/parallax1.jpg);
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
      <h1 class="text-center">MENU</h1>
    </div>
  </section>

  <section id="menu-page">
    <style>

      #menu-page{
        background: rgb(222,222,222);  
      }

      #menu-page button{
        transition: 0.4s;
      }

      #menu-page button:hover{
        background: red;
      }

      #menu-page .pic{
        width: 100%;
        box-shadow: 6px 6px 10px white, -6px -6px 10px white;
      }

      .menu-site{
        background: rgba(255,0,0,0.7);
        color: white;
      }
    </style>
    <div class="p-4">
      <div class="row py-5">
        <div class="py-4 col-md-6 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <div class="row align-items-center">
          	<div class="col-md-5">
            	<img class="pic" src="img/meat.jpg" alt="food-picture">
          	</div>

        	<div class="col-md-7">
        	  <h3 class="pt-3">Meat Menu</h3>
        	  <p>For meat lovers, we have a wide variety of dishes, from roasts, steaks, chicken, barbecue, and endless options, adapting to the cooking term you prefer.  And also, you can accompany everything with french fries, vegetables or salad.</p>
        	</div>
    	  </div>
        <div class="row">
          <div class="col-12 py-4">
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">BBQ</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 5.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Chiken</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 6.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Fish</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 7.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Pig</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 8.00</p></div>
            </div>
          </div>
        </div>
        </div>

        <div class="py-4 col-md-6 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <div class="row align-items-center">
          	<div class="col-md-5">
            	<img class="pic" src="img/vegan.jpg" alt="food-picture">
          	</div>

        	<div class="col-md-7">
        	  <h3 class="pt-3">Vegan Menu</h3>
        	  <p>We do not discriminate any taste, and for that reason, we offer you a menu with 100% vegan food, with great specialties based on grains, vegetables and peppers, that have nothing to envy on the meat.</p>
        	</div>
    	  </div>
        <div class="row">
          <div class="col-12 py-4">
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Noodles</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 13.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Rice</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 14.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Omelet</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 15.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Salad</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 16.00</p></div>
            </div>
          </div>
        </div>
        </div>

        <div class="py-4 col-md-6 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <div class="row align-items-center">
          	<div class="col-md-5">
            	<img class="pic" src="img/children.jpg" alt="food-picture">
          	</div>

        	<div class="col-md-7">
        	  <h3 class="pt-3">Children Menu</h3>
        	  <p>Because we want there to be any problems with the smallest of the house, we have the best family plan, with a simple menu that can be easily adapted to the taste of every children.</p>
        	</div>
    	  </div>
        <div class="row">
          <div class="col-12 py-4">
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Pizza</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 9.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Hot Dog</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 10.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">French Fries</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 11.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Burger</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 12.00</p></div>
            </div>
          </div>
        </div>
        </div>

        <div class="py-4 col-md-6 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <div class="row align-items-center">
          	<div class="col-md-5">
            	<img class="pic" src="img/no-gluten.jpg" alt="food-picture">
          	</div>

        	<div class="col-md-7">
        	  <h3 class="pt-3">Gluten Free Menu</h3>
        	  <p>In solidarity with all of those who require gluten-free food, or simply prefer to follow a diet of this type, we opted to add totally gluten-free dishes of great quality to our menu.</p>
        	</div>
    	  </div>
        <div class="row">
          <div class="col-12 py-4">
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Fainá</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 17.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Hummus</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 18.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Falafel</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 19.00</p></div>
            </div>
            <div class="row align-items-center py-2 m-2 menu-site">
              <div class="col-6 text-left"><p style="margin: 0;">Yakisoba</p></div>
              <div class="col-6 text-right"><p style="margin: 0;">$ 20.00</p></div>
            </div>
          </div>
        </div>
        </div>
      </div>

    </div>
  </section>

  <section id="visit-us" class="p-5">
    <style>
      #visit-us button{
        transition: 0.4s;
      }

      #visit-us button:hover{
        background: red;
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

    #visit-us form{
      background: rgba(255,0,0,0.5);
    }

    #visit-us form .btn{
      transition: 0.3s;
      background: green!important;
      color: white;
    }

    #visit-us form .btn:hover{
      color: black;
    }
    </style>
    <div data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
      <h2 class="text-center py-4">You need visit this place definitly</h2>
      <div class="text-center">
      	<button type="button" href="contact.php" class="btn btn-success mx-3 mb-4 badge badge-pill py-3 px-4" data-toggle="modal" data-target="#booknow">Make A Reservation</button>

        <a href="contact.php"><button type="button" class="btn btn-success mx-3 mb-4 badge badge-pill py-3 px-4">Contact Us</button></a>
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

<?php 
  require_once("layouts/why_is_good.inc.php");
?>

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