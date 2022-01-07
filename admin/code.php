<?php

    include('security.php');

    //Admin Registeration
    if(isset($_POST['registerbtn']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
        $usertype = $_POST['usertype'];

        $email_query = "SELECT * FROM register WHERE email='$email' ";
        $email_query_run = mysqli_query($connection, $email_query);

        if(mysqli_num_rows($email_query_run) > 0)
        {
            $_SESSION['status']="Email Already Exist! Try Again!";
            $_SESSION['status_code']="error";
            header('Location: register.php');
        }
        else
        {
            if($password === $cpassword)
            {
                $query = "INSERT INTO register (username,email,password, usertype) VALUES ('$username', '$email', '$password', '$usertype')";
                $query_run = mysqli_query($connection, $query);
            
                if($query_run)
                {
                    $_SESSION['status']="Admin Profile Added";
                    $_SESSION['status_code']="success";
                    header('Location: register.php');
                }
                else
                {
                    $_SESSION['status']="Admin Profile NOT Added";
                    $_SESSION['status_code']="error";
                    header('Location: register.php');
                }
            }
            else
            {
                $_SESSION['status']="Password and confirm Password doesn't match";
                $_SESSION['status_code']="warning";
                header('Location: register.php');   
            }
        }
        
    }
    
    // Edit Admin Account
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $usertypeupdate = $_POST['update_usertype'];
        
        $query = "UPDATE register SET username='$username', email='$email', password='$password', usertype='$usertypeupdate' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: register.php');
        }
    }

    // Delete Admin Account
    if(isset($_POST['delete_btn']))
    {
        $id = $_POST['delete_id'];
        $query = "DELETE FROM register WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code']="success";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Deleted";
            $_SESSION['status_code']="error";
            header('Location: register.php');
        }
    }

    // Edit Navbar
    if(isset($_POST['update_navbar']))
    {
        $id = $_POST['edit_id'];
        $title = $_POST['edit_title'];
        for ($x = 1; $x <= 9; $x++) {
            $item = $_POST['edit_item'.$x];
            $query = "UPDATE navbar SET title='$title', item$x ='$item' WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);
        }
        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: navbar.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: navbar.php');
        }
    }

    // Edit Footer
    if(isset($_POST['update_footer']))
    {
        $id = $_POST['edit_id'];
        $title = $_POST['edit_title'];
        $content = $_POST['edit_content'];
        $copyright = $_POST['edit_copyright'];
        
        $query = "UPDATE footer SET title='$title', content='$content', copyright='$copyright' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: footer.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: footer.php');
        }
    }

    // Edit Home Page
    if(isset($_POST['update_home']))
    {
        $id =$_POST['edit_id'];
        $slide1img = $_POST['edit_slide1img'];
        $slide2img = $_POST['edit_slide2img'];
        $slide3img = $_POST['edit_slide3img'];
        $slide4img = $_POST['edit_slide4img'];
        $slide5img = $_POST['edit_slide5img'];


        $query = "UPDATE home SET slide1img='$slide1img', slide2img='$slide2img', slide3img='$slide3img', slide4img='$slide4img', slide5img='$slide5img' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: home.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: home.php');
        }
    }

    // Edit About Us Page
    if(isset($_POST['update_about']))
    {
        $id = $_POST['edit_id'];
        $sidetitle = $_POST['edit_sidetitle'];
        $sidesubtitle = $_POST['edit_sidesubtitle'];
        $title = $_POST['edit_title'];
        $point1 = $_POST['edit_point1'];
        $point2 = $_POST['edit_point2'];
        $point3 = $_POST['edit_point3'];
        $description = $_POST['edit_description'];
        $buttontitle = $_POST['edit_buttontitle'];
        $learnmore = $_POST['edit_learnmore'];
        $actiontitle = $_POST['edit_actiontitle'];
        $actioncontent = $_POST['edit_actioncontent'];
        $actionbtntitle = $_POST['edit_actionbtntitle'];
        $query1 = "UPDATE aboutus SET sidetitle='$sidetitle', sidesubtitle='$sidesubtitle', title='$title', point1='$point1', point2='$point2', point3='$point3', description='$description', buttontitle='$buttontitle', learnmore='$learnmore', actiontitle='$actiontitle', actioncontent='$actioncontent', actionbtntitle='$actionbtntitle' WHERE id='$id' ";
        $query_run1 = mysqli_query($connection, $query1);

        for ($x = 1; $x <= 4; $x++) {
            $title = $_POST['edit_btn'.$x.'_title'];
            $title2 = $_POST['edit_btn'.$x.'_title2'];
            $para1 = $_POST['edit_btn'.$x.'_para1'];
            $para2 = $_POST['edit_btn'.$x.'_para2'];
            $point1 = $_POST['edit_btn'.$x.'_point1'];
            $point2 = $_POST['edit_btn'.$x.'_point2'];
            $point3 = $_POST['edit_btn'.$x.'_point3'];
            $img = $_POST['edit_btn'.$x.'_img'];
            $query2 ="UPDATE aboutusbtn SET btntitle='$title', title='$title2', para1='$para1', para2='$para2', point1='$point1', point2='$point2', point3='$point3', img='$img' WHERE id='$x' ";
            $query_run2 = mysqli_query($connection, $query2);
        }
        if($query_run1 && $query_run2)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: aboutus.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: aboutus.php');
        }
    }

    //Edit Events Page
    if(isset($_POST['update_events']))
    {
        $id = $_POST['edit_id'];
        $sidetitle = $_POST['edit_sidetitle'];
        $maintitle = $_POST['edit_maintitle'];

        $query = "UPDATE events SET sidetitle='$sidetitle', maintitle='$maintitle' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        for ($x = 1; $x <= 9; $x++) {
            $title = $_POST['edit_title'.$x];
            $subtitle = $_POST['edit_subtitle'.$x];
            $image = $_POST['edit_image'.$x];
            $query1 = "UPDATE eventdetails SET title='$title', subtitle='$subtitle', image='$image' WHERE id='$x' ";
            $query_run1 = mysqli_query($connection, $query1);
        }
        if($query_run && $query_run1)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: events.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: events.php');
        }
    }

    //Edit Audit Page
    if(isset($_POST['update_audit']))
    {
        $id = $_POST['edit_id'];
        $sidetitle = $_POST['edit_sidetitle'];
        $maintitle = $_POST['edit_maintitle'];
        $content = $_POST['edit_content'];

        $query = "UPDATE audit SET sidetitle='$sidetitle', maintitle='$maintitle', content='$content' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        for ($x = 1; $x <= 4; $x++) {
            $schoolname = $_POST['edit_schoolname'.$x];
            $address = $_POST['edit_address'.$x];
            $query1 = "UPDATE auditschools SET schoolname='$schoolname', address='$address' WHERE id='$x' ";
            $query_run1 = mysqli_query($connection, $query1);
        }
        if($query_run && $query_run1)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: audit.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: audit.php');
        }
    }

    // Edit Membership Page
    if(isset($_POST['update_membership']))
    {
        $id = $_POST['edit_id'];
        $sidetitle = $_POST['edit_sidetitle'];
        $maintitle = $_POST['edit_maintitle'];
        $invite = $_POST['edit_invite'];
        $subtitle = $_POST['edit_subtitle'];
        $description = $_POST['edit_description'];
        $buttontitle = $_POST['edit_buttontitle'];
        $infotitle = $_POST['edit_infotitle'];
        $info1 = $_POST['edit_info1'];
        $info2 = $_POST['edit_info2'];
        $info3 = $_POST['edit_info3'];
        $query1 = "UPDATE membership SET sidetitle='$sidetitle', maintitle='$maintitle', invite='$invite', subtitle='$subtitle', description='$description', buttontitle='$buttontitle', infotitle='$infotitle', info1='$info1', info2='$info2', info3='$info3' WHERE id='$id' ";
        $query_run1 = mysqli_query($connection, $query1);
        
        $title = $_POST['edit_title'];
        $benefit = $_POST['edit_benefit1'];
        $query2 = "UPDATE membershipcard SET title='$title', benefits='$benefit' WHERE id=1 ";
        $query_run2 = mysqli_query($connection, $query2);

        for ($x = 2; $x <= 6; $x++) {
            $benefit = $_POST['edit_benefit'.$x];
            $query2 = "UPDATE membershipcard SET benefits='$benefit' WHERE id='$x' ";
            $query_run2 = mysqli_query($connection, $query2);
        }

        if($query_run1 && $query_run2)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: membership.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: membership.php');
        }
    }

    // Edit Recognized Preschools
    if(isset($_POST['update_recogPreschools']))
    {
        $id = $_POST['edit_id'];
        $maintitle = $_POST['edit_maintitle'];
        $query = "UPDATE recogPreschools SET maintitle='$maintitle' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        for ($x = 1; $x <= 9; $x++) {
            $schoolimg = $_POST['edit_school'.$x.'img'];
            $query1 = "UPDATE recogPreschoolsimg SET schoolimg='$schoolimg' WHERE id='$x' ";
            $query_run1 = mysqli_query($connection, $query1);
        }
        if($query_run && $query_run1)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: recognizedPreschools.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: recognizedPreschools.php');
        }
    }

    // Edit Members Page
    if(isset($_POST['update_members']))
    {
        $id = $_POST['edit_id'];
        $sidetitle = $_POST['edit_sidetitle'];
        $title1 = $_POST['edit_title1'];
        $title2 = $_POST['edit_title2'];
        $content = $_POST['edit_content'];

        $query = "UPDATE members SET sidetitle='$sidetitle', title1='$title1', title2='$title2', content='$content' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        for ($x = 1; $x <= 18; $x++) {
            $name = $_POST['edit_name'.$x];
            $position = $_POST['edit_position'.$x];
            $image = $_POST['edit_image'.$x];
            $query1 = "UPDATE membersdetail SET name='$name', image='$image', position='$position' WHERE id='$x' ";
            $query_run1 = mysqli_query($connection, $query1);
        }
        if($query_run && $query_run1)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: members.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: members.php');
        }
    }

    // Edit Contact Us Page
    if(isset($_POST['update_contactus']))
    {
        $id = $_POST['edit_id'];
        $sidetitle = $_POST['edit_sidetitle'];
        $subtitle = $_POST['edit_subtitle'];
        $maintitle = $_POST['edit_maintitle'];
        $location = $_POST['edit_location'];
        $email = $_POST['edit_email'];
        $phone = $_POST['edit_call'];
        $districttitle = $_POST['edit_districttitle'];
        $title1 = $_POST['edit_title1'];
        $title2 = $_POST['edit_title2'];
        $title3 = $_POST['edit_title3'];

        $query = "UPDATE contactus SET sidetitle='$sidetitle', subtitle='$subtitle', maintitle='$maintitle', location='$location', email='$email', phone='$phone', districttitle='$districttitle', title1='$title1', title2='$title2', title3='$title3' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        for ($x = 1; $x <= 24; $x++) {
            $name = $_POST['edit_name'.$x];
            $district = $_POST['edit_district'.$x];
            $query1 = "UPDATE districtheads SET name='$name', district='$district' WHERE id='$x' ";
            $query_run1 = mysqli_query($connection, $query1);
        }

        for ($x = 1; $x <= 10; $x++) {
            $crd = $_POST['edit_crd'.$x];
            $nrd = $_POST['edit_nrd'.$x];
            $srd = $_POST['edit_srd'.$x];
            $query1 = "UPDATE contacttable SET crd='$crd', nrd='$nrd', srd='$srd' WHERE id='$x' ";
            $query_run1 = mysqli_query($connection, $query1);
        }

        if($query_run && $query_run1)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code']="success";
            header('Location: contactus.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code']="error";
            header('Location: contactus.php');
        }
    }
?>