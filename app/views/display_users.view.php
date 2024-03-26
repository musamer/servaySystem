<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Avatar</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($users)) : ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td>
                        <?php if (!empty($user->avatar)) : ?>
                            <img src="<?= $user->avatar ?>" alt="Avatar" width="50" height="50">
                        <?php else : ?>
                            No Avatar
                        <?php endif; ?>
                    </td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                        <form method="post" action="<?= ROOT ?>/user/changeRole/<?= base64_encode($user->id) ?>">
                            <select name="role">
                                <option value="1" <?= ($user->role == 1) ? 'selected' : '' ?>>User</option>
                                <option value="2" <?= ($user->role == 2) ? 'selected' : '' ?>>Supervisor</option>
                                <option value="9" <?= ($user->role == 9) ? 'selected' : '' ?>>Admin</option>
                            </select>
                            <button type="submit">Change Role</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="<?= ROOT ?>/user/status/<?= base64_encode($user->id) ?>">
                            <select name="status">
                                <option value="active" <?= ($user->status === 'active') ? 'selected' : '' ?>>Active</option>
                                <option value="inactive" <?= ($user->status === 'inactive') ? 'selected' : '' ?>>Inactive</option>
                                <option value="banned" <?= ($user->status === 'banned') ? 'selected' : '' ?>>Banned</option>
                            </select>
                            <button type="submit">Set User Status</button>
                        </form>
                    </td>
                    <td>
                        <form action="<?= ROOT ?>/user/edit/<?= base64_encode($user->id) ?>"><button type="submit">Edit</button></form>
                        <a href="<?= ROOT ?>/user/delete/<?= base64_encode($user->id) ?>"><button>Delete</button></a>
                        <a href="<?= ROOT ?>/user/add"><button>Add</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="7">No users found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<a href="<?= ROOT ?>/user/banned"><button>Show Banned Users</button></a>
<a href="<?= ROOT ?>/user/deleted"><button>Show Deleted Users</button></a>
