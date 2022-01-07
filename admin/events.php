<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Events</h6>
        </div>
        <div class="card-body">
            <?php
            ?>
            <div>
                <?php
                    $query1 = "SELECT * FROM events";
                    $query_run1 = mysqli_query($connection, $query1);
                    $query2 = "SELECT * FROM eventdetails";
                    $query_run2 = mysqli_query($connection, $query2);
                ?>
                <?php
                    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run1))
                        {
                            ?>
                            <form action="events-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Side Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['sidetitle']; ?></textarea>
                                </div>
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
                                    <label class="form-label">Event<?php echo "$x" ?>-Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event<?php echo "$x" ?>-SubTitle</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['subtitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event<?php echo "$x" ?>-Image</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['image']; ?></textarea>
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