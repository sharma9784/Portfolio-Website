<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM skills WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Jayant</a>
    <span class="breadcrumb-item active">Edit Skill</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">Edit <?php echo $result['name']; ?> Skill</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper pd-25 pd-xs-40 bg-white">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Skill Name</label>
			            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>" placeholder="Enter your Skill name">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Skill Category</label>
			            <select name="skill_category" id="" class="form-control">
		            	<?php 
		            		$sql = "SELECT * FROM skills_category";
		            		$run = mysqli_query($con,$sql);
		            		while($result2 = mysqli_fetch_assoc($run)) {
		            	 ?>
			            	<option value="<?php echo $result2['name']; ?>" <?php if($result['skill_category'] == $result2['name']) { echo "selected"; } ?>><?php echo $result2['name']; ?></option>
			            <?php } ?>
			            </select>
                      </div>
                      <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">HTML</label>
			            <input type="text" name="html" class="form-control" value='<?php echo $result['html']; ?>' >
			          </div>
			       
			          <button type="submit" name="submit" class="btn btn-info btn-block">Update Skill</button>
			        </div>
			    </form>
			</div>
		</div>
    </div>

<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$category = $_POST['skill_category'];
		$html = $_POST['html'];
		

		include 'include/dbcon.php';

	
			$sql = "UPDATE skills SET name = '$name', skill_category = '$category', html='$html' WHERE id = '$id'";
			$run = mysqli_query($con,$sql);
			if ($run) {
				?>
				<script>
					swal('Update Successful','skill information updated!','success');
					window.open('skill.php','_self');
				</script>
				<?php
			}else{
				?>
				<script>
					swal('Failed','something went wrong!','error');
				</script>
				<?php
			}

		
		}	
	
	include 'include/footer.php';
?>

