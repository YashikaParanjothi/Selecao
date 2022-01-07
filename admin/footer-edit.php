<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Footer</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            $query = "SELECT * FROM footer";
            $query_run = mysqli_query($connection, $query);
            foreach($query_run as $row)
            {
            ?>
            <form action="code.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label> Footer Title</label>
                    <textarea type="text" rows="1" name="edit_title" class="form-control"><?php echo $row['title']?></textarea>
                </div>
                <div class="form-group">
                    <label> Footer Content</label>
                    <textarea type="text" rows="1" name="edit_content" class="form-control"><?php echo $row['content']?></textarea>
                </div>
                <div class="form-group">
                    <label> Copyright</label>
                    <textarea type="text" rows="1" name="edit_copyright" class="form-control"><?php echo $row['copyright']?></textarea>
                </div>
                <a href="footer.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_footer" class="btn btn-primary">UPDATE</button>
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