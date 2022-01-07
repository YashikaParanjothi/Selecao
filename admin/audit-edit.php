<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Audit Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $query1 = "SELECT * FROM audit";
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
                <div class="form-group">
                    <label> Content </label>
                    <textarea type="text" rows="3" name="edit_content" class="form-control"><?php echo $row['content']?></textarea>
                </div> 
                <?php
            }
                $query1 = "SELECT * FROM auditschools WHERE id=1 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> School1-Name </label>
                    <textarea type="text" rows="1" name="edit_schoolname1" class="form-control"><?php echo $row['schoolname']?></textarea>
                </div>
                <div class="form-group">
                    <label> School1-Address </label>
                    <textarea type="text" rows="2" name="edit_address1" class="form-control"><?php echo $row['address']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM auditschools WHERE id=2 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> School2-Name </label>
                    <textarea type="text" rows="1" name="edit_schoolname2" class="form-control"><?php echo $row['schoolname']?></textarea>
                </div>
                <div class="form-group">
                    <label> School2-Address </label>
                    <textarea type="text" rows="2" name="edit_address2" class="form-control"><?php echo $row['address']?></textarea>
                </div>
                <?php
                }
                $query1 = "SELECT * FROM auditschools WHERE id=3 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> School3-Name </label>
                    <textarea type="text" rows="1" name="edit_schoolname3" class="form-control"><?php echo $row['schoolname']?></textarea>
                </div>
                <div class="form-group">
                    <label> School3-Address </label>
                    <textarea type="text" rows="2" name="edit_address3" class="form-control"><?php echo $row['address']?></textarea>
                </div>
                <?php
                }
                $query1 = "SELECT * FROM auditschools WHERE id=4 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> School4-Name </label>
                    <textarea type="text" rows="1" name="edit_schoolname4" class="form-control"><?php echo $row['schoolname']?></textarea>
                </div>
                <div class="form-group">
                    <label> School4-Address </label>
                    <textarea type="text" rows="2" name="edit_address4" class="form-control"><?php echo $row['address']?></textarea>
                </div>
                <?php
                }
                ?> 
                <a href="audit.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_audit" class="btn btn-primary">UPDATE</button>
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