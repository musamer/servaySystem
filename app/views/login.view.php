<h1>Login page view</h1>
<form method="post">

	<input value="<?= old_value('email') ?>" name="email" type="email" placeHolder="Email"><br>
	<div><?= $user->getError('email') ?></div><br>
	<input value="<?= old_value('password') ?>" name="password" type="password" placeHolder="Password"><br>
	<div><?= $user->getError('password') ?></div><br>
	<button>Login</button>
</form>