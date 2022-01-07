<?php
    include('security.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Contact Us Page</h6>
        </div>
        <div class="card-body">
            <?php
        if(isset($_POST['edit_btn']))
        {
            $query1 = "SELECT * FROM contactus";
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
                    <label> Sub Title </label>
                    <textarea type="text" rows="1" name="edit_subtitle" class="form-control"><?php echo $row['subtitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Main Title </label>
                    <textarea type="text" rows="1" name="edit_maintitle" class="form-control"><?php echo $row['maintitle']?></textarea>
                </div>
                <div class="form-group">
                    <label> Location </label>
                    <textarea type="text" rows="2" name="edit_location" class="form-control"><?php echo $row['location']?></textarea>
                </div>
                <div class="form-group">
                    <label> Email </label>
                    <textarea type="text" rows="1" name="edit_email" class="form-control"><?php echo $row['email']?></textarea>
                </div>
                <div class="form-group">
                    <label> Call </label>
                    <textarea type="text" rows="1" name="edit_call" class="form-control"><?php echo $row['phone']?></textarea>
                </div>
                <div class="form-group">
                    <label> District Title </label>
                    <textarea type="text" rows="1" name="edit_districttitle" class="form-control"><?php echo $row['districttitle']?></textarea>
                </div>
                <?php
            }
                $query1 = "SELECT * FROM districtheads WHERE id=1 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name1 </label>
                    <textarea type="text" rows="1" name="edit_name1" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district1 </label>
                    <textarea type="text" rows="1" name="edit_district1" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=2 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name2 </label>
                    <textarea type="text" rows="1" name="edit_name2" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district2 </label>
                    <textarea type="text" rows="1" name="edit_district2" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=3 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name3 </label>
                    <textarea type="text" rows="1" name="edit_name3" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district3 </label>
                    <textarea type="text" rows="1" name="edit_district3" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=4 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name4 </label>
                    <textarea type="text" rows="1" name="edit_name4" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district4 </label>
                    <textarea type="text" rows="1" name="edit_district4" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=5 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name5 </label>
                    <textarea type="text" rows="1" name="edit_name5" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district5 </label>
                    <textarea type="text" rows="1" name="edit_district5" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=6 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name6 </label>
                    <textarea type="text" rows="1" name="edit_name6" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district6 </label>
                    <textarea type="text" rows="1" name="edit_district6" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=7 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name7 </label>
                    <textarea type="text" rows="1" name="edit_name7" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district7 </label>
                    <textarea type="text" rows="1" name="edit_district7" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=8 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name8 </label>
                    <textarea type="text" rows="1" name="edit_name8" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district8 </label>
                    <textarea type="text" rows="1" name="edit_district8" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=9 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name9 </label>
                    <textarea type="text" rows="1" name="edit_name9" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district9 </label>
                    <textarea type="text" rows="1" name="edit_district9" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=10 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name10 </label>
                    <textarea type="text" rows="1" name="edit_name10" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district10 </label>
                    <textarea type="text" rows="1" name="edit_district10" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=11 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name11 </label>
                    <textarea type="text" rows="1" name="edit_name11" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district11 </label>
                    <textarea type="text" rows="1" name="edit_district11" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=12 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name12 </label>
                    <textarea type="text" rows="1" name="edit_name12" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district12 </label>
                    <textarea type="text" rows="1" name="edit_district12" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=13 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name13 </label>
                    <textarea type="text" rows="1" name="edit_name13" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district13 </label>
                    <textarea type="text" rows="1" name="edit_district13" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=14 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name14 </label>
                    <textarea type="text" rows="1" name="edit_name14" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district14 </label>
                    <textarea type="text" rows="1" name="edit_district14" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=15 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name15 </label>
                    <textarea type="text" rows="1" name="edit_name15" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district15 </label>
                    <textarea type="text" rows="1" name="edit_district15" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=16 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name16 </label>
                    <textarea type="text" rows="1" name="edit_name16" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district16 </label>
                    <textarea type="text" rows="1" name="edit_district16" class="form-control"><?php echo $row['district']?></textarea>
                </div>
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=17 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name17 </label>
                    <textarea type="text" rows="1" name="edit_name17" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district17 </label>
                    <textarea type="text" rows="1" name="edit_district17" class="form-control"><?php echo $row['district']?></textarea>
                </div>  
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=18 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name18 </label>
                    <textarea type="text" rows="1" name="edit_name18" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district18 </label>
                    <textarea type="text" rows="1" name="edit_district18" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=19 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name19 </label>
                    <textarea type="text" rows="1" name="edit_name19" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district19 </label>
                    <textarea type="text" rows="1" name="edit_district19" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=20 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name20 </label>
                    <textarea type="text" rows="1" name="edit_name20" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district20 </label>
                    <textarea type="text" rows="1" name="edit_district20" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=21 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name21 </label>
                    <textarea type="text" rows="1" name="edit_name21" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district21 </label>
                    <textarea type="text" rows="1" name="edit_district21" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=22 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name22 </label>
                    <textarea type="text" rows="1" name="edit_name22" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district22 </label>
                    <textarea type="text" rows="1" name="edit_district22" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=23 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name23 </label>
                    <textarea type="text" rows="1" name="edit_name23" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district23 </label>
                    <textarea type="text" rows="1" name="edit_district23" class="form-control"><?php echo $row['district']?></textarea>
                </div> 
                <?php
                }
                $query1 = "SELECT * FROM districtheads WHERE id=24 ";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Name24 </label>
                    <textarea type="text" rows="1" name="edit_name24" class="form-control"><?php echo $row['name']?></textarea>
                </div>
                <div class="form-group">
                    <label> district24 </label>
                    <textarea type="text" rows="1" name="edit_district24" class="form-control"><?php echo $row['district']?></textarea>
                </div>

                <?php
                }
                $query1 = "SELECT * FROM contactus";
                $query_run1 = mysqli_query($connection, $query1);
                foreach($query_run1 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Table Title1 </label>
                    <textarea type="text" rows="1" name="edit_title1" class="form-control"><?php echo $row['title1']?></textarea>
                </div>
                <div class="form-group">
                    <label> Table Title2 </label>
                    <textarea type="text" rows="1" name="edit_title2" class="form-control"><?php echo $row['title2']?></textarea>
                </div>
                <div class="form-group">
                    <label> Table Title3 </label>
                    <textarea type="text" rows="1" name="edit_title3" class="form-control"><?php echo $row['title3']?></textarea>
                </div>
                
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=1 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division1 </label>
                    <textarea type="text" rows="1" name="edit_crd1" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division1 </label>
                    <textarea type="text" rows="1" name="edit_nrd1" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division1 </label>
                    <textarea type="text" rows="1" name="edit_srd1" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=2 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division2 </label>
                    <textarea type="text" rows="1" name="edit_crd2" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division2 </label>
                    <textarea type="text" rows="1" name="edit_nrd2" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division2 </label>
                    <textarea type="text" rows="1" name="edit_srd2" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=3 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division3 </label>
                    <textarea type="text" rows="1" name="edit_crd3" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division3 </label>
                    <textarea type="text" rows="1" name="edit_nrd3" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division3 </label>
                    <textarea type="text" rows="1" name="edit_srd3" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=4 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division4 </label>
                    <textarea type="text" rows="1" name="edit_crd4" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division4 </label>
                    <textarea type="text" rows="1" name="edit_nrd4" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division4 </label>
                    <textarea type="text" rows="1" name="edit_srd4" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=5 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division5 </label>
                    <textarea type="text" rows="1" name="edit_crd5" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division5 </label>
                    <textarea type="text" rows="1" name="edit_nrd5" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division5 </label>
                    <textarea type="text" rows="1" name="edit_srd5" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=1 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division6 </label>
                    <textarea type="text" rows="1" name="edit_crd6" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division6 </label>
                    <textarea type="text" rows="1" name="edit_nrd6" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division6 </label>
                    <textarea type="text" rows="1" name="edit_srd6" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=7 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division7 </label>
                    <textarea type="text" rows="1" name="edit_crd7" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division7 </label>
                    <textarea type="text" rows="1" name="edit_nrd7" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division7 </label>
                    <textarea type="text" rows="1" name="edit_srd7" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=8 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division8 </label>
                    <textarea type="text" rows="1" name="edit_crd8" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division8 </label>
                    <textarea type="text" rows="1" name="edit_nrd8" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division8 </label>
                    <textarea type="text" rows="1" name="edit_srd8" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=9 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division9 </label>
                    <textarea type="text" rows="1" name="edit_crd9" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division9 </label>
                    <textarea type="text" rows="1" name="edit_nrd9" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division9 </label>
                    <textarea type="text" rows="1" name="edit_srd9" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                $query2 = "SELECT * FROM contacttable WHERE id=10 ";
                $query_run2 = mysqli_query($connection, $query2);
                foreach($query_run2 as $row)
                {
                ?>
                <div class="form-group">
                    <label> Central Revenue Division10 </label>
                    <textarea type="text" rows="1" name="edit_crd10" class="form-control"><?php echo $row['crd']?></textarea>
                </div>
                <div class="form-group">
                    <label> Northern Revenue Division10 </label>
                    <textarea type="text" rows="1" name="edit_nrd10" class="form-control"><?php echo $row['nrd']?></textarea>
                </div> 
                <div class="form-group">
                    <label> Southern Revenue Division10 </label>
                    <textarea type="text" rows="1" name="edit_srd10" class="form-control"><?php echo $row['srd']?></textarea>
                </div> 
                <?php
                }
                ?>
                <a href="contactus.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="update_contactus" class="btn btn-primary">UPDATE</button>
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