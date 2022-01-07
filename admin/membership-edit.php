<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Membership Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $query1 = "SELECT * FROM membership";
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
                    <label> Invite Message </label>
                    <textarea type="text" rows="2" name="edit_invite" class="form-control"><?php echo $row['invite']?></textarea>
                </div>
                <div class="form-group">
                    <label> Sub Title </label>
                    <textarea type="text" rows="1" name="edit_subtitle" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Description </label>
                    <textarea type="text" rows="2" name="edit_description" class="form-control"><?php echo $row['description']?></textarea>
                </div>
                <div class="form-group">
                    <label> Button Title </label>
                    <textarea type="text" rows="1" name="edit_buttontitle" class="form-control"><?php echo $row['buttontitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Info-Title</label>
                    <textarea type="text" rows="1" name="edit_infotitle" class="form-control"><?php echo $row['infotitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Info-Para1</label>
                    <textarea type="text" rows="3" name="edit_info1" class="form-control"><?php echo $row['info1']?></textarea>
                </div>
                <div class="form-group">
                    <label> Info-Para2</label>
                    <textarea type="text" rows="4" name="edit_info2" class="form-control"><?php echo $row['info2']?></textarea>
                </div>
                <div class="form-group">
                    <label> Info-Para3</label>
                    <textarea type="text" rows="5" name="edit_info3" class="form-control"><?php echo $row['info3']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membershipcard WHERE id=1 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> benefits Title</label>
                    <textarea type="text" rows="1" name="edit_title" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> benefit1</label>
                    <textarea type="text" rows="1" name="edit_benefit1" class="form-control"><?php echo $row['benefits']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membershipcard WHERE id=2 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> benefit2</label>
                    <textarea type="text" rows="1" name="edit_benefit2" class="form-control"><?php echo $row['benefits']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membershipcard WHERE id=3 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> benefit3</label>
                    <textarea type="text" rows="1" name="edit_benefit3" class="form-control"><?php echo $row['benefits']?></textarea>
                </div>
                <?php
            }
            $query2 = "SELECT * FROM membershipcard WHERE id=4 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> benefit4</label>
                    <textarea type="text" rows="1" name="edit_benefit4" class="form-control"><?php echo $row['benefits']?></textarea>
                </div>
                <?php
            }
            $query2 = "SELECT * FROM membershipcard WHERE id=5 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> benefit5</label>
                    <textarea type="text" rows="1" name="edit_benefit5" class="form-control"><?php echo $row['benefits']?></textarea>
                </div>
                <?php
            }
            $query2 = "SELECT * FROM membershipcard WHERE id=6 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> benefit6</label>
                    <textarea type="text" rows="1" name="edit_benefit6" class="form-control"><?php echo $row['benefits']?></textarea>
                </div>
            <?php
            }
            ?>
                <a href="membership.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_membership" class="btn btn-primary">UPDATE</button>
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