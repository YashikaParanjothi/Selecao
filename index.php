<?php
    $page = "home";
    include('admin/security.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selecao</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">


</head>

<body>
  <!-- Navbar -->
  <section class="fixed-top" id="title">
    <div class="container-fluid">
      <!-- Brand Name -->
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Selecao</a>
        <!-- Hamburger Icon -->
        <div class="dropdown pointer">
          <span><hr /><hr /><hr /></span>
          <div class="dropdown-content">
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="Redirect/Aboutus.php">About Us</a>
            <a class="nav-link" href="Redirect/Events.php">Events</a>
            <a class="nav-link" href="Redirect/Audit.php">Audit</a>
            <a class="nav-link" href="Redirect/Forum.php">Forum</a>
            <a class="nav-link" href="Redirect/Membership.php">Membership</a>
            <a class="nav-link" href="Redirect/RecognizedPreschools.php">Recognized Preschools</a>
            <a class="nav-link" href="Redirect/Members.php">Members</a>
            <a class="nav-link" href="Redirect/ContactUs.php">Contact Us</a>
          </div>
        </div>
        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse fixtop" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/Aboutus.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/Events.php">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/Audit.php">Audit</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/Forum.php">Forum</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/Membership.php">Membership</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/RecognizedPreschools.php">Recognized Preschools</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/Members.php">Members</a></li>
            <li class="nav-item"><a class="nav-link" href="Redirect/ContactUs.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section><!-- End of Navbar -->

  <?php
    $query = "SELECT * FROM home";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            ?>
  <!-- Home -->
  <section id="home" class="page-section">
    <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo $row['slide1img']; ?>" class="d-block w-100" alt="slide1-image">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $row['slide2img']; ?>" class="d-block w-100" alt="slide2-image">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $row['slide3img']; ?>" class="d-block w-100" alt="slide3-image">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $row['slide4img']; ?>" class="d-block w-100" alt="slide4-image">
        </div>
        <div class="carousel-item">
          <img src="<?php echo $row['slide5img']; ?>" class="d-block w-100" alt="slide5-image">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section> <!-- End of Home -->
  <?php
        }
    }
    else
    {
        echo "No Record Found!";
    }
?>

  <!-- ======= Footer ======= -->
  <?php include('includes/footer.php');?>
  <!--JavaScript Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/aos.css" rel="stylesheet">
  <script src="assets/js/main.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/index.js" charset="utf-8"></script>

</body>

</html>
