<!DOCTYPE html>

<html>

	<head>
		<?php $this->load->view("admin/_partials/head.php") ?>
	</head>
	
	<body>
		
		<div class="container">
			<h1><center>Daftar</center></h1>
			<form action="<?php echo site_url('signup') ?>" method="post" class="form-signin">
				<?php echo validation_errors() ?>
				<p class="text-danger"><?php echo $this->session->flashdata("error") ?></p>
				<div class="form-group has-feedback">
					<label for="email" class="labelfrm">Email</label>
					<p class="text-danger"><?php echo $this->session->flashdata("erroremail") ?></p>
					<p class="text-danger"><?php echo form_error("email") ?></p>
					<input type="text" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>"
						class="form-control required" />
				</div>
				
				<div class="form-group has-feedback">
					<label for="password" class="labelfrm">Password</label>
					<p class="text-danger"><?php echo form_error("password") ?></p>
					<input type="password" name="password" id="password" placeholder="Password" value="<?php echo set_value("password") ?>"
						class="form-control required" />
				</div>
				
				<div class="checkbox">
					<label>
					</label>
				</div>
				<button class="btn btn-info btn-block" type="submit" name="daftar">Daftar</button>
			</form>
			<h5><p class="text-center">atau</p></h5>
			<p class="text-center"><a href="<?php echo site_url("login") ?>" class="btn btn-md btn-success">Login</a></p><br><br>
			<p class="text-center">ESTIGA.NET &copy; <?php echo date("Y") ?></p>
		</div>
		
	</body>
	
</html>