<?php include "header.php"; ?>
<?php include "db.php"?>
	<section>
		<div class="container py-5">
			<div class="row justify-content-center py-5">
				<div class="col-sm-5">
					<h1 class="text-center">LogIn Here</h1>
					<form>
					  <div class="form-row py-3">
					    <div class="col-sm-12 pb-3">
					      <input type="text" class="form-control" placeholder="type Username">
					    </div>
					    <div class="col-sm-12">
					      <input type="password" class="form-control" placeholder="Password">
					    </div>
					    <div class="col-sm-3 py-3">
					      <input type="submit" class="btn btn-lg btn-success rounded-pill px-5" value="LogIn">
					    </div>
					  </div>
					</form>
				</div>		
			</div>
		</div>
	</section>


	<div class="container py-5">
		<table class="table table-border">
		<tr>
			<th>Si</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
		<?php
			$MyQuery = "SELECT * FROM user";
			$Data = mysqli_query($conn , $MyQuery);

			while($userData = mysqli_fetch_assoc($Data)){

				$ID = $userData['ID'];
				$Name = $userData['Name'];
				$Email = $userData['Email'];
				$Phone = $userData['Phone'];
				?>

		<tr>
			<td><?php echo $ID; ?></td>
			<th><?php echo $Name; ?></th>
			<th><?php echo $Email; ?></th>
			<th><?php echo $Phone; ?></th>
		</tr>

	<?php	}?>

	</table>
	</div>
	
<?php include "footer.php"; ?>