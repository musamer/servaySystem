<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .custom-bg-beige {
      background-color: #f5f5dc; /* Beige color */
    }
  </style>
</head>
<body class="custom-bg-beige">

<div class="container">
  <table class="table table-bordered">
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
                <select name="role" class="form-select">
                  <option value="1" <?= ($user->role == 1) ? 'selected' : '' ?>>User</option>
                  <option value="2" <?= ($user->role == 2) ? 'selected' : '' ?>>Supervisor</option>
                  <option value="9" <?= ($user->role == 9) ? 'selected' : '' ?>>Admin</option>
                </select>
                <button type="submit" class="btn btn-warning mt-2">Change Role</button>
              </form>
            </td>
            <td><?= $user->status ?></td>
            <td>
              <form action="<?= ROOT ?>/user/edit/<?= base64_encode($user->id) ?>">
                <button type="submit" class="btn btn-success">Edit</button>
              </form>
              <a href="<?= ROOT ?>/user/restore/<?= base64_encode($user->id) ?>" class="btn btn-info" role="button">Restore</a>
              <a href="<?= ROOT ?>/user/add" class="btn btn-primary" role="button">Add</a>
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
