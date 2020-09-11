<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM details WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Jayant</a>
    <span class="breadcrumb-item active">Edit Detail</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">Edit Detail</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
					<div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Name</label>
			          	
			            <input type="text" name="name" class="form-control" placeholder="Enter your client name" value="<?php echo $result['name']; ?>">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Text 1</label>
			          	
			            <textarea name="text1" class="form-control" id="" cols="30" rows="10" ><?php echo $result['text1']; ?></textarea>
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Text 2</label>
			          	
			            <textarea name="text2" class="form-control" id="" cols="30" rows="10" ><?php echo $result['text2']; ?></textarea>
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Text 3</label>
			          	
			            <textarea name="text3" class="form-control" id="" cols="30" rows="10" ><?php echo $result['text3']; ?></textarea>
			          </div>
			          <button type="submit" name="update" class="btn btn-info btn-block">Update Detail</button>
			        </div>
			    </form>
			</div>
		</div>
    </div>


<?php 
	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$text1 = $_POST['text1'];
		$text2 = $_POST['text2'];
		$text3 = $_POST['text3'];
		

		include 'include/dbcon.php';

			$sql = "UPDATE details SET name = '$name', text1 = '$text1', text2 = '$text2', text3 = '$text3' WHERE id = '$id'";
			$run = mysqli_query($con,$sql);
			if ($run) {
				?>
				<script>
					swal('Update Successfully','Detail updated!','success');
					window.open('detail.php','_self');
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

