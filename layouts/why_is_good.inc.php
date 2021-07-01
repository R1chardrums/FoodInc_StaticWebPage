  <section id="parallax2" class="p-5">
    <style>
      #parallax2{
        position: relative;
        background: url(img/parallax2.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }

      #parallax2::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.5);
        z-index: 1;
      }

      .why-title{
        position: relative;
        z-index: 100;
      }
    </style>
    <div class="why-title">
      <h2 class="text-center">Why Our Food Is So Good?</h2>
    </div>
  </section>

  <section id="why-section">
    <style>
      #why-section{
        background: rgb(222,222,222);
      }

      #why-section .card{
        background: transparent;
        border:0;
      }

      #why-section h5{
        color: green;
      }

      #why-section i{
        color: red;
      }
    </style>
    <div class="p-4">
      <div class="row py-5">
        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-duration="1500">
          <div class="card">
            <i class="fas fa-crown fa-3x"></i>
            <div class="card-body">
              <h5 class="card-title py-3">Professional Chef</h5>
              <p class="card-text">We have an excellent team of professional chefs who are passionate about food, and will offer you an innovative culinary experience.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 text-center" data-aos="fade-down" data-aos-duration="1500">
          <div class="card">
            <i class="fas fa-hand-sparkles fa-3x"></i>
            <div class="card-body">
              <h5 class="card-title py-3">Sanitary Quality</h5>
              <p class="card-text">We have been certified as one of the Restaurants with the best sanitary measures, so each dish we serve has fresh and well-preserved ingredients.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-duration="1500">
          <div class="card">
            <i class="fas fa-drumstick-bite fa-3x"></i>
            <div class="card-body">
              <h5 class="card-title py-3">Special dishes</h5>
              <p class="card-text">We adapt to your requirements, not only we serve first class meat, we can also offer you vegan dishes, gluten-free food, and a special menu for children.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 text-center" data-aos="fade-down" data-aos-duration="1500">
          <div class="card">
            <i class="fas fa-utensils fa-3x"></i>
            <div class="card-body">
              <h5 class="card-title py-3">Innovative recipes</h5>
              <p class="card-text">We are not afraid of being different, we prefer to opt for culinary innovation, offering you original dishes that will leave an explosion of flavor on your palate.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>