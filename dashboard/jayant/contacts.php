<?php 
	include 'include/header.php';
	include 'include/dbcon.php';

	$sql =   "SELECT * FROM contact";
	$run = mysqli_query($con,$sql);
	$count = 1;
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Jayant</a>
        <span class="breadcrumb-item active">Contacts</span>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
          	<div class="sl-page-title">
          		<h5 class="card-body-title">All Contacts</h5>

				<table class="table table-sm table-stripped mt-5">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Message</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)) { ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['email']; ?></td>
						<td><?php echo $result['mobile']; ?></td>
						<td><?php echo $result['message']; ?></td>
						<td><?php echo $result['date']; ?></td>
						
						<td>
							<a href="contacts-delete.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php } ?>
				</table>
           	</div>
    	</div>



<?php 
	include 'include/footer.php';
?>
