<?php
include 'header.php';
?>

<!-- login -->
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Login</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-10">
				<div class="wrap d-md-flex">
					<div class="img" style="background-image: url(images/bg-1.jpg);">
					</div>
					<div class="login-wrap p-4 p-md-5">
						<div class="d-flex">
							<div class="w-100">
								<h3 class="mb-4">Sign In</h3>
							</div>
							<div class="w-100">
								<p class="social-media d-flex justify-content-end">
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
								</p>
							</div>
						</div>
						<form action="../koneksi/proses.php?id=login" class="signin-form" method="post">
							<div class="form-group mb-3">
								<label class="label" for="name">Username</label>
								<input type="text" class="form-control" placeholder="Username" required name="user">
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">Password</label>
								<input type="password" class="form-control" placeholder="Password" required name="pass">
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn bg-success rounded submit px-3 text-white">Sign In</button>

							</div>

						</form>
						<a href="../index.php" class="btn btn-danger fa fa-chevron-left"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include 'footer.php';
?>