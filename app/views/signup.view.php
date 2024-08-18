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
					<h6>اضافة مستخدم</h6>
					<form method="post">

						<input class="form-control" value="<?= old_value('username') ?>" name="username" placeHolder="اسم المستخدم"><br>
						<div><?= $user->getError('username') ?></div><br>
						<input class="form-control" value="<?= old_value('password') ?>" name="password" placeHolder="كلمة المرور" type="password"><br>
						<div><?= $user->getError('password') ?></div><br>
						<input class="form-control" value="<?= old_value('name') ?>" name="name" placeHolder="الأسم"><br>
						<div><?= $user->getError('name') ?></div><br>
						<input class="form-control" value="<?= old_value('email') ?>" name="email" placeHolder="البريد الإلكتروني"><br>
						<div><?= $user->getError('email') ?></div><br>
						<button class="btn btn-primary form-control">حـــفــظ</button>
					</form>

				</div>
				<!-- /Register -->
			</div>
		</div>
	</div>
</div>