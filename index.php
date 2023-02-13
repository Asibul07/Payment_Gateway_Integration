<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- FontAwesome  -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <!-- font awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom css link  -->
  <link rel="stylesheet" href="/css/style.css">
  <title>Payment Gateway</title>
</head>

<body>
  <!-- NAVBAR -->
  <header class="header">
    <section class="flex">
      <a class="navbar-brand" href="#index">
        <h3>AsiBuL07</h3>
        <nav class="navbar">
          <a class="nav-link" href="#home">Home</a>
          <a class="nav-link" href="#project">Project</a>
          <a class="nav-link" href="#about">About</a>
          <a class="nav-link" href="#contact">Contact</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
  </header>
  <!-- END NAVBAR -->

  <!-- home section start  -->
  <div class="home-bg">
    <section class="home" id="home">
      <div class="content">
        <h3>your donation is others inspiration</h3>
        <p>It's easier to take than to give. It's nobler to give than to take. The thrill of taking lasts a day.
          The thrill of giving lasts a lifetime.</p>

        <!-- button donate -->
        <div class="btn">
          <button type="button" class="button-27" data-toggle="modal" data-target="#exampleModal" role="button"> Donate
          </button>
        </div>
    </section>
  </div>
  <!-- home section end  -->

  <!-- project section start  -->
  <div class="project-bg">
    <section id="project" class="project">
      <h1>Waiting for help</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nihil non, possimus perspiciatis architecto
        voluptas?</p>
      <div class="img">
        <div>
          <img src="/img/project 1.jpg" alt="">
          <img src="/img/project 2.jpeg" alt="">
        </div>
        <div>
          <img src="/img/project3.jpg" alt="">
          <img src="/img/project4.jpg" alt="">
        </div>
        <div>
          <img src="/img/project5.png" alt="">
          <img src="img/project6.jpg" alt="">
        </div>
    </section>

  </div>
  <!-- project section end  -->

  <!-- about section start  -->
  <div class="about-bg">
    <section class="about" id="about">
      <h1>About</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nobis, eligendi adipisci ab porro esse.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa rerum ipsam ullam laborum expedita quod eaque,
        omnis praesentium sed sunt!</p>

    </section>
  </div>
  <!-- about section end  -->

  <!-- volunteer section start  -->
  <div class="volunteer-bg">
    <section class="volunteer" id="volunteer">
      <h1>our volunteers</h1>
      <div>
        <img src="/img/volunteer 1 (2).jpg" alt=""><img src="/img/volunteer 2.jpg" alt=""><img
          src="/img/volunteer 3.jpg" alt="">
      </div>
    </section>
  </div>
  <!-- volunteer section end  -->

  <!-- Contact section start -->
  <div class="contact-bg">
    <section class="contact" id="contact">
      <div class="content">
        <h3>Divided evenly</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quisquam odit! Odio fugit debitis quam?</p>
        <h3>transparancy all the day</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam accusamus culpa aspernatur consequuntur
          fugiat. Officia!</p>
        <h3>trustworthy</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquid sed, nam quidem nobis cum?</p>
      </div>
      <div class="form">
        <form action="/store-contact-us.php" method="post">
          <h1>Contact</h1>
          <label for="name"> </label><br>
          <input type="text" name="name" placeholder="Full name" id="name" required><br>

          <label for="phone"> </label><br>
          <input type="number" class="phone" placeholder="phone number" name="phone" id="name" required><br>

          <label for="email"> </label><br>
          <input type="email" class="email" placeholder="email address" name="email" id="email" required><br>

          <label for="msg"></label><br>
          <textarea name="message" id="msg" placeholder="message" cols="30" rows="4" required></textarea><br>
          <!-- button contact-->
          <div class="btn">
            <button type="submit" class="button-27" name="contact_us" role="button"> send </button>

        </form>
      </div>

    </section>
  </div>
  <!-- Contact section end-->
  <!-- copyright section -->
  <footer>
    <p>copyright 2023 all rights reserved! this website made by <a href="https://www.linkedin.com/in/asibul07/">asibul
        hasan</a></p>
  </footer>
  <!-- copyright section end  -->

  <!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title " id="exampleModalLabel" style="color: whitesmoke;">You are Just One Step Away !!</h1>
          <!-- button payment-->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center" class="model">
          <form data-dismiss="modal">
            <!-- razorpay link section (data-payment_button_id need to change)-->
            <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_LFyHDCQpEo3Qlu"
              data-button_text="Click to DONATE"></script>
          </form>

        </div>

      </div>
    </div>
  </div>
  <!-- end modal -->


  <!-- Optional JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
  <script>
    lightbox.option({
      resizeDuration: 700,
      wrapAround: true,
      positionFromTop: 100,
    });
  </script>

  <!--Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <!-- navbar responsive js code  -->
  <script src="/script/script.js">
  </script>
</body>

</html>