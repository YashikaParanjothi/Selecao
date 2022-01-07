<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Us</h6>
        </div>
        <div class="card-body">
            <?php
            ?>
            <div>
                <?php
                    $query1 = "SELECT * FROM contactus";
                    $query_run1 = mysqli_query($connection, $query1);
                    $query2 = "SELECT * FROM districtheads";
                    $query_run2 = mysqli_query($connection, $query2);
                    $query3 = "SELECT * FROM contacttable";
                    $query_run3 = mysqli_query($connection, $query3);
                ?>
                <?php
                    if((mysqli_num_rows($query_run1) && mysqli_num_rows($query_run2) && mysqli_num_rows($query_run3)) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run1))
                        {
                            ?>
                            <form action="contactus-edit.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Side Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['sidetitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['subtitle']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Main Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['maintitle']; ?></textarea>
                                </div>     
                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <textarea readonly rows="2" class="form-control"><?php echo $row['location']; ?></textarea>
                                </div>  
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['email']; ?></textarea>
                                </div>  
                                <div class="mb-3">
                                    <label class="form-label">Call</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['phone']; ?></textarea>
                                </div>  
                                <div class="mb-3">
                                    <label class="form-label">District Title</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['districttitle']; ?></textarea>
                                </div>       
                        <?php
                        }
                        $x = 0;
                        while($row = mysqli_fetch_assoc($query_run2))
                        {
                            $x = $x + 1;
                        ?>
                                <div class="mb-3">
                                    <label class="form-label">Name<?php echo "$x" ?></label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['name']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">District<?php echo "$x" ?></label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['district']; ?></textarea>
                                </div>
                        <?php
                        }
                        while($row = mysqli_fetch_assoc($query_run1))
                        {
                        ?>
                                <div class="mb-3">
                                    <label class="form-label">Table Title1</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title1']; ?></textarea>
                                </div>   
                                <div class="mb-3">
                                    <label class="form-label">Table Title2</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title2']; ?></textarea>
                                </div>  
                                <div class="mb-3">
                                    <label class="form-label">Table Title3</label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['title3']; ?></textarea>
                                </div>
                        <?php
                        }
                        $x = 0;
                        while($row = mysqli_fetch_assoc($query_run3))
                        {
                            $x = $x + 1;
                        ?>
                                <div class="mb-3">
                                    <label class="form-label">Central Revenue Division<?php echo "$x" ?></label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['crd']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Northern Revenue Division<?php echo "$x" ?></label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['nrd']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Southern Revenue Division<?php echo "$x" ?></label>
                                    <textarea readonly rows="1" class="form-control"><?php echo $row['srd']; ?></textarea>
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