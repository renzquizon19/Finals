<?php
require_once ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>

<div>
	<?php
	
	?>
</div>
<div>
	<form action="registration.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 center">
					<h2>Registration Form | PHP</h2>
					<p>Please fill up the form</p>
					<hr class="mb-3">
					<label for="name"><b>Name</b></label>
					<input class="form-control" id="name" type="text" name="name" required>

					<label for="username"><b>Username</b></label>
					<input class="form-control" id="username" type="text" name="username" required>
			
					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password" type="password" name="password" required><br>
					<hr class="mb-3">
					<input class="btn btn-secondary" type="submit" id="register" name="create" value="Sign Up">
					<a href="login.php" class="btn btn-secondary">Go Back</a>
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(){

			var valid = this.form.checkValidity();
			if(valid){

			var name 		= $().val('#name');
			var username 	= $().val('#username');
			var password 	= $().val('#password');

				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name: name, username:username, password:password}
					success: function(data){
							Swal.fire({
							'title': 'Successful',
							'text': data,
							'type': 'success'
						})
					},
					error: function(data){
							Swal.fire({
								'title': 'Errors',
								'text': 'Failed Registered!',
								'type': 'error'
						})
					}
				});
			}else{
				
			}
		});
	});
</script>
</body>
</html>