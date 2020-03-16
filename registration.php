<?php include "header.php"; ?>
	<section>
		<div class="container py-5">
			<div class="row justify-content-center py-5">
				<div class="col-sm-8">
					<h1>Registration Here</h1>
					<form>
					  <div class="form-row py-3">
					    <div class="col-sm-6">
					      <input type="text" class="form-control" placeholder="First name">
					    </div>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" placeholder="Last name">
					    </div>
					    <div class="col-sm-12 py-3">
					      <input type="text" class="form-control" placeholder="Email Address">
					    </div>
					    <div class="col-sm-12 pb-3">
					      <input type="text" class="form-control" placeholder="type Username">
					    </div>
					    <div class="col-sm-6">
					      <input type="password" class="form-control" placeholder="Password">
					    </div>
					    <div class="col-sm-6">
					      <input type="password" class="form-control" placeholder="Re-Password">
					    </div>
					    <div class="col-sm-12 py-3">
					    	<strong>Select Language : &nbsp;&nbsp;</strong>				    	
					    	<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="Bangla" value="option1">
						  <label class="form-check-label" for="Bangla">Bangla</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="English" value="option2">
						  <label class="form-check-label" for="English">English</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="German" value="option3" >
						  <label class="form-check-label" for="German">German</label>
						</div>
					    </div>

					    <div class="col-sm-12">
					    	<strong>Select Gender : &nbsp;&nbsp;</strong>				    	
					    	<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" id="Male" name="Gender">
						  <label class="form-check-label" for="Male">Male</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" id="Female" name="Gender">
						  <label class="form-check-label" for="Female">Female</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" id="Others" name="Gender" >
						  <label class="form-check-label" for="Others">Other</label>
						</div>
					    </div>
					    <div class="col-sm-12 py-3">
					      <input type="date" class="form-control">
					    </div>
					    <div class="col-sm-5">
					      <input type="submit" class="btn btn-lg btn-primary rounded-pill px-5" value="Registration Now">
					    </div>
					    <div class="col-sm-6">
					      <input type="submit" class="btn btn-lg btn-primary rounded-pill px-5" value="Reset">
					    </div>
					  </div>
					</form>
				</div>		
			</div>
		</div>
	</section>
<?php include "footer.php"; ?>