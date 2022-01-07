<!-- </body>
</html> -->
<!-- ======= Footer ======= -->

<?php
    include('header.php');
    $query = "SELECT * FROM footer";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            ?>
<footer id="footer">
    <div class="container">
      <!-- <h3>Selecao</h3> -->
      <h3><?php echo $row['title']; ?></h3>
      <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
      <p><?php echo $row['content']; ?></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <!-- <div class="copyright">
        &copy; Copyright Selecao. All Rights Reserved
      </div> -->
      <div class="copyright">
        &copy; <?php echo $row['copyright']; ?>
      </div>
      <div class="credits">
      </div>
    </div>
</footer><!-- End Footer -->
<?php 
  }
?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php
    }
    else
    {
        echo "No Record Found!";
    }
?>