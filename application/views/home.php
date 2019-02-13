<!DOCTYPE html>

<html>

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

	<div class="container">
		<h1><center>Home</center></h1>
		<p class="text-center"><a href="<?php echo site_url("logout") ?>" class="btn btn-md btn-danger">Logout</a></p><br><br>
		<h2>Email: <?php echo $this->session->userdata("email") ?></h2>
	</div>

</body>

</html>