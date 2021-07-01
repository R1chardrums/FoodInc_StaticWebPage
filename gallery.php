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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.9.0/baguetteBox.min.css" integrity="sha512-tbjZFdjHyHckTfeqkgVFcQ3GJWVfdsNYFvl+rEWmofjj9JpWaohlZgq0Vb6Hav5rqIL019LFpLsE+sTNSfNVXA==" crossorigin="anonymous" />

  <title>Food Inc - Gallery</title>

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
        background: url(img/parallax3.jpg);
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
      <h1 class="text-center">GALLERY</h1>
    </div>
  </section>

		<section id="gallery-page" class="py-5">
			<style>

				#gallery-page{
        		  background: rgb(222,222,222);
				}

		        #gallery-page button{
		          transition: 0.4s;
		        }

		        #gallery-page button:hover{
		          background: red;
		        }

				.alzar{
					border-radius: 100%;
					overflow: hidden;
        			box-shadow: 6px 6px 10px grey, -6px -6px 10px grey;
					transition: 0.2s;
				}
				.alzar:hover{
					transform: translateY(-15px);
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

			    #gallery-page form{
			      background: rgba(255,0,0,0.5);
			    }

			    #gallery-page form .btn{
			      transition: 0.3s;
			      background: green!important;
			      color: white;
			    }

			    #gallery-page form .btn:hover{
			      color: black;
			    }

			</style>
			<div class="container">
				<div class="row justify-content-center mt-4 mx-2 galeria-baguette"> 

				<div class="col-12 text-center py-3" data-aos="fade-in"><h2>Meat Menu</h2></div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/1.jpg">
								<img class="card-img-top" src="img/gallery/1.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-down" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/2.jpg">
								<img class="card-img-top" src="img/gallery/2.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/3.jpg">
								<img class="card-img-top" src="img/gallery/3.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>					
				
				<div class="col-12 text-center py-3" data-aos="fade-in"><h2>Vegan Menu</h2></div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/4.jpg">
								<img class="card-img-top" src="img/gallery/4.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-down" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/5.jpg">
								<img class="card-img-top" src="img/gallery/5.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/6.jpg">
								<img class="card-img-top" src="img/gallery/6.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>					

				<div class="col-12 text-center py-3" data-aos="fade-in"><h2>Children Menu</h2></div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/7.jpg">
								<img class="card-img-top" src="img/gallery/7.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-down" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/8.jpg">
								<img class="card-img-top" src="img/gallery/8.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/9.jpg">
								<img class="card-img-top" src="img/gallery/9.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>					
				
				<div class="col-12 text-center py-3" data-aos="fade-in"><h2>Gluten Free Menu</h2></div>
				
					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/10.jpg">
								<img class="card-img-top" src="img/gallery/10.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center my-3" data-aos="fade-down" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/11.jpg">
								<img class="card-img-top" src="img/gallery/11.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 text-center mt-3 mb-5" data-aos="fade-right" data-aos-delay="100">
						<div class="card alzar">
						<div class="cubrir">
							<a href="img/gallery/12.jpg">
								<img class="card-img-top" src="img/gallery/12.jpg" alt="...">
							</a>
						</div>
						</div>
					</div>	
				</div>	
				
				<div class="row">
					<div class="col-12 text-center" data-aos="fade-up" data-aos-delay="100">
      					<button type="button" href="contact.php" class="btn btn-success mx-3 mb-4 badge badge-pill py-3 px-4" data-toggle="modal" data-target="#booknow">Make A Reservation</button>

          				<a href="contact.php"><button type="button" class="btn btn-success mb-4 badge badge-pill py-3 px-4">Contact Us</button></a>
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
</main>

<?php 
  require_once("layouts/footer.inc.php");
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.9.0/baguetteBox.min.js" integrity="sha512-+8LoWbC6Y9Vy85wapJUYlRvabpzAIGhgiL6vZWNHn0F8EFJ43a1BCSzXo7b7OeY6bczJ3Q+ifRweZpW1iPAARg==" crossorigin="anonymous"></script>
<script>
  AOS.init({
  easing: 'ease-out-back',
  duration: 1000
  });

  baguetteBox.run('.galeria-baguette', {
    animation: 'fadeIn',
});
</script>
</body>
</html>