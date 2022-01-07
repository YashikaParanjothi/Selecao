<?php 
$page = "audit";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
<?php
    $query1 = "SELECT * FROM audit";
    $query_run1 = mysqli_query($connection, $query1);
    $query2 = "SELECT * FROM auditschools";
    $query_run2 = mysqli_query($connection, $query2);
    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
    {
        foreach($query_run1 as $row)
        {
            ?>
<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2><?php echo $row['sidetitle']; ?></h2>
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <p><?php echo $row['maintitle']; ?></p>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="content"><?php echo $row['content']; ?></div>
          </div>
      </div>
    <?php
        }
    ?>
      <div class="row">
        <?php
          $query2 = "SELECT * FROM auditschools WHERE id=1";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
        {
        ?>
        <div class="col-lg-6 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href=""><?php echo $row['schoolname']; ?></a></h4>
            <p class="description"><?php echo $row['address']; ?></p>
          </div>
        </div>
        <?php
        }
          $query2 = "SELECT * FROM auditschools WHERE id=2";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
        {
        ?>
        <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
            <h4 class="title"><a href=""></a><?php echo $row['schoolname']; ?></h4>
            <p class="description"><?php echo $row['address']; ?></p>
          </div>
        </div>
        <?php
        }
          $query2 = "SELECT * FROM auditschools WHERE id=3";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
        {
        ?>
        <div class="col-lg-6 col-md-6 mt-5">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
            <h4 class="title"><a href=""><?php echo $row['schoolname']; ?></a></h4>
            <p class="description"><?php echo $row['address']; ?></p>
          </div>
        </div>
        <?php
        }
          $query2 = "SELECT * FROM auditschools WHERE id=4";
          $query_run2 = mysqli_query($connection, $query2);
          foreach($query_run2 as $row)
        {
        ?>
        <div class="col-lg-6 col-md-6 mt-5">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href=""><?php echo $row['schoolname']; ?></a></h4>
            <p class="description"><?php echo $row['address']; ?></p>
          </div>
        </div>
        <?php
        }
        ?>
       
      </div>

    </div>
  </section>
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