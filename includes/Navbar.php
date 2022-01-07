<!-- Navbar -->
<section class="fixed-top" id="title">
    <div class="container-fluid">
      <!-- Brand Name -->
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="../index.php">Selecao</a>
        <!-- Hamburger Icon -->
        <div class="dropdown pointer">
          <span><hr /><hr /><hr /></span>
          <div class="dropdown-content">
            <a class="nav-link" href="../index.php">Home</a>
            <a class="nav-link" href="Aboutus.php">About Us</a>
            <a class="nav-link" href="Events.php">Events</a>
            <a class="nav-link" href="Audit.php">Audit</a>
            <a class="nav-link" href="Forum.php">Forum</a>
            <a class="nav-link" href="Membership.php">Membership</a>
            <a class="nav-link" href="RecognizedPreschools.php">Recognized Preschools</a>
            <a class="nav-link" href="Members.php">Members</a>
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
          </div>
        </div>
        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse fixtop" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
            <li class="nav-item <?php if($page == 'aboutus'){echo 'active';} ?>"><a class="nav-link" href="Aboutus.php">About Us</a></li>
            <li class="nav-item <?php if($page == 'events'){echo 'active';} ?>"><a class="nav-link" href="Events.php">Events</a></li>
            <li class="nav-item <?php if($page == 'audit'){echo 'active';} ?>"><a class="nav-link" href="Audit.php">Audit</a></li>
            <li class="nav-item <?php if($page == 'forum'){echo 'active';} ?>"><a class="nav-link" href="Forum.php">Forum</a></li>
            <li class="nav-item <?php if($page == 'membership'){echo 'active';} ?>"><a class="nav-link" href="Membership.php">Membership</a></li>
            <li class="nav-item <?php if($page == 'recognized-preschools'){echo 'active';} ?>"><a class="nav-link" href="RecognizedPreschools.php">Recognized Preschools</a></li>
            <li class="nav-item <?php if($page == 'members'){echo 'active';} ?>"><a class="nav-link" href="Members.php">Members</a></li>
            <li class="nav-item <?php if($page == 'contactus'){echo 'active';} ?>"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section><!-- End of Navbar -->
