<?php 
$page = "membership";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
<?php
    $query1 = "SELECT * FROM membership";
    $query_run1 = mysqli_query($connection, $query1);
    $query2 = "SELECT * FROM membershipcard";
    $query_run2 = mysqli_query($connection, $query2);
    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
    {
        foreach($query_run1 as $row)
        {
            ?>
  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container">

      <div class="section-title">
        <h2><?php echo $row['sidetitle']; ?></h2>
        <p><?php echo $row['maintitle']; ?></p>
      </div>
      <div class="membership-info">
      <h6><b><?php echo $row['invite']; ?></b></h6>
      <div class="form-sect">
        <h1 class="text-center my-4"><?php echo $row['subtitle']; ?></h1>
        <h6><?php echo $row['description']; ?></h6>
      </div>
      <div class="btn-wrap">
        <a href="#" class="btn-buy"><?php echo $row['buttontitle']; ?></a>
      </div>
      <div class="info"><h6><b><?php echo $row['infotitle']; ?></h6></b>
      <p><?php echo $row['info1']; ?></p>
      <p><?php echo $row['info2']; ?></p>
      <p><?php echo $row['info3']; ?></p>
      </div>
    </div>
    <?php
        }
    ?>
      <div class="row">
        <div class="col-lg-12 col-md-12 mt-4 mt-md-0">
          <div class="box featured">
        <?php
          $query2 = "SELECT * FROM membershipcard WHERE id=1";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
        {
        ?>
            <h3 class="py-3"><?php echo $row['title']; ?></h3>
            <!--<h4><sup>$</sup>19<span> / month</span></h4>-->
            <ul>
              <li><?php echo $row['benefits']; ?></li>
        <?php
        }
          for ($x = 2; $x <= 6; $x++) {
          $query2 = "SELECT * FROM membershipcard WHERE id=$x ";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
          {
        ?>
              <li><?php echo $row['benefits']; ?></li>
            <?php
          }
        }
          ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Pricing Section -->
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
