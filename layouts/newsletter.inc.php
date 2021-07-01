  <section id="parallax6" class="p-5">
    <style>
      #parallax6{
        position: relative;
        background: url(img/parallax6.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }

      #parallax6::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.5);
        z-index: 1;
      }

      .newsletter-title{
        position: relative;
        z-index: 100;
      }
    </style>
    <div class="newsletter-title">
      <h2 class="text-center">Newsletter</h2>
    </div>
  </section>

  <section id="newsletter-section">
    <style>
      #newsletter-section{
        background: rgb(222,222,222);        
      }

      #newsletter-section button{
        transition: 0.4s;
      }

      #newsletter-section button:hover{
        background: red;
      }

      #newsletter-section img{
        width: 100%;   
        box-shadow: 6px 6px 10px grey, -6px -6px 10px grey;     
      }

      #form2{
        background: rgb(205,30,30);
      }

    #form2 .btn{
      transition: 0.3s;
      background: green!important;
      color: white;
    }

    #form2 .btn:hover{
      color: black;
    }
    </style>
    <div class="p-4">
      <div class="row text-center py-5">

        <div class="col-md-6">
          <img src="img/newsletter.jpg" alt="chef-image">
        </div>

        <div class="col-md-6">
          <h3 class="py-3">Do you accept the challenge of eating a 2kg Burger in 45 minutes?</h3>
          <p>The 2Kg Burger will be totally free if you manage to complete the challenge, besides, your photo will go directly to our “Wall of Champions” and we will give you a certificate of participation with your name on it so, what are you waiting for?</p>

            <form id="form2" class="p-3">
              <h4 class="pb-3">Give us your email address</h2>
              <div class="form-row">
                <div class="form-group col-12">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <button type="submit" class="btn badge badge-pill py-3 px-4">Join</button>
            </form>
        </div>

        <div class="col-12 text-center mt-5">
          <button type="button" href="contact.php" class="btn btn-success badge badge-pill py-3 px-4">Contact Us</button>
        </div>
    </div>
  </section>