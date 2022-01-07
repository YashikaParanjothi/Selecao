<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Recognized Preschools Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            $query1 = "SELECT * FROM recogPreschools";
            $query_run1 = mysqli_query($connection, $query1);
            $query2 = "SELECT * FROM recogPreschoolsimg";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run1 as $row)
            {
            ?>
            <form action="code.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label> Main Title</label>
                    <textarea type="text" rows="1" name="edit_maintitle" class="form-control"><?php echo $row['maintitle']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=1 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School1-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school1img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=2 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School2-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school2img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=3 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School3-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school3img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=4 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School4-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school4img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=5 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School5-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school5img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=6 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School6-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school6img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=7 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School7-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school7img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=8 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School8-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school8img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM recogPreschoolsimg WHERE id=9 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> School9-image-Link </label>
                    <textarea type="text" rows="1" name="edit_school9img" class="form-control"><?php echo $row['schoolimg']?></textarea>
                </div>
            <?php
            }
            ?>
                <a href="recognizedPreschools.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_recogPreschools" class="btn btn-primary">UPDATE</button>
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