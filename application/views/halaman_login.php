<?php defined("BASEPATH") or exit("No direct script access allowed"); ?>

<form action="<?php base_url('login/proses_login') ?>" method="post">
	<div class="form-group has-feedback">
		<input type="text" class="form-control" placeholder="Username atau Email"
			name="username" required id="username" />
		<span class="glyphicon glyphicon-user form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<input type="password" class="form-control" placeholder="Password"
			name="password" required />
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	</div>
	<div class="row">
		<div class="col-xs-8">
			<div class="checkbox icheck">
				<label>
					<input type="checkbox" /> Ingat Saya
				</label>
			</div>
		</div>
		<!-- /.col -->
		
		<div class="col-xs-4">
			<button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
		</div>
		<!-- /.col -->
	</div>
</form>