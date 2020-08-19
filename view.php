<?php
session_start();
if (!isset($_SESSION['userData'])) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login & Registration with google using Php </title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<Section>
		<br>
		<div class="container">
			<div class="col">
				<h4>Name: <?= $_SESSION['userData']['f_name'] . " " . $_SESSION['userData']['l_name'] ?></h4>
				<h4>Mail id: <?= $_SESSION['userData']['email_id'] ?></h4>
				<Form action="logout.php" method="post">
					<button class="btn btn-light" type="submit">Logout</button>
				</Form>
			</div>
		</div>
		<!-- <img src="<?= $_SESSION['userData']['picture'] ?>" class="profile_pic"> -->
		


	</Section>

	
	<section class="content content--related">

		<h3 style="text-align: center;">Products Page</h3>

		<br>
		<div class="container-fluid">
			<div class="row">
				<?php
				for ($i = 0; $i < 3; $i++) { ?>
					<div class="col-sm" style="margin-bottom: 50px;">
						<div class="card mx-auto" style="width: 18rem;">
							<img class="card-img-top" src="https://imgix.bustle.com/uploads/shutterstock/2019/9/25/ea45e4b6-e786-4e8f-b5ca-a3dc2b742c98-shutterstock-1366412384.jpg?w=800&auto=format%2Ccompress&cs=srgb&q=70&fit=crop&crop=faces" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Denim Jeans</h5>
								<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								<a href="#" class="btn btn-primary">Add to Cart</a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>
</body>

</html>