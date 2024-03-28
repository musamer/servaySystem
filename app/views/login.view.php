<div class="container-xxl">
	<div class="authentication-wrapper authentication-basic container-p-y">
		<div class="authentication-inner">
			<!-- Register -->
			<div class="card">
				<div class="card-body">
					<!-- Logo -->
					<div class="app-brand justify-content-center">
						<a href="index.html" class="app-brand-link gap-2">
							<span class="app-brand-logo demo">
								<img src="<?= ROOT ?>/assets/images/logo.png" alt="logo" width="100px">
							</span>
						</a>
					</div>
					<!-- /Logo -->
					<h6>الدخول إلى النظام</h6>
					<form id="formAuthentication" class="mb-3" method="POST">
						<?= $user->getError('username') ?>
						<div class="mb-3">
							<label for="email" class="form-label">البريد الإلكتروني</label>
							<input id="email" class="form-control" value="<?= old_value('email') ?>" name="email" placeHolder="البريد الإلكتروني" type="text" autofocus autocomplete="disabled" />

						</div>
						<div class="mb-3 form-password-toggle">
							<div class="d-flex justify-content-between">
								<label class="form-label" for="password">كلمة المرور</label>
								<div><?= $user->getError('password') ?></div>
								<!-- <a href="auth-forgot-password-basic.html">
									<small>Forgot Password?</small>
								</a> -->
							</div>
							<div class="input-group input-group-merge">
								<input id="password" class="form-control" aria-describedby="password" value="<?= old_value('password') ?>" name="password" placeHolder="كلمة المرور" type="password" />
								<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
							</div>
						</div>
						<!-- <div class="mb-3">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="remember-me" />
								<label class="form-check-label" for="remember-me">تذكر </label>
							</div>
						</div> -->
						<div class="mb-3">
							<button class="btn btn-primary d-grid w-100" type="submit">دخول</button>
						</div>
					</form>

					<!-- <p class="text-center">
						<span>New on our platform?</span>
						<a href="auth-register-basic.html">
							<span>Create an account</span>
						</a>
					</p> -->
				</div>
			</div>
			<!-- /Register -->
		</div>
	</div>
</div>