<form method="post" action="<?= ROOT ?>/user/add">
    <input value="<?= old_value('username') ?>" name="username" placeholder="Username"><br>
    <div><?= $user->getError('username') ?></div><br>
    <input value="<?= old_value('email') ?>" name="email" placeholder="Email"><br>
    <div><?= $user->getError('email') ?></div><br>
    <input value="<?= old_value('password') ?>" name="password" type="password" placeholder="Password"><br>
    <div><?= $user->getError('password') ?></div><br>
    <button type="submit">Add User</button>
</form>