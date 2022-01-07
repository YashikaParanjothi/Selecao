<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>    

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Navbar</h6>
        </div>
        <div class="card-body">
            <div>
                <?php
                    $query = "SELECT * FROM navbar";
                    $query_run = mysqli_query($connection, $query);
                ?>
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {   
                        ?>
                            <form action="navbar-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title']; ?></textarea>
                                </div>
                                <?php
                                for ($x = 1; $x <= 9; $x++) {
                                ?>
                                <div class="mb-3">
                                    <label class="form-label">Page<?php echo "$x";?></label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['item'.$x]; ?></textarea>
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