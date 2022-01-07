<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit About Us Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $query1 = "SELECT * FROM aboutus";
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
                    <label> Side SubTitle </label>
                    <textarea type="text" rows="1" name="edit_sidesubtitle" class="form-control"><?php echo $row['sidesubtitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Title </label>
                    <textarea type="text" rows="2" name="edit_title" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Point1 </label>
                    <textarea type="text" rows="1" name="edit_point1" class="form-control"><?php echo $row['point1']?></textarea>
                </div>
                <div class="form-group">
                    <label> Point2 </label>
                    <textarea type="text" rows="1" name="edit_point2" class="form-control"><?php echo $row['point2']?></textarea>
                </div>
                <div class="form-group">
                    <label> Point3 </label>
                    <textarea type="text" rows="1" name="edit_point3" class="form-control"><?php echo $row['point3']?></textarea>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" rows="3" name="edit_description" class="form-control"><?php echo $row['description']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button Title</label>
                    <textarea type="text" rows="1" name="edit_buttontitle" class="form-control"><?php echo $row['buttontitle']?></textarea>
                </div>
                <div class="form-group">
                    <label>Learn More Content</label>
                    <textarea type="text" rows="5" name="edit_learnmore" class="form-control"><?php echo $row['learnmore']?></textarea>
                </div>
                <div class="form-group">
                    <label>Action Title</label>
                    <textarea type="text" rows="1" name="edit_actiontitle" class="form-control"><?php echo $row['actiontitle']?></textarea>
                </div>
                <div class="form-group">
                    <label>Action Content</label>
                    <textarea type="text" rows="2" name="edit_actioncontent" class="form-control"><?php echo $row['actioncontent']?></textarea>
                </div>
                <div class="form-group">
                    <label>Action Button Title</label>
                    <textarea type="text" rows="1" name="edit_actionbtntitle" class="form-control"><?php echo $row['actionbtntitle']?></textarea>
                </div>    
                <?php
            }
                $query_btn1 = "SELECT * FROM aboutusbtn WHERE id=1 ";
                $query_run_btn1 = mysqli_query($connection, $query_btn1);
                foreach($query_run_btn1 as $row)
                {
                ?>
                <input type="hidden" name="edit_id2" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label>Button1-Title</label>
                    <textarea type="text" rows="1" name="edit_btn1_title" class="form-control"><?php echo $row['btntitle']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button1-Sub Title</label>
                    <textarea type="text" rows="1" name="edit_btn1_title2" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button1-Para1</label>
                    <textarea type="text" rows="3" name="edit_btn1_para1" class="form-control"><?php echo $row['para1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button1-Para2</label>
                    <textarea type="text" rows="3" name="edit_btn1_para2" class="form-control"><?php echo $row['para2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button1-Point1</label>
                    <textarea type="text" rows="2" name="edit_btn1_point1" class="form-control"><?php echo $row['point1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button1-Point2</label>
                    <textarea type="text" rows="2" name="edit_btn1_point2" class="form-control"><?php echo $row['point2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button1-Point3</label>
                    <textarea type="text" rows="2" name="edit_btn1_point3" class="form-control"><?php echo $row['point3']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button1-Image-Link</label>
                    <textarea type="text" rows="1" name="edit_btn1_img" class="form-control"><?php echo $row['img']?></textarea>
                </div>
                <?php
                }
                $query_btn2 = "SELECT * FROM aboutusbtn WHERE id=2 ";
                $query_run_btn2 = mysqli_query($connection, $query_btn2);
                foreach($query_run_btn2 as $row)
                {
                ?>
                <input type="hidden" name="edit_id2" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label>Button2-Title</label>
                    <textarea type="text" rows="1" name="edit_btn2_title" class="form-control"><?php echo $row['btntitle']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button2-Sub Title</label>
                    <textarea type="text" rows="1" name="edit_btn2_title2" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button2-Para1</label>
                    <textarea type="text" rows="3" name="edit_btn2_para1" class="form-control"><?php echo $row['para1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button2-Para2</label>
                    <textarea type="text" rows="3" name="edit_btn2_para2" class="form-control"><?php echo $row['para2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button2-Point1</label>
                    <textarea type="text" rows="2" name="edit_btn2_point1" class="form-control"><?php echo $row['point1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button2-Point2</label>
                    <textarea type="text" rows="2" name="edit_btn2_point2" class="form-control"><?php echo $row['point2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button2-Point3</label>
                    <textarea type="text" rows="2" name="edit_btn2_point3" class="form-control"><?php echo $row['point3']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button2-Image-Link</label>
                    <textarea type="text" rows="1" name="edit_btn2_img" class="form-control"><?php echo $row['img']?></textarea>
                </div>
                <?php
                }
                $query_btn3 = "SELECT * FROM aboutusbtn WHERE id=3 ";
                $query_run_btn3 = mysqli_query($connection, $query_btn3);
                foreach($query_run_btn3 as $row)
                {
                ?>
                <input type="hidden" name="edit_id2" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label>Button3-Title</label>
                    <textarea type="text" rows="1" name="edit_btn3_title" class="form-control"><?php echo $row['btntitle']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button3-Sub Title</label>
                    <textarea type="text" rows="1" name="edit_btn3_title2" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button3-Para1</label>
                    <textarea type="text" rows="3" name="edit_btn3_para1" class="form-control"><?php echo $row['para1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button3-Para2</label>
                    <textarea type="text" rows="3" name="edit_btn3_para2" class="form-control"><?php echo $row['para2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button3-Point1</label>
                    <textarea type="text" rows="2" name="edit_btn3_point1" class="form-control"><?php echo $row['point1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button3-Point2</label>
                    <textarea type="text" rows="2" name="edit_btn3_point2" class="form-control"><?php echo $row['point2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button3-Point3</label>
                    <textarea type="text" rows="2" name="edit_btn3_point3" class="form-control"><?php echo $row['point3']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button3-Image-Link</label>
                    <textarea type="text" rows="1" name="edit_btn3_img" class="form-control"><?php echo $row['img']?></textarea>
                </div>
                <?php
                }
                $query_btn4 = "SELECT * FROM aboutusbtn WHERE id=4 ";
                $query_run_btn4 = mysqli_query($connection, $query_btn4);
                foreach($query_run_btn4 as $row)
                {
                ?>
                <input type="hidden" name="edit_id2" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label>Button4-Title</label>
                    <textarea type="text" rows="1" name="edit_btn4_title" class="form-control"><?php echo $row['btntitle']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button4-Sub Title</label>
                    <textarea type="text" rows="1" name="edit_btn4_title2" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button4-Para1</label>
                    <textarea type="text" rows="3" name="edit_btn4_para1" class="form-control"><?php echo $row['para1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button4-Para2</label>
                    <textarea type="text" rows="3" name="edit_btn4_para2" class="form-control"><?php echo $row['para2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button4-Point1</label>
                    <textarea type="text" rows="2" name="edit_btn4_point1" class="form-control"><?php echo $row['point1']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button4-Point2</label>
                    <textarea type="text" rows="2" name="edit_btn4_point2" class="form-control"><?php echo $row['point2']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button4-Point3</label>
                    <textarea type="text" rows="2" name="edit_btn4_point3" class="form-control"><?php echo $row['point3']?></textarea>
                </div>
                <div class="form-group">
                    <label>Button4-Image-Link</label>
                    <textarea type="text" rows="1" name="edit_btn4_img" class="form-control"><?php echo $row['img']?></textarea>
                </div>
                <?php
                }
                ?> 
                <a href="aboutus.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_about" class="btn btn-primary">UPDATE</button>
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