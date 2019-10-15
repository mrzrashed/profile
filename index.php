<?php require_once('config.php');
if (!empty($_POST)) {
    $CName=test_input($_POST['name']);
    $sub=test_input($_POST['subject']);
    $email=test_input($_POST['email']);
    $msg=test_input($_POST['message']);
    // $msg = $email."\n".$name."\n".$sub."\n".$msg;
    // echo $name.$sub.$email.$msg;
    // $msg = wordwrap($msg,70);
    $sql = "INSERT INTO `contact_message`(`name`, `subject`, `email`,`msg`) VALUES ('$CName','$sub','$email','$msg')";
    if(!empty($CName)){
      if(!empty($sub)){
        if (!empty($msg)) {
          if(mysqli_query($con,$sql)){
              echo "success";
          }
          else {
            echo "Failed";
          }
        }
        else {
          echo "Message Required";
        }
      }
      else {
        echo "Subject Required";
      }
    }
    else {
      echo "Name Required";
    }




    // mail("mrzrashed01@gmail.com","mrzrashed.info Test Mail",$msg);
    }
    else {
      echo "<script> alart('Required')</script>";
    }


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 ?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Title -->
    <title>Welcome to -MrzRashed</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Lity css -->
    <link rel="stylesheet" href="css/lity.min.css">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="css/main.css">
    <!-- Site Version Style Css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Site Responsive File -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- [ 00 ] Start Preloader -->
   <div class="preloader"></div>
    <!-- End Preloader -->

    <!-- [ 01 ] Start Header Section -->
    <header>

        <!-- Start Navbar -->
        <nav class="navbar-brog navbar-fixed-top navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-brog-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Start Logo -->
                    <a class="navbar-brand" href="index.php">RASHED</a>
                    <!-- End Logo -->
                </div>
                <div class="collapse navbar-collapse" id="navbar-brog-collapse">
                    <!-- Start Menu -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll="#about" class="active" href="#">about</a></li>
                        <li><a data-scroll="#services" href="#">services</a></li>
                        <li><a data-scroll="#resume" href="#">Resume</a></li>
                        <!-- <li><a data-scroll="#portfolio" href="#">Portfolio</a></li> -->
                        <li><a data-scroll="#contact" href="#">contact</a></li>
                    </ul>
                    <!-- End Menu -->
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Start Header Content -->
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><span>Hello</span> My name is Rashed<br>And i'am <span class="type"></span></h1>

                        <p>I am doing bachelor in Software Engineering<br>  at Daffodil International University. I want to <br>grab all the opportunities, where <a href="aboutme.html" target="_blank">READ More</a></p>
                        <a href="http://bit.ly/mrzrashedCV" class="btn"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Content -->

        <!-- Wave -->
        <svg class="slantCandy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none" style="fill:#96c577;padding:0;margin-bottom:-3px;display:block">
            <path d="M100 0 L-2 100 L101 100 Z"></path>
        </svg>
        <!-- End Wave -->
    </header>
    <!-- End Header Section -->

    <!-- [ 02 ] Start About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
                <h3>who iam</h3>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="avatar-image">
                        <img src="img/man.png" alt="personal.png" draggable="false">
                    </div>
                </div>
                <?php
                $query = "SELECT * FROM `user`";
                $reQuery = mysqli_query($con,$query);
                $value = mysqli_fetch_array($reQuery);

                 ?>
                <div class="col-lg-7">
                    <div class="information">
                        <h3>HELLO, I'M <?php echo $value['name'];?> </h3>
                        <h2>I'm In The Web development Industry With 5 Months Of Experience.</h2>
                        <p></p>
                        <hr>
                        <?php
                        $query = "SELECT * FROM `user`";
                        $reQuery = mysqli_query($con,$query);
                        $value = mysqli_fetch_array($reQuery);

                         ?>
                        <div class="info">
                            <ul>
                                <li><span><b>Name :</b><?php echo $value['name'];?></span></li>
                                <li><span><b>Address :</b>Mohammodpur, Dhaka</span></li>
                            </ul>
                            <ul>
                                <li><span><b>Phone :</b> <?php echo $value['phone'];?></span></li>
                                <li><span><b>Age :</b> 22</span></li>
                            </ul>
                        </div>
                        <?php
                        $query = "SELECT * FROM `social`";
                        $reQuery = mysqli_query($con,$query);
                        $value = mysqli_fetch_array($reQuery);

                        ?>
                        <div class="social-links">
                            <a href="<?php echo $value['facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $value['instragram'];?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $value['twitter'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $value['github'];?>"><i class="fa fa-github"></i></a>
                            <a href="<?php echo $value['linkedin'];?>"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- [ 03 ] Start Skills Section -->
    <section class="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="part-text">
                        <h2>My Skills</h2>
                        <p></p>
                        <a href="http://bit.ly/mrzrashedCV" class="btn b"><span>Download Cv</span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-box">
                        <h4 class="skill-title">Html</h4>
                        <div class="progress-line">
                            <span data-percent="80" style="transition: width 4s ease 0s; width: 80%;"><span class="percent-tooltip">80%</span></span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Css</h4>
                        <div class="progress-line">
                            <span data-percent="40" style="transition: width 4s ease 0s; width: 90%;"><span class="percent-tooltip">90%</span></span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Bootstrap</h4>
                        <div class="progress-line">
                            <span data-percent="40" style="transition: width 4s ease 0s; width: 60%;"><span class="percent-tooltip">60%</span></span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Javascript</h4>
                        <div class="progress-line">
                            <span data-percent="65" style="transition: width 4s ease 0s; width: 65%;"><span class="percent-tooltip">65%</span></span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Php</h4>
                        <div class="progress-line">
                            <span data-percent="2" style="transition: width 4s ease 0s; width: 70%;"><span class="percent-tooltip">70%</span></span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Laravel</h4>
                        <div class="progress-line">
                            <span data-percent="40" style="transition: width 4s ease 0s; width: 65%;"><span class="percent-tooltip">65%</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skills Section -->

    <!-- [ 04 ] Start Services Section -->
    <section id="services">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
                <h3>What I can do</h3>
            </div>
            <div class="row">
                <!-- Start Services Boxs -->
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <img src="img/Web_Design.png" alt="service image" draggable="false"> <!-- Service Image -->
                        <a href="#">
                            <h3 class="text-bg">Web Design</h3>
                        </a>
                        <p>I can design any kind of PSD file to web language.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <img src="img/Responsive.png" alt="service image" draggable="false"> <!-- Service Image -->
                        <a href="#">
                            <h3 class="text-bg">Responsive Design</h3>
                        </a>
                        <p>I can do bootsrap responsive and css responsive.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <img src="img/Web_Development.png" alt="service image" draggable="false"> <!-- Service Image -->
                        <a href="#">
                            <h3 class="text-bg">Development</h3>
                        </a>
                        <p>I can do any website to dynamic website through PHP or Laravel Framework</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <img src="img/webapp.png" alt="service image" draggable="false"> <!-- Service Image -->
                        <a href="#">
                            <h3 class="text-bg">Web Application</h3>
                        </a>
                        <p>I can develop any kind of web application based on user requirements.</p>
                    </div>
                </div>

                <!-- End Services Boxs -->

            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- [ 05 ] Start Resume Section -->
    <section id="resume">
        <div class="container">
            <div class="section-title">
                <h2>Resume</h2>
                <h3>What I can do</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="education">
                        <h2>education</h2>
                        <div class='edu'>
                            <span class="time">2019</span>
                            <h3>BITM Training</h3>
                            <p>I am trained form BASIS Institute of Technology & Management in course of Web Develepment-PHP</p>
                        </div>
                        <div class='edu'>
                            <span class="time">2019</span>
                            <h3>DAFFODIL INTERNATIONAL UNIVERSITY</h3>
                            <p>I am doing my bachelor degree from Daffodil International University, it’s my final semester. I will graduate here last week of September 2019.</p>
                        </div>
                        <div class='edu'>
                            <span class="time">2012 - 2014</span>
                            <h3>CANT. PUBLIC SCHOOL & COLLEGE </h3>
                            <p>I have compled my Higher Secondary Certification from here. I have passed the exam with the higest grade.</p>
                        </div>
                        <div class='edu'>
                            <span class="time">2006 - 2012</span>
                            <h3>CANT. PUBLIC SCHOOL & COLLEGE</h3>
                            <p>I have compled my Secondary Secondary Certification from here. I have passed the exam with the higest grade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="experiense">
                        <h2>experiense</h2>
                        <div class='exp'>
                            <span class="time">2019</span>
                            <h3>Creative Shaper</h3>
                            <p>I develeoped and leared from here as a intern student and develop a ecomarce site.</p>
                        </div>
                        <div class='exp'>
                            <span class="time">2017 - 2018</span>
                            <h3>RESEARCH VOLUNTEER,DIU</h3>
                            <p>The research work was research on ICT JOB MARKET BANGLADESH. For the volunteer work, I worked on BANGLADESH BANK and PARTEX GROUP LTD </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Resume Section -->

    <!-- [ 06 ] Start Hire Me Section -->
    <section class="hire-me">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Looking for a web developer ? I am here</h2>
                </div>
                <div class="col-md-6 text-center">
                    <a href="#" class="btn b"><span>Hire Me</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hire Me Section -->

    <!-- [ 07 ] Start Portfilio Section -->
    <!-- profile section need to >

    </address> -->
    <!-- End Portfolio Section -->

    <!-- [ 08 ] Start Testimonials Section -->
    <section id="testimonials" class="text-center">
        <div class="container">
            <div class="section-title">
                <h2>testimonials</h2>
                <h3>What Our Clients Say</h3>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="owl-carousel owl-carousel-carousel">
                        <div class="item">
                            <img src="img/testimonials/avator-1.png" class="img-responsive" alt="avatar-1.png">
                            <p>Comment On...</p>
                            <h3>Mrz Rashed</h3>
                            <h4>Front End Devoloper</h4>
                        </div>
                        <div class="item">
                            <img src="img/testimonials/avator-2.png" class="img-responsive" alt="avatar-2.png">
                            <p>Comment On....</p>
                            <h3>Sagor Banik</h3>
                            <h4>Photoshop Desinger</h4>
                        </div>
                        <div class="item">
                            <img src="img/testimonials/avator-3.png" class="img-responsive" alt="avatar-3.png">
                            <p>Comment On</p>
                            <h3>Jahidul Hasan</h3>
                            <h4>Full Stack Devoloper</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- [ 09 ] Start Contact Section -->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="in">
                        <img src="img/contact.jpg" alt="" draggable="false" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form class="email_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Subject" name="subject">
                        <input type="email" placeholder="someone@example.com" name="email">
                        <textarea placeholder="Message" name="message"></textarea>
                        <input type="submit" value="Send">
                    </form>

                    <h2>&nbsp;</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us Section -->

    <!-- [ 10 ] Start Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>&copy; 2019 Rashed</h3>
                </div>
                <div class="col-lg-4 text-center">
                    <h3></h3>
                </div>
                <div class="col-lg-4">
                    <div class="social-links">
                        <a href="https://www.facebook.com/mrzrashed01"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/mrzrashed"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/mrz_rashed"><i class="fa fa-twitter"></i></a>
                        <a href="https://github.com/mrzrashed"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/mrzrashed/"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- Jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- mixitup js -->
    <script src="js/jquery.mixitup.js"></script>
    <!-- lity js -->
    <script src="js/lity.min.js"></script>
    <!-- typed js -->
    <script src="js/typed.js"></script>
    <!-- Owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- theme script -->
    <script src="js/main.js"></script>
</body>

</html>
