<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Navbar</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            $query = "SELECT * FROM navbar";
            $query_run = mysqli_query($connection, $query);
            foreach($query_run as $row)
            {
            ?>
            <form action="code.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label> Title</label>
                    <textarea type="text" rows="1" name="edit_title" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page1</label>
                    <textarea type="text" rows="1" name="edit_item1" class="form-control"><?php echo $row['item1']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page2</label>
                    <textarea type="text" rows="1" name="edit_item2" class="form-control"><?php echo $row['item2']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page3</label>
                    <textarea type="text" rows="1" name="edit_item3" class="form-control"><?php echo $row['item3']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page4</label>
                    <textarea type="text" rows="1" name="edit_item4" class="form-control"><?php echo $row['item4']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page5</label>
                    <textarea type="text" rows="1" name="edit_item5" class="form-control"><?php echo $row['item5']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page6</label>
                    <textarea type="text" rows="1" name="edit_item6" class="form-control"><?php echo $row['item6']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page7</label>
                    <textarea type="text" rows="1" name="edit_item7" class="form-control"><?php echo $row['item7']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page8</label>
                    <textarea type="text" rows="1" name="edit_item8" class="form-control"><?php echo $row['item8']?></textarea>
                </div>
                <div class="form-group">
                    <label> Page9</label>
                    <textarea type="text" rows="1" name="edit_item9" class="form-control"><?php echo $row['item9']?></textarea>
                </div>
                <a href="navbar.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_navbar" class="btn btn-primary">UPDATE</button>
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