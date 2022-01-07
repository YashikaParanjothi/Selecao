<?php 
$page = "forum";
include('../admin/security.php');
include('../includes/header.php');
include('../includes/Navbar.php');
?>
    <section class="forum">
<div class="container forum">
	<div class="file_upload drag-area">
  <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
		<form action="file_upload.php" class="dropzone border-0">
			<div class="dz-message needsclick">
				<strong>Drop files here or click to upload.</strong><br />
        <spna>OR</span><br/>
				<span class="note needsclick">Browse File</span>
			</div>
		</form>		
	</div>
</div>
    </section>

<?php 
include('../includes/footer.php');
include('../includes/scripts.php');
?>
