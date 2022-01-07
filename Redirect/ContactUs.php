<?php 
$page = "contactus";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
<?php
    $query1 = "SELECT * FROM contactus";
    $query_run1 = mysqli_query($connection, $query1);
    $query2 = "SELECT * FROM districtheads";
    $query_run2 = mysqli_query($connection, $query2);
    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
    {
        foreach($query_run1 as $row)
        {
            ?>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2><?php echo $row['sidetitle']; ?></h2>
        <p><?php echo $row['subtitle']; ?></p>
      </div>
      <h1><?php echo $row['maintitle']; ?></h1>
      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><?php echo $row['location']; ?></p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><?php echo $row['email']; ?></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p><?php echo $row['phone']; ?></p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="../forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone No." required>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- Dynamic Headers -->
  <div class="section-title pb-0">
    <p class="text-start ps-5"><small><?php echo $row['districttitle']; ?></small></p>
  </div>
  <?php
        }
  ?>
  <div class="dynamic_header">
    <div class="row">
    <?php
          for ($x = 1; $x <= 24; $x++) {
          $query2 = "SELECT * FROM districtheads WHERE id='$x'";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
        {
    ?>
    <div class="col-lg-2 col-md-6 individual_header">
       <div><img class="dynamic_header_img" src="../assets/img/person.png" alt=""></div>
        <div class="headers_name mb-0"><h3><?php echo $row['name']; ?></h3></div>
        <div class="headers_state pb-5"><?php echo $row['district']; ?></div> 
      </div>
    <?php
        }
      }
    ?>
  </div>
<table class="district-head">
<?php
          $query1 = "SELECT * FROM contactus";
          $query_run1 = mysqli_query($connection, $query1);
          foreach($query_run1 as $row)
        {
?>
  <tr>
    <th>#</th>
    <th><?php echo $row['title1']; ?></th>
    <th><?php echo $row['title2']; ?></th>
    <th><?php echo $row['title3']; ?></th>
  </tr>
  <?php
        }
          for ($x = 1; $x <= 10; $x++) {
          $query3 = "SELECT * FROM contacttable WHERE id='$x'";
          $query_run3 = mysqli_query($connection, $query3);
          foreach($query_run3 as $row)
        {
    ?>
  <tr>
    <td><?php echo "$x"; ?></td>
    <td><a href="#"><?php echo $row['crd']; ?></a></td>
    <td><a href="#"><?php echo $row['nrd']; ?></a></td>
    <td><a href="#"><?php echo $row['srd']; ?></a></td>
  </tr>
  <?php
    }
  }
  ?>
</table>
<?php
    }
    else
    {
        echo "No Record Found!";
    }
  ?>

<?php 
include('../includes/footer.php');
include('../includes/scripts.php');
?>