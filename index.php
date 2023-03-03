<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,user-scalable=no"
    />
    <title>Dotcode - Edification</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./includes/navbar.css" />
    <link rel="stylesheet" href="./includes/icons/css/all.css" />
    <link rel="stylesheet" href="./includes/styl.css" />
    <!-- <link rel="stylesheet" href="./includes/style.css"> -->
    <!-- gjhgkhkjgkjhkh -->
  </head>

  <body>
    <?php include_once('./includes/header.php') ?>
    <div
      id="carouselExampleIndicators"
      style="top: 70px"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            height="50%"
            src="./includes/img/1.jpg"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            height="50%"
            src="./includes/img/2.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            height="50%"
            src="./includes/img/3.jpg"
            alt="Third slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div id="About"></div>

    <!-- MAIN CODE -->
    <!-- MAIN CODE -->

    <h1>About Us</h1>
    <div class="row about-start">
      <div class="col-4 about-img">
        <img class="img-width" src="./includes/img/a (7).jpg" alt="about-us" />
      </div>
      <div class="col-8 ab-font">
        It gives me an immense pleasure to introduce
        <mark>Dot Code Edification</mark>, to all the aspiring students. Since
        the inception of this great institute, we have an aim to provide quality
        education and develop competent students who are socially sensitive and
        committed to excellence to global arena.<br /><br />
        This institute believes in a well rounded and pervasive student
        experiment to maximize learning opportunities. To achieve this, the
        institute provides the course structure that has been designed to enable
        the students to hone their managerial skills and get them acquainted
        with the new development taking place in the industry.<br /><br />
        Our UG and PG programs are desgined to install knowledge,
        leadership,innovative spirit, team work and global perspective into the
        students. This kind of exposure provide here not just to train students
        for Educational superiority but also make them ready to face global
        challenges.
      </div>
    </div>
    <div class="row" style="flex-direction: row">
      <div class="container col-11">
        <div class="card">
          <h1 style="text-align: center; margin: 20px 0">What Should We Do?</h1>
          <p class="contact-msg" style="text-align: center">
            Try new thing and widen your horizons.Try something you've always
            wanted to but never got around to ,something that scares you,
            something that is very different from what you normally do.
          </p>
          <button class="contact-btn">
            <a href="contact.html">Contact US</a>
          </button>
        </div>
      </div>
    </div>
    <section>
      <div id="Courses"></div>
      <h2>Courses</h2>
      <div class="course-card">
        <div class="col-12 card-body">
          <img src="./includes/img/a (18).jpg" alt="" />
          <ul>
            <li class="heading">Programming</li>
            <li>C++</li>
            <li>C</li>
            <li>Java</li>
            <li>Python</li>
          </ul>
        </div>
        <div class="col-12 card-body">
          <img src="./includes/img/a (17).jpg" alt="" />
          <ul>
            <li class="heading">Professional</li>
            <li>BCA</li>
            <li>MCA</li>
            <li>PGDCA</li>
            <li>DCA</li>
          </ul>
        </div>
        <div class="col-12 card-body">
          <img src="./includes/img/a (14).jpg" alt="" />
          <ul>
            <li class="heading">Training</li>
            <li>Web Tech</li>
            <li>Lang</li>
            <li>Android Java</li>
          </ul>
        </div>
      </div>
      <div class="course-card">
        <div class="col-12 card-body">
          <img src="./includes/img/a (3).jpg" alt="" />
          <ul>
            <li>Academics</li>
            <li>11th CS</li>
            <li>12th CS</li>
          </ul>
        </div>
        <div class="col-12 card-body">
          <img src="./includes/img/a (19).jpg" alt="" />
          <ul>
            <li>Basic</li>
            <li>MS Office</li>
            <li>Typing</li>
          </ul>
        </div>
        <div class="col-12 card-body">
          <img src="./includes/img/a (2).jpg" alt="" />
          <ul>
            <li>Others</li>
            <li>DS,DE</li>
            <li>OS</li>
            <li>Networking</li>
            <li>Hardware</li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <div id="Testimonial"></div>
      <h2>Testimonial</h2>
      <div class="testimonial-card">
        <div class="t-card-body">
          <img src="./includes/img/img (1).jpg" alt="" />
          <ul>
            <li class="heading">Prince Mahawar</li>
            <p class="heading-para">
              Dot code Edification emphsizes hands-on learning ,which helps
              students gain practical experience and develop their skills in web
              development. The institute provide real world projects and
              assignments to students.
            </p>
          </ul>
        </div>
        <div class="t-card-body">
          <img src="./includes/img/img (3).jpg" alt="" />
          <ul>
            <li class="heading">Khushi Mewara</li>
            <p class="heading-para">
              My experience with Dot Code Edification was quite well and I have
              learned a lot...They provide individual attention to each and
              every students I suggest you if you want to learn coding so please
              join Dot Code Edification to achieve your goals.
            </p>
          </ul>
        </div>
        <div class="t-card-body">
          <img src="./includes/img/img2.jpeg" alt="" />
          <ul>
            <li class="heading">Sakshi Gupta</li>
            <p class="heading-para">
              Dot code Edification provides you modern learning technique which
              is more effective. Here teachers influence you to do smart work
              for building your skills, confidence and to achieve your goals
            </p>
          </ul>
        </div>
      </div>
    </section>
    <!-- <a name="Events"><section></a>
         <div class="o"></div>
         <div class="p"></div>
         <div class="q"></div>
         <div class="r">
             <div class="r1"><u>Events</u></div>
             <div class="r2">
                 We offer customised educational tours as a supplement to the academic.
                 Our program not only teach students about the importance of preserving 
                 and learning  from the environment.
                 The activities will bring about excitement and thrill and at the same time 
                 inculcate a wave of rejuvenation.
             </div>
         </div>
        </section> -->
    <!-- <a name="Review">
    <section>
  </a>
  <div class="r3"></div>
  <div class="r4">Student's Review</div>
  <div class="r5">
    <div class="s1"></div>
    <div class="s2">
      <font size="5">Prince Mahawar</font><br>
      Dot code Edification emphsizes hands-on learning ,which helps students
      gain practical experience and develop their skills in web development.
      The institute provide real world projects and assignments to students,
      which help them to apply the concepts they learn in the class-room to
      real-world scenarios.
    </div>
  </div>
  <div class="r6">
    <div class="s3"></div>
    <div class="s4">
      <font size="5">Khushi Mewara</font><br>
      My experience with Dot Code Edification was quite well and I have
      learned a lot...They provide individual attention to each and every students
      I suggest you if you want to learn coding so please join Dot Code Edification
      to achieve your goals.
    </div>
  </div>
  <div class="r7">
    <div class="s5"></div>
    <div class="s6">
      <font size="5">Sakshi Gupta</font><br>
      Dot code Edification provides you modern learning technique which is more
      effective. Here teachers influence you to do smart work for building your skills,
      confidence and to achieve your goals
    </div>
  </div>

  </section> -->

    <!-- FOOTER -->
    <footer class="footer-sec">
      <div class="main">
        <div class="logo row1">
          <div class="footer-header">
            <img src="./includes/img/logo.jpg" class="footer-logo" alt="" />
          </div>
          <div class="logo-des">
            <p>
              It gives me an immense pleasure to introduce Dot Code Edification,
              to all the aspiring students. Since the inception of this great
              institute,
            </p>

            <a href="#" class="btn-know">Know More</a>
          </div>
        </div>

        <div class="office row1">
          <div class="footer-header">
            <h3>Office</h3>
          </div>
          <div class="office-des">
            <p>
              here are <br />
              many variations of passages<br />of Lorem Ipsum<br />available
            </p>

            <a style="text-decoration: none" href="#0">sirjihemant@gmail.com</a>

            <p class="num">+91-7737487682</p>
          </div>
        </div>

        <div class="link row1">
          <div class="footer-header">
            <h3>Links</h3>
          </div>

          <div class="link-des">
            <a href="#" class="footer-links">Home</a>
            <a href="#About" class="footer-links">About</a>
            <a href="#Courses" class="footer-links">Courses</a>
            <a href="#Galary" class="footer-links">Galary</a>
            <a href="contact.html" class="footer-links">Contact</a>
          </div>
        </div>

        <div class="map row1">
          <div class="footer-header">
            <h3>Location</h3>
          </div>
          <div class="map-des">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.8465689704153!2d75.83384961408598!3d25.140877583922432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f85843f49b341%3A0xe77f07989fce2778!2sDot%20Code%20Edification!5e0!3m2!1sen!2sin!4v1677703351778!5m2!1sen!2sin"
              width="300"
              height="200"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
      <div class="copyright">
        <hr />

        <p>© Copyright 2023 DOTCODE</p>
      </div>
    </footer>
    <!-- FOOTER -->

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
