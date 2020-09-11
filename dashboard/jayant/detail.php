<?php 
	include 'include/header.php';
	include 'include/dbcon.php';

	$sql =   "SELECT * FROM details";
	$run = mysqli_query($con,$sql);
	$count = 1;
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Jayant</a>
        <span class="breadcrumb-item active">Details</span>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
          	<div class="sl-page-title">
          		<h5 class="card-body-title">All Details <a href="detail-new.php" class="btn btn-sm btn-primary float-right">New Detail</a></h5>

				<table class="table table-sm table-stripped table-bordered mt-5">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>text1</th>
						<th>text2</th>
						<th>text3</th>						
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)) { ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['text1']; ?></td>
						<td><?php echo $result['text2']; ?></td>
						<td><?php echo $result['text3']; ?></td>
						
						<td>
							<a href="detail-edit.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
							<a href="detail-delete.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php } ?>
				</table>
           	</div>
    	</div>



<?php 
	include 'include/footer.php';
?>
