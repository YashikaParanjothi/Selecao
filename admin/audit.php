<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Audit</h6>
        </div>
        <div class="card-body">
            <?php
            ?>
            <div>
                <?php
                    $query1 = "SELECT * FROM audit";
                    $query_run1 = mysqli_query($connection, $query1);
                    $query2 = "SELECT * FROM auditschools";
                    $query_run2 = mysqli_query($connection, $query2);
                ?>
                <?php
                    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run1))
                        {
                            ?>
                            <form action="audit-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Side Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['sidetitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Main Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['maintitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['content']; ?></textarea>
                                </div>           
                        <?php
                        }
                        $x = 0;
                        while($row = mysqli_fetch_assoc($query_run2))
                        {
                            $x = $x + 1;
                        ?>
                                <div class="mb-3">
                                    <label class="form-label">School<?php echo "$x" ?>-Name</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['schoolname']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">School<?php echo "$x" ?>-Address</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['address']; ?></textarea>
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