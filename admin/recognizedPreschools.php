<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>    

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Recognized Preschools</h6>
        </div>
        <div class="card-body">
            <div>
                <?php
                    $query1 = "SELECT * FROM recogPreschools";
                    $query_run1 = mysqli_query($connection, $query1);
                    $query2 = "SELECT * FROM recogPreschoolsImg";
                    $query_run2 = mysqli_query($connection, $query2);
                ?>
                <?php
                    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run1))
                        {
                            ?>
                            <form action="recognizedPreschools-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Main Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['maintitle']; ?></textarea>
                                </div>
                        <?php
                        }
                        $x = 0;
                            while($row = mysqli_fetch_assoc($query_run2))
                            {
                                $x = $x + 1;
                        ?>
                                <div class="mb-3">
                                    <label class="form-label">School<?php echo "$x";?>-image-Link</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['schoolimg']; ?></textarea>
                                </div>
                            <?php 
                            } 
                            ?>
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                        <?php
                    }
                    else
                    {
                        echo "No Records Found";
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