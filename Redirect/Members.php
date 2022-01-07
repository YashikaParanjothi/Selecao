<?php 
$page = "members";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
  <!-- ======= Team Section ======= -->
  <?php
    $query1 = "SELECT * FROM members";
    $query_run1 = mysqli_query($connection, $query1);
    $query2 = "SELECT * FROM membersdetail";
    $query_run2 = mysqli_query($connection, $query2);
    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
    {
        foreach($query_run1 as $row)
        {
            ?>
  <section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2><?php echo $row['sidetitle']; ?></h2>
        <div class="row">
          <div class="team-heading col-lg-4">
            <p><?php echo $row['title1']; ?><span><?php echo $row['title2']; ?></span></p>
          </div>
          <div class="team-content col-lg-7 pt-3">
            <div><?php echo $row['content']; ?></div>
          </div>
        </div>
      </div>
      <?php
        }
    ?>
      <div class="row">
      <?php
        for ($x = 1; $x <= 18; $x++) {
        $query2 = "SELECT * FROM membersdetail WHERE id='$x'";
        $query_run2 = mysqli_query($connection, $query2);
        foreach($query_run2 as $row)
        {
      ?>
        <div class="col-lg-2 col-md-3 d-flex align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4><?php echo $row['name']; ?></h4>
              <span><?php echo $row['position']; ?></span>
            </div>
          </div>
        </div>
      <?php
        }
      }
      ?>
      </div>
    </div>
  </section><!--End Team Section -->
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

