<table border="1">
    <thead>
        <tr>
            <th>ID</th>
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
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td>
                    <form method="post" action="<?= ROOT ?>/user/change-role/<?= base64_encode($user->id) ?>">
                        <select name="role">
                            <option value="1" <?= ($user->role == 1) ? 'selected' : '' ?>>User</option>
                            <option value="2" <?= ($user->role == 2) ? 'selected' : '' ?>>Supervisor</option>
                            <option value="9" <?= ($user->role == 9) ? 'selected' : '' ?>>Admin</option>
                        </select>
                        <button type="submit">Change Role</button>
                    </form>
                </td>
                <td><?= $user->status ?></td>
                <td>
                    <form action="<?= ROOT ?>/user/edit/<?= base64_encode($user->id) ?>"><button type="submit">Edit</button></form>
                    <a href="<?= ROOT ?>/user/restore/<?= base64_encode($user->id) ?>"><button>Restore</button></a>
                    <a href="<?=ROOT?>/user/add"><button>Add</button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">No users found.</td>
        </tr>
    <?php endif; ?>
</tbody>
</table>
