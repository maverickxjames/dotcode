<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./includes/navbar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
  <link rel="stylesheet" href="./includes/styl.css">
  <link rel="stylesheet" href="./includes/icons/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    * {
      padding: 0px;
      margin: 0px;
      box-sizing: border-box;

    }

    body {
      min-height: 100vh;
    }


    h1 {
      margin-top: 20px;
      text-align: center;
      font-size: 50px;
    }

    .contact-form {
      /* position: absolute; */
      margin: auto;
      height: fit-content;
      width: 50%;
      margin-top: 80px;
      background-color: transparent;
      box-shadow: 0 0 10px black;
      border-radius: 7px;
    }

    /* form{
        height: fit-content;
        padding-bottom: 400px;
      }
    */
    p {
      font-size: small;
      margin-top: 10px;
    }

    .bottom-text {
      margin-bottom: -365px;
      margin-left: auto;
      margin-right: auto;
      margin-top: auto;
    }


    @media screen and (max-width: 1000px) {
      .contact-form {
        width: 90%;

      }

      .bottom-text {
        margin-bottom: -360px;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
      }
    }

    @media screen and (max-width: 945px) {
      .contact-form {
        width: 90%;

      }

      .bottom-text {
        margin-bottom: -120px;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
      }
    }

    @media screen and (max-width: 400px) {
      .contact-form {
        width: 90%;

      }

      .bottom-text {
        margin-bottom: -120px;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
      }
    }

    /* .image-logo img {
        height: 200px;
        width: 750px;
        margin-top: 10px;
        position: absolute;
      } */
  </style>
</head>

<body>
<?php include_once('./includes/header.php') ?>
  <div class="main1">
    <div class="img">
      <img src="./includes/img/bg.jpg" />
    </div>
    <div class="contact-form">
      <h1 style="margin-top: 40px;">Contact US</h1>
      <?php
      if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'err') {
          ?>
          <div class="row">
            <div class="col-11" style="margin:auto">
              <div class="alert alert-danger text-center">Something Went Wrong</div>
            </div>
          </div>
          <?php
        }
        if ($_GET['msg'] == 'done') {
          ?>
          <div class="row">
            <div class="col-11" style="margin:auto">
              <div class="alert alert-success text-center">Form Submitted</div>
            </div>
          </div>
          <?php
        }
      }
      ?>
      <!-- <div class="image-logo">
          <img src="./includes/img/logo.jpg" alt="logo" />
        </div> -->

      <form action="./includes/contact.php" method="post">
        <label class="col-11" style="margin: 10px 0 10px 3.5%;" for="name">Name :</label>
        <input style="margin:auto" class="col-11 form-control" type="text" name="name" placeholder="Enter Your Name"
          id="name" required />
        <label class="col-11" style="margin: 10px 0 10px 3.5%;" for="email">Email :</label>
        <input style="margin:auto" class="col-11 form-control" type="email" name="email" id="email"
          placeholder="Enter Email" required />
        <label class="col-11" style="margin: 10px 0 10px 3.5%;" for="message">Message :</label>
        <textarea style="margin:auto" class="col-11 form-control" name="message" id="message" rows="4" cols="30"
          placeholder="Text.." required></textarea>
        <button class="btn btn-success" style="margin:10px 0 10px 4.5%" name="submit" value="submit">Submit</button>
        <div>
          <div class="bottom-text col-11 alert alert-dark">
            <b>
              It's very important for us to keep in touch with you.<br />
              So we are always ready to answer any question.
            </b>
          </div>
        </div>
      </form>
    </div>
  </div>


  <!-- FOOTER -->
  <footer class="footer-sec">
    <div class="main">


      <div class="logo row1">
        <div class="footer-header">
          <img src="./includes/img/logo.jpg" class="footer-logo" alt="">
        </div>
        <div class="logo-des">
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour.</p>

          <a href="#" class="btn-know">Know More</a>
        </div>


      </div>



      <div class="office row1">
        <div class="footer-header">
          <h3>Office</h3>
        </div>
        <div class="office-des">
          <p>here are <br> many variations of passages<br>of Lorem Ipsum<br>available</p>

          <a style="text-decoration: none;" href="#0">dotcode@gmail.com</a>

          <p class="num">+91-9999999999</p>
        </div>
      </div>


      <div class="link row1">
        <div class="footer-header">
          <h3>Links</h3>
        </div>

        <div class="link-des">
          <a href="#" class="footer-links">Home</a>
          <a href="#" class="footer-links">About</a>
          <a href="#" class="footer-links">Courses</a>
          <a href="#" class="footer-links">Galary</a>
          <a href="#" class="footer-links">Contact</a>
        </div>

      </div>


      <div class="map row1">
        <div class="footer-header">
          <h3>Location</h3>
        </div>
        <div class="map-des">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.8465689704153!2d75.83384961408598!3d25.140877583922432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f85843f49b341%3A0xe77f07989fce2778!2sDot%20Code%20Edification!5e0!3m2!1sen!2sin!4v1677703351778!5m2!1sen!2sin"
            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>


    </div>
    <div class="copyright">
      <hr>

      <p>© Copyright 2023 DOTCODE</p>
    </div>
  </footer>
  <!-- FOOTER -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script>
    $('.toast').toast(autohide)
  </script>
</body>

</html>
