<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>    

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Home</h6>
        </div>
        <div class="card-body">
            <div>
                <?php
                    $query = "SELECT * FROM home";
                    $query_run = mysqli_query($connection, $query);
                ?>
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $x = 0;
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            for ($x = 1; $x <= 5; $x++) {
                            ?>
                            <form action="home-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Slide<?php echo "$x";?>-Image-Link</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['slide'.$x.'img']; ?></textarea>
                                </div>
                                <?php
                                }
                                ?>
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Recods Found";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</div>


<?php 
    include('includes/scripts.php');
    include('includes/footer.php');
?>