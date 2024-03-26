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
    <?php if (!empty($bannedUsers)) : ?>
        <?php foreach ($bannedUsers as $user) : ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->role ?></td>
                <td><?= $user->status ?></td>
                <!-- Additional action buttons if needed -->
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">No banned users found.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
