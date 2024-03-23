<form method="post" action="<?= ROOT ?>/user/edit/<?= base64_encode($userdata->id) ?>">
    <input value="<?= $userdata->username ?>" name="username" placeholder="Username"><br>
    <div><?= $user->getError('username') ?></div><br>
    <input value="<?= $userdata->email ?>" name="email" placeholder="Email"><br>
    <div><?= $user->getError('email') ?></div><br>
    <input value="<?= $userdata->password ?>" name="password" type="password" placeholder="Password"><br>
    <div><?= $user->getError('password') ?></div><br>
    <button type="submit">Edit</button