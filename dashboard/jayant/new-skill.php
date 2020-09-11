<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Jayant</a>
    <span class="breadcrumb-item active">New Skill</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">New Skill</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper pd-25 pd-xs-40 bg-white">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Skill Name</label>
			            <input type="text" name="name" class="form-control" placeholder="Enter your skill name">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Skill Category</label>
			            <select name="skill_category" id="" class="form-control">
		            	<?php 
		            		$sql = "SELECT * FROM skills_category";
		            		$run = mysqli_query($con,$sql);
		            		while($result = mysqli_fetch_assoc($run)) {
		            	 ?>
			            	<option value="<?php echo $result['name']; ?>"><?php echo $result['name']; ?></option>
			            <?php } ?>
			            </select>
                      </div>
                      <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">html </label>
			            <input type="text" name="html" class="form-control" placeholder="devicon html tag">
			          </div>
			          
			          <input type="hidden" name="status" value="1">
			          <button type="submit" name="submit" class="btn btn-info btn-block">Upload Project Portfolio</button>
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
	
		$status = $_POST['status'];
		

		include 'include/dbcon.php';

			$sql = "INSERT INTO skills (name,skill_category,html,status) VALUES ('$name','$category','$html','$status')";
			$run = mysqli_query($con,$sql);

			if ($run) {
				?>
				<script>
					swal('Upload Successful','A new skill uploaded just now!','success');
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

