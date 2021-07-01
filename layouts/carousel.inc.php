  <section id="parallax3" class="p-5">
    <style>
      #parallax3{
        position: relative;
        background: url(img/parallax3.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
      }

      #parallax3::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.5);
        z-index: 1;
      }

      .message{
        position: relative;
        z-index: 100;
      }
    </style>
    <div class="message">
      <h2 class="text-center">Come on and enjoy our food now</h2>
    </div>
  </section>

    <section id="carousel-section">
      <style>

        #carousel-section .item{
          box-shadow: 6px 6px 10px grey, -6px -6px 10px grey;
        }

      </style>
      <div class="p-4">
        <div class="owl-carousel">

          <div class="item m-3">
            <img src="img/carousel/food01.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel/food02.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel/food03.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel/food04.jpg" alt="...">
          </div>

          <div class="item m-3">
            <img src="img/carousel/food05.jpg" alt="...">
          </div>
        </div>

      </div>
    </section>