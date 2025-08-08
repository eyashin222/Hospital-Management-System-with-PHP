<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Title -->
    <title>HMS</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index_u.php"><img src="img/logo.png" alt="#"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li><a href="index_u.php">Home</a></li>
                                        <li><a href="doctors_u.php">Doctors</a></li>
                                        <li><a href="services_u.php">Services</a></li>
                                        <li><a href="portfolio-details.php">Project</a></li>
                                        <li><a href="blog-single.php">Blogs</a></li>
                                        <li><a href="contact_u.php">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="appoinment_u.php" class="btn">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>We Are Always Ready to Help You.</h2>
                        <h2>Book An Appointment</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <?php
    include('../includes/connection.php');
    
      $fetch_query = mysqli_query($connection, "select max(id) as id from tbl_appointment");
      $row = mysqli_fetch_row($fetch_query);
      if($row[0]==0)
      {
        $apt_id = 1;
      }
      else
      {
        $apt_id = $row[0] + 1;
      }
    if(isset($_REQUEST['add-appointment']))
    {
      
      $appointment_id = 'APT-'.$apt_id;
      $first_name = $_REQUEST['first_name'];
      $last_name = $_REQUEST['last_name'];
      $department = $_REQUEST['department'];
      $doctor = $_REQUEST['doctor'];
      $mobile = $_REQUEST['mobile'];
      $e_mail = $_REQUEST['e_mail'];
      $date = $_REQUEST['date'];
      $time = $_REQUEST['time'];
      $message = $_REQUEST['message'];
    //   $status = $_REQUEST['status'];

      
      $insert_query = mysqli_query($connection, "insert into tbl_appointment set appointment_id='$appointment_id', first_name='$first_name', last_name='$last_name', department='$department', e_mail='$e_mail', mobile='$mobile', doctor='$doctor', date='$date',  time='$time', message='$message'");

      if($insert_query>0)
      {
          $msg = "Appointment sent successfully.Please waite, We will be confirm by an Text Message.";
      }
      else
      {
          $msg = "Error!";
      }
    }
    ?>

    <section class="appointment">
        <div class="container" style="text-transform: none;">
            <div class="row">
                <div class="appoinment_form col-lg-6 col-md-12 col-12">
                    <form class="form" action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Appointment ID <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="appointment_id"
                                        value="<?php if(!empty($apt_id)) { echo 'APT-'.$apt_id; } else { echo "APT-1"; } ?>"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="first_name" placeholder="First name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="last_name" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="select" name="department" required>
                                            <option value="">Department</option>
                                            <?php
                                        $fetch_query = mysqli_query($connection, "select department_name from tbl_department");
                                        while($row = mysqli_fetch_array($fetch_query)){
                                        ?>
                                            <option><?php echo $row['department_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="select" name="doctor" required>
                                            <option value="">Doctor</option>
                                            <?php
                                        $fetch_query = mysqli_query($connection, "select concat(first_name,' ',last_name) as name from tbl_employee where role=2 and status=1");
                                        while($row = mysqli_fetch_array($fetch_query)){
                                        ?>
                                            <option><?php echo $row['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="e_mail" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="mobile" placeholder="Mobile number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="cal-icon">
                                            <input type="text" class="form-control" id="datepicker" name="date" placeholder="Appoinment Date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker3" name="time" placeholder="Appoinment Time" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
                        </div>
                        <div class="row">
                                <div class="col-lg-5 col-md-4 col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button name="add-appointment" class="btn btn-primary submit-btn">Book An Appointment</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8 col-12">
                                    <p>( We will be confirm by an Text Message )</p>
                                </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 " style="margin-top: 260px;">
                    <div class="appointment-image">
                        <img src="img/contact-img.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Area -->
    <footer id="footer" class="footer ">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut
                                labore dolore magna.</p>
                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="index_u.php"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Home</a></li>
                                        <li><a href="doctors_u.php"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Doctors</a></li>
                                        <li><a href="services_u.php"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Our Services</a></li>
                                        <li><a href="contact_u.php"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Contact Us</a></li>
                                        <li><a href="appoinment_u.php"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Appoinment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Open Hours</h2>
                            <ul class="time-sidual">
                                <li class="day">Monday to Friday --- 8.00-20.00</li>
                                <li class="day">Saturday ----------- 9.00-18.30</li>
                                <li class="day">Monday to Thusday - 9.00-15.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Blogs</h2>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="blog-single.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Blogs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>© Copyright 2023 | All Rights Reserved by HMS company</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    </body>

</html>
<?php
    include('../footer.php');
?>
<script type="text/javascript">
<?php
        if(isset($msg)) {
            echo 'swal("' . $msg . '");';
        }
    ?>
</script>
