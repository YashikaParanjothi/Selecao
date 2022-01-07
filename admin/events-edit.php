<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Events Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $query1 = "SELECT * FROM events";
            $query_run1 = mysqli_query($connection, $query1);
            ?>
            <form action="code.php" method="post">
            <?php
                foreach($query_run1 as $row)
            {
            ?>
                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label> Side Title </label>
                    <textarea type="text" rows="1" name="edit_sidetitle" class="form-control"><?php echo $row['sidetitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Main Title </label>
                    <textarea type="text" rows="1" name="edit_maintitle" class="form-control"><?php echo $row['maintitle']?></textarea>
                </div>
                <?php
            }
                $query1 = "SELECT * FROM eventdetails WHERE id=1 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event1-Title </label>
                    <textarea type="text" rows="1" name="edit_title1" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event1-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle1" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event1-Image </label>
                    <textarea type="text" rows="1" name="edit_image1" class="form-control"><?php echo $row['image']?></textarea>
                </div>
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=2 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event2-Title </label>
                    <textarea type="text" rows="1" name="edit_title2" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event2-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle2" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event2-Image </label>
                    <textarea type="text" rows="1" name="edit_image2" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=3 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event3-Title </label>
                    <textarea type="text" rows="1" name="edit_title3" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event3-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle3" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event3-Image </label>
                    <textarea type="text" rows="1" name="edit_image3" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=4 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event4-Title </label>
                    <textarea type="text" rows="1" name="edit_title4" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event4-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle4" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event4-Image </label>
                    <textarea type="text" rows="1" name="edit_image4" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=5 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event5-Title </label>
                    <textarea type="text" rows="1" name="edit_title5" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event5-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle5" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event5-Image </label>
                    <textarea type="text" rows="1" name="edit_image5" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=6 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event6-Title </label>
                    <textarea type="text" rows="1" name="edit_title6" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event6-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle6" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event6-Image </label>
                    <textarea type="text" rows="1" name="edit_image6" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=7 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event7-Title </label>
                    <textarea type="text" rows="1" name="edit_title7" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event7-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle7" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event7-Image </label>
                    <textarea type="text" rows="1" name="edit_image7" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=8 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event8-Title </label>
                    <textarea type="text" rows="1" name="edit_title8" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event8-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle8" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event8-Image </label>
                    <textarea type="text" rows="1" name="edit_image8" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM eventdetails WHERE id=9 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Event9-Title </label>
                    <textarea type="text" rows="1" name="edit_title9" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Event9-SubTitle </label>
                    <textarea type="text" rows="1" name="edit_subtitle9" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Event9-Image </label>
                    <textarea type="text" rows="1" name="edit_image9" class="form-control"><?php echo $row['image']?></textarea>
                </div> 
                
                <?php
                }
                ?> 
                <a href="events.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_events" class="btn btn-primary">UPDATE</button>
            </form>
            <?php
        }
        ?>
        </div>
    </div>
</div>
</div>

<?php 
    include('includes/scripts.php');
    include('includes/footer.php');
?>