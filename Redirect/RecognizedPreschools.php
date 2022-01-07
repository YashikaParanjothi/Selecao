<?php 
$page = "recognized-preschools";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
<?php
    $query1 = "SELECT * FROM recogPreschools";
    $query_run1 = mysqli_query($connection, $query1);
    $query2 = "SELECT * FROM recogPreschoolsimg";
    $query_run2 = mysqli_query($connection, $query2);
    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
    {
        foreach($query_run1 as $row)
        {
            ?>
  <section id="recognized-preschool">
  <div class="container">
    <h2 class="pt-5 mt-5"><?php echo $row['maintitle']; ?></h2>
    <?php
        }
    ?>
    <div class="preschool-img">
      <div class="row">
      <?php
        for ($x = 1; $x <= 9; $x++) {
        $query2 = "SELECT * FROM recogPreschoolsimg WHERE id='$x'";
        $query_run2 = mysqli_query($connection, $query2);
        foreach($query_run2 as $row)
        {
      ?>
        <div class="col-md-4">
          <div class="slide"><img src="<?php echo $row['schoolimg']; ?>"></div>
        </div>
      <?php
        }
      }
      ?>
      </div>
    </div>
  </div>
  </section>
  <div class="mt-5"></div>
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
