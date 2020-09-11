<?php 
	include 'include/header.php';
	include 'include/dbcon.php';

	$sql =   "SELECT * FROM skills ORDER BY id desc";
	$run = mysqli_query($con,$sql);
	$count = 1;
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Jayant</a>
        <span class="breadcrumb-item active">Skills</span>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
          	<div class="sl-page-title">
          		<h5 class="card-body-title">All Skills <a href="new-skill.php" class="btn btn-sm btn-primary float-right">New Skill</a></h5>

				<table class="table table-sm table-stripped mt-5">
					<tr>
						<th>#</th>
						<th>Skill Name</th>
						<th>Category</th>
						<th>html</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)) { ?>
					
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['skill_category']; ?></td>
						<td style="font-size:25px"><?php echo $result['html']; ?></td>
						
						<td>
						<?php if ($result['status'] == 1) { ?>
							<span class="badge badge-success">active</span>
						<?php }else{ ?>
							<span class="badge badge-danger">deactive</span>
						<?php } ?>
						</td>
						<td>
							<a href="skill-edit.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
							<a href="skill-delete.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php } ?>
				</table>
           	</div>
    	</div>



<?php 
	include 'include/footer.php';
?>
