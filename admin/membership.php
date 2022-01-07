<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>    

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Membership</h6>
        </div>
        <div class="card-body">
            <div>
                <?php
                    $query1 = "SELECT * FROM membership";
                    $query_run1 = mysqli_query($connection, $query1);
                    $query2 = "SELECT * FROM membershipcard";
                    $query_run2 = mysqli_query($connection, $query2);
                ?>
                <?php
                    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run1))
                        {
                            ?>
                            <form action="membership-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Side Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['sidetitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Main Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['maintitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Invite Message</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['invite']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['subtitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['description']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['buttontitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Info-Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['infotitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Info-Para1</label>
                                    <textarea readonly rows="3" class="form-control"><?php echo $row['info1']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Info-Para2</label>
                                    <textarea readonly rows="4" class="form-control"><?php echo $row['info2']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Info-Para3</label>
                                    <textarea readonly rows="5" class="form-control"><?php echo $row['info3']; ?></textarea>
                                </div>
                            <?php
                            }
                            $query2 = "SELECT * FROM membershipcard WHERE id=1";
                            $query_run2 = mysqli_query($connection, $query2);
                            while($row = mysqli_fetch_assoc($query_run2))
                            {
                            ?>
                                <div class="mb-3">
                                    <label class="form-label">Benefits Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Benefit1</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['benefits']; ?></textarea>
                                </div>
                            <?php
                            }
                            for ($x = 2; $x <= 6; $x++) {
                            $query2 = "SELECT * FROM membershipcard WHERE id=$x";
                            $query_run2 = mysqli_query($connection, $query2);
                            while($row = mysqli_fetch_assoc($query_run2))
                            {
                            ?>
                                <div class="mb-3">
                                    <label class="form-label">Benefit<?php echo "$x";?></label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['benefits']; ?></textarea>
                                </div>
                            <?php
                            }
                            }
                            ?>
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            <?php
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