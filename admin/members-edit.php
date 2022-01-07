<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Members Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            $query1 = "SELECT * FROM members";
            $query_run1 = mysqli_query($connection, $query1);
            $query2 = "SELECT * FROM membersdetail";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run1 as $row)
            {
            ?>
            <form action="code.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label> Side Title</label>
                    <textarea type="text" rows="1" name="edit_sidetitle" class="form-control"><?php echo $row['sidetitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Title1</label>
                    <textarea type="text" rows="1" name="edit_title1" class="form-control"><?php echo $row['title1']?></textarea>
                </div>
                <div class="form-group">
                    <label> Title2</label>
                    <textarea type="text" rows="1" name="edit_title2" class="form-control"><?php echo $row['title2']?></textarea>
                </div>
                <div class="form-group">
                    <label> Content</label>
                    <textarea type="text" rows="1" name="edit_content" class="form-control"><?php echo $row['content']?></textarea>
                </div>
                <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=1 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member1-Name </label>
                    <textarea type="text" rows="1" name="edit_name1" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member1-Position </label>
                    <textarea type="text" rows="1" name="edit_position1" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member1-Image </label>
                    <textarea type="text" rows="1" name="edit_image1" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=2 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member2-Name </label>
                    <textarea type="text" rows="1" name="edit_name2" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member2-Position </label>
                    <textarea type="text" rows="1" name="edit_position2" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member2-Image </label>
                    <textarea type="text" rows="1" name="edit_image2" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=3 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member3-Name </label>
                    <textarea type="text" rows="1" name="edit_name3" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member3-Position </label>
                    <textarea type="text" rows="1" name="edit_position3" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member3-Image </label>
                    <textarea type="text" rows="1" name="edit_image3" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=4 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member4-Name </label>
                    <textarea type="text" rows="1" name="edit_name4" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member4-Position </label>
                    <textarea type="text" rows="1" name="edit_position4" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member4-Image </label>
                    <textarea type="text" rows="1" name="edit_image4" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=5 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member5-Name </label>
                    <textarea type="text" rows="1" name="edit_name5" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member5-Position </label>
                    <textarea type="text" rows="1" name="edit_position5" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member5-Image </label>
                    <textarea type="text" rows="1" name="edit_image5" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=6 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member6-Name </label>
                    <textarea type="text" rows="1" name="edit_name6" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member6-Position </label>
                    <textarea type="text" rows="1" name="edit_position6" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member6-Image </label>
                    <textarea type="text" rows="1" name="edit_image6" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=7 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member7-Name </label>
                    <textarea type="text" rows="1" name="edit_name7" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member7-Position </label>
                    <textarea type="text" rows="1" name="edit_position7" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member7-Image </label>
                    <textarea type="text" rows="1" name="edit_image7" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=8 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member8-Name </label>
                    <textarea type="text" rows="1" name="edit_name8" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member8-Position </label>
                    <textarea type="text" rows="1" name="edit_position8" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member8-Image </label>
                    <textarea type="text" rows="1" name="edit_image8" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=9 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member9-Name </label>
                    <textarea type="text" rows="1" name="edit_name9" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member9-Position </label>
                    <textarea type="text" rows="1" name="edit_position9" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member9-Image </label>
                    <textarea type="text" rows="1" name="edit_image9" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=10 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member10-Name </label>
                    <textarea type="text" rows="1" name="edit_name10" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member10-Position </label>
                    <textarea type="text" rows="1" name="edit_position10" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member10-Image </label>
                    <textarea type="text" rows="1" name="edit_image10" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=11 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member11-Name </label>
                    <textarea type="text" rows="1" name="edit_name11" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member11-Position </label>
                    <textarea type="text" rows="1" name="edit_position11" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member11-Image </label>
                    <textarea type="text" rows="1" name="edit_image11" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=12 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member12-Name </label>
                    <textarea type="text" rows="1" name="edit_name12" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member12-Position </label>
                    <textarea type="text" rows="1" name="edit_position12" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member12-Image </label>
                    <textarea type="text" rows="1" name="edit_image12" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=13 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member13-Name </label>
                    <textarea type="text" rows="1" name="edit_name13" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member13-Position </label>
                    <textarea type="text" rows="1" name="edit_position13" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member13-Image </label>
                    <textarea type="text" rows="1" name="edit_image13" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=14 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member14-Name </label>
                    <textarea type="text" rows="1" name="edit_name14" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member14-Position </label>
                    <textarea type="text" rows="1" name="edit_position14" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member14-Image </label>
                    <textarea type="text" rows="1" name="edit_image14" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=15 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member15-Name </label>
                    <textarea type="text" rows="1" name="edit_name15" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member15-Position </label>
                    <textarea type="text" rows="1" name="edit_position15" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member15-Image </label>
                    <textarea type="text" rows="1" name="edit_image15" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=16 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member16-Name </label>
                    <textarea type="text" rows="1" name="edit_name16" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member16-Position </label>
                    <textarea type="text" rows="1" name="edit_position16" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member16-Image </label>
                    <textarea type="text" rows="1" name="edit_image16" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=17 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member17-Name </label>
                    <textarea type="text" rows="1" name="edit_name17" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member17-Position </label>
                    <textarea type="text" rows="1" name="edit_position17" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member17-Image </label>
                    <textarea type="text" rows="1" name="edit_image17" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            $query2 = "SELECT * FROM membersdetail WHERE id=18 ";
            $query_run2 = mysqli_query($connection, $query2);
            foreach($query_run2 as $row)
            {
            ?>
                <div class="form-group">
                    <label> Member18-Name </label>
                    <textarea type="text" rows="1" name="edit_name18" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member18-Position </label>
                    <textarea type="text" rows="1" name="edit_position18" class="form-control"><?php echo $row['position']?></textarea>
                </div>
                <div class="form-group">
                    <label> Member18-Image </label>
                    <textarea type="text" rows="1" name="edit_image18" class="form-control"><?php echo $row['image']?></textarea>
                </div>
            <?php
            }
            ?>
                <a href="members.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_members" class="btn btn-primary">UPDATE</button>
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