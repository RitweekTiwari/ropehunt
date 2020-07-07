<?php include('layout/header.php'); ?>

	<!-- Content
	================================================== -->

	<div class="wrapper  pa-0">
		<header class="sp-header">
			<div class="sp-logo-wrap pull-left">
				<a href="index.html">
					<img class="brand-img mr-10" src="<?php echo base_url('optimum') ?>/img/logo.png" alt="brand"/>
					<span class="brand-text">Snoopy</span>
				</a>
			</div>
			<div class="form-group mb-0 pull-right">
				<span class="inline-block pr-10">Don't have an account?</span>
				<a class="inline-block btn btn-warning  btn-rounded btn-outline" href="<?php echo base_url('join'); ?>">Sign Up</a>
			</div>
			<div class="clearfix"></div>
		</header>

		<!-- Main Content -->
		<div class="page-wrapper pa-0 ma-0 auth-page">
			<div class="container-fluid">
				<!-- Row -->
				<div class="table-struct full-width full-height">
					<div class="table-cell vertical-align-middle auth-form-wrap">
						<div class="auth-form  ml-auto mr-auto no-float">
							<?php if ($this->session->flashdata()): ?>
								<div class="alert alert-danger alert-mg-b">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<strong>Failed!</strong> <?php echo $this->session->flashdata('failed') ?>.
								</div>
							<?php endif; ?>
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="mb-30">
										<h3 class="text-center txt-dark mb-10">Sign in to Snoopy</h3>
										<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
									</div>
									<div class="form-wrap">
										<form action="<?php echo base_url('authentication')?>" method="post">
											<div class="form-group">
												<label class="control-label mb-10" for="exampleInputEmail_2">Email / Phone</label>
												<input type="text" class="form-control" required="" name="username" id="username" placeholder="email or phone">
											</div>
											<div class="form-group">
												<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
												<a class="capitalize-font txt-orange block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
												<div class="clearfix"></div>
												<input type="password" class="form-control" required="" name="password" id="password" placeholder="**************">
											</div>

											<div class="form-group">
												<div class="checkbox checkbox-primary pr-10 pull-left">
													<input id="checkbox_2" required="" type="checkbox">
													<label for="checkbox_2"> Keep me logged in</label>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group text-center">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
												<button type="submit" class="btn btn-warning  btn-rounded">sign in</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>

		</div>
		<!-- /Main Content -->

	</div>
	<!-- /#wrapper -->


	<div class="text-center login-footer">
		<p>Copyright © <?php echo date("Y"); ?>. All rights reserved. Develeped By <a href="https://rectorsol.com/">RectorSol</a></p>
	</div>
	<?php include('layout/footer.php'); ?>
