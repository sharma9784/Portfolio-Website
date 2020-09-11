<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM skills_category WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Jayant</a>
    <span class="breadcrumb-item active">Edit Skill Category</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-center text-dark">
			<div>
				<h4 class="text-center pt-2">Edit Skill Category</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white mb-3 mx-auto">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Category Name</label>
			            <input type="text" name="name" class="form-control" placeholder="Enter category name" value="<?php echo $result['name']; ?>">
			          </div>
			          <button type="submit" name="submit" class="btn btn-info btn-block">Update Category</button>
			        </div>
			      </form>
			</div>
		</div>
    </div>

<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];

		$sql = "UPDATE skills_category SET name = '$name' WHERE id = '$id'";
		$run = mysqli_query($con,$sql);

		if ($run) {
			?>
			<script>
				swal('Update','update category!','success');
				window.open('skill-category.php','_self');
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

