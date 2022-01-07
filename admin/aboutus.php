<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">About Us</h6>
        </div>
        <div class="card-body">
            <?php
            ?>
            <div>
                <?php
                    $query1 = "SELECT * FROM aboutus";
                    $query_run1 = mysqli_query($connection, $query1);
                    $query2 = "SELECT * FROM aboutusbtn";
                    $query_run2 = mysqli_query($connection, $query2);
                ?>
                <?php
                    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2)) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run1))
                        {
                            ?>
                            <form action="aboutus-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Side Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['sidetitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Side SubTitle</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['sidesubtitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Point1</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['point1']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Point2</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['point2']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Point3</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['point3']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea readonly rows="4" class="form-control"><?php echo $row['description']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['buttontitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Readmore Content</label>
                                    <textarea readonly rows="6" class="form-control"><?php echo $row['learnmore']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Action Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['actiontitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Action Content</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['actioncontent']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Action Button Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['actionbtntitle']; ?></textarea>
                                </div>
                        <?php
                        }
                        $x = 0;
                        while($row = mysqli_fetch_assoc($query_run2))
                        {
                            $x = $x + 1;
                        ?>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['btntitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-Sub-Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-Para1</label>
                                    <textarea readonly rows="3" class="form-control"><?php echo $row['para1']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-Para2</label>
                                    <textarea readonly rows="3" class="form-control"><?php echo $row['para2']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-point1</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['point1']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-point2</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['point2']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-point3</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['point3']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Button<?php echo "$x" ?>-Image-Link</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['img']; ?></textarea>
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