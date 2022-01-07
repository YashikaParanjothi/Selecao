<?php 
$page = "events";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
<?php
    $query1 = "SELECT * FROM events";
    $query_run1 = mysqli_query($connection, $query1);
    $query2 = "SELECT * FROM eventdetails";
    $query_run2 = mysqli_query($connection, $query2);
    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
    {
        foreach($query_run1 as $row)
        {
            ?>
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2><?php echo $row['sidetitle']; ?></h2>
        <p><?php echo $row['maintitle']; ?></p>
      </div>
      <?php
        }
      ?>
      <div class="row portfolio-container">
      <?php
      for ($x = 1; $x <= 9; $x++) {
          $query2 = "SELECT * FROM eventdetails WHERE id=$x";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
        {
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="<?php echo $row['image']; ?>" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4><?php echo $row['title']; ?></h4>
            <p><?php echo $row['subtitle']; ?></p>
            <a href="<?php echo $row['image']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $row['title']; ?>"><i class="bx bx-plus"></i></a>
            <a href="../portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <?php
        }
      }
        ?>
      </div>

    </div>
  </section><!-- End Portfolio Section -->
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