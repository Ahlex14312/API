
<!doctype html>
<html lang="en">
<head>
<title>Users | Account</title>
    <link rel="icon" href="./images/logo.png" >
	<meta charset="utf-8">
    <!-- css -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="src/style.css">
</head>
<!-- background -->
<body style=" background-image: linear-gradient(to right, rgba(253, 231, 170, 0.467), rgb(243, 172, 19));">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(https://images.pexels.com/photos/269077/pexels-photo-269077.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Add Account</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
                            <!-- signin form -->
                            <form action="http://192.168.0.27:8081/Sd204-Elsa/insert.php" method="post">
                                <label>Choose Database Name</label><br>
                                <select class="btn btn-primary dropdown-toggle" name="showOption"
                            aria-label=".form-select-lg example">
                            <option value="1">accounts</option>
                            <option value="2">dummy accounts</option>
                         </select>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="invalid-feedback"></span>
            </div>
						<div class="form-group">
									<button name="submit" type="submit" class="form-control btn btn-primary rounded submit px-3">Save Account</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>