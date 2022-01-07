<?php 
$page = "aboutus";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
  <!-- About -->
  <?php
    $query1 = "SELECT * FROM aboutus";
    $query_run1 = mysqli_query($connection, $query1);
    $query2 = "SELECT * FROM aboutusbtn";
    $query_run2 = mysqli_query($connection, $query2);
    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
    {
        foreach($query_run1 as $row)
        {
            ?>
  <section id="about">
    <h2 class="heading"><?php echo $row['sidetitle']; ?></h2>
    <span class="subheading"><?php echo $row['sidesubtitle']; ?></span>
    <div class="row">
      <div class="col-lg-6">
       <p><?php echo $row['title']; ?></p>
        <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point1']; ?></p>
        <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point2']; ?></p>
        <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point3']; ?></p>
      </div>
      <div class="col-lg-6">
        <p><?php echo $row['description']; ?></p>
        <a class="learnmore btn"><?php echo $row['buttontitle']; ?></a>
      </div>
      <div>
        <p class="learnmore-content"><?php echo $row['learnmore']; ?></p>
      </div>
    </div>
  </section>
  <?php
    }
  ?>
  <section class="button-list">
    <div class="button-container row">
    <?php
      $query2 = "SELECT * FROM aboutusbtn WHERE id=1";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
      <div class="inner-box col-lg-3 col-md-3 col-sm-3 col-3">
        <a id="btn-1" class="four-btn active-btn hover-btn btn"><i class="ri-gps-line"></i>
          <p><?php echo $row['btntitle']; ?></p>
        </a>
      </div>
    <?php
      }
      $query2 = "SELECT * FROM aboutusbtn WHERE id=2";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
      <div class="inner-box col-lg-3 col-md-3 col-sm-3 col-3">
        <a id="btn-2" class="four-btn btn hover-btn"><i class="ri-body-scan-line"></i>
          <p><?php echo $row['btntitle']; ?></p>
        </a>
      </div>
    <?php
      }
      $query2 = "SELECT * FROM aboutusbtn WHERE id=3";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
      <div class="inner-box col-lg-3 col-md-3 col-sm-3 col-3">
        <a id="btn-3" class="four-btn btn hover-btn"><i class="ri-sun-line"></i>
          <p><?php echo $row['btntitle']; ?></p>
        </a>
      </div>
    <?php
      }
      $query2 = "SELECT * FROM aboutusbtn WHERE id=4";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
      <div class="inner-box col-lg-3 col-md-3 col-sm-3 col-3">
        <a id="btn-4" class="four-btn btn hover-btn"><i class="ri-store-line"></i>
          <p><?php echo $row['btntitle']; ?></p>
        </a>
      </div>
    <?php
      }
    ?>
    </div>
  </section><!-- End of About -->

  <!-- Features -->
  <section class="features">
    <?php
      $query2 = "SELECT * FROM aboutusbtn WHERE id=1";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
    <div class="feature-1 row">
      <div class=" col-lg-6">
        <h3><?php echo $row['title']; ?></h3>
        <div class="italic-text"><?php echo $row['para1']; ?></div>
        <div class="points">
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point1']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point2']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point3']; ?></p>
        </div>
          <p class="bottom-text"><?php echo $row['para2']; ?></p>
      </div>
      <div class="col-lg-6">
        <img class="feature-image" src="<?php echo $row['img']; ?>">
      </div>
    </div>
    <?php
      }
      $query2 = "SELECT * FROM aboutusbtn WHERE id=2";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
    <div class="feature-2 row">
      <div class=" col-lg-6">
        <h3><?php echo $row['title']; ?></h3>
        <div class="top-text"><?php echo $row['para1']; ?></div>
        <div class="italic-text"><?php echo $row['para2']; ?></div>
        <div class="points">
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point1']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point2']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point3']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu
            fugiat nulla pariatur.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="feature-image" src="<?php echo $row['img']; ?>">
      </div>
    </div>
    <?php
      }
      $query2 = "SELECT * FROM aboutusbtn WHERE id=3";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
    <div class="feature-3 row">
      <div class=" col-lg-6">
        <h3><?php echo $row['title']; ?></h3>
        <div class="top-text"><?php echo $row['para1']; ?></div>
        <div class="points">
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point1']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point2']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point3']; ?></p>
        </div>
        <div class="italic-text"><?php echo $row['para2']; ?></div>
      </div>
      <div class="col-lg-6">
        <img class="feature-image" src="<?php echo $row['img']; ?>">
      </div>
    </div>
    <?php
      }
      $query2 = "SELECT * FROM aboutusbtn WHERE id=4";
      $query_run2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_assoc($query_run2)){
    ?>
    <div class="feature-4 row">
      <div class=" col-lg-6">
        <h3><?php echo $row['title']; ?></h3>
        <div class="top-text"><?php echo $row['para1']; ?></div>
        <p class="italic-text"><?php echo $row['para2']; ?></p>
        <div class="points">
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point1']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point2']; ?></p>
          <p><i class="doubletick iconify" data-icon="ri-check-double-line" data-inline="false"></i> <?php echo $row['point3']; ?></p>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="feature-image" src="<?php echo $row['img']; ?>">
      </div>
    </div>
    <?php
      }
    ?>
  </section><!-- End of Features -->
  <?php
  foreach($query_run1 as $row)
  {
  ?>
  <!-- Call To Action -->
  <section class="calltoaction">
    <a class="action-btn btn" href="#home"><?php echo $row['actionbtntitle']; ?></a>
    <h4><?php echo $row['actiontitle']; ?></h4>
    <p><?php echo $row['actioncontent']; ?></p>
  </section><!-- End of Call to Action -->

<?php
    }
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
