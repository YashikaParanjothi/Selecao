<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Home Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            $query = "SELECT * FROM home WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);
            foreach($query_run as $row)
            {
            ?>
            <form action="code.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label> Slide1-Image-Link </label>
                    <textarea type="text" rows="1" name="edit_slide1img" class="form-control"><?php echo $row['slide1img']?></textarea>
                </div>
                <div class="form-group">
                    <label> Slide2-Image-Link </label>
                    <textarea type="text" rows="1" name="edit_slide2img" class="form-control"><?php echo $row['slide2img']?></textarea>
                </div>
                <div class="form-group">
                    <label> Slide3-Image-Link </label>
                    <textarea type="text" rows="1" name="edit_slide3img" class="form-control"><?php echo $row['slide3img']?></textarea>
                </div>
                <div class="form-group">
                    <label> Slide4-Image-Link </label>
                    <textarea type="text" rows="1" name="edit_slide4img" class="form-control"><?php echo $row['slide4img']?></textarea>
                </div>
                <div class="form-group">
                    <label> Slide5-Image-Link </label>
                    <textarea type="text" rows="1" name="edit_slide5img" class="form-control"><?php echo $row['slide5img']?></textarea>
                </div>
                
                
                <a href="aboutus.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_home" class="btn btn-primary">UPDATE</button>
            </form>
            <?php
            }
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