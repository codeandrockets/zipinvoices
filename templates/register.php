<?php include('includes/header.php'); ?>
	<form role="form" enctype="multipart/form-data" method="post" action="register.php">
		<div class="form-group">
			<label>Name*</label> <input type="text" class="form-control"
				name="name" placeholder="Enter Your Name">
		</div>
		<div class="form-group">
			<label>Email Address*</label> <input type="email" class="form-control"
				name="email" placeholder="Enter Your Email Address">
		</div>
		<div class="form-group">
			<label>Choose Username*</label> <input type="text"
				class="form-control" name="username" placeholder="Create A Username" id="username">
			</div>
		<div class="form-group">
			<label>Password*</label> <input type="password" class="form-control"
				name="password" placeholder="Enter A Password">
				</div>
				<div class="form-group">
		<label>Confirm Password*</label> <input type="password"
			class="form-control" name="password2"
			placeholder="Enter Password Again">
			</div>
<!-- 				<div class="form-group">
					<label>Upload Logo</label>
				<input type="file" name="avatar">
				<p class="help-block"></p>
					</div> -->
			<input name="register" type="submit" class="btn btn-default" value="Register" />
</form>
<?php include('includes/footer.php'); ?>
