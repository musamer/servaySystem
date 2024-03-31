<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .bg-custom-beige {
      background-color: #F5F5DC; /* Beige color */
    }
  </style>
</head>
<body class="bg-custom-beige">

<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-bordered">
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
                    <select name="role" class="form-select">
                      <option value="1" <?= ($user->role == 1) ? 'selected' : '' ?>>User</option>
                      <option value="2" <?= ($user->role == 2) ? 'selected' : '' ?>>Supervisor</option>
                      <option value="9" <?= ($user->role == 9) ? 'selected' : '' ?>>Admin</option>
                    </select>
                    <button type="submit" class="btn btn-warning mt-2">Change Role</button>
                  </form>
                </td>
                <td>
                  <form method="post" action="<?= ROOT ?>/user/status/<?= base64_encode($user->id) ?>">
                    <select name="status" class="form-select">
                      <option value="active" <?= ($user->status === 'active') ? 'selected' : '' ?>>Active</option>
                      <option value="inactive" <?= ($user->status === 'inactive') ? 'selected' : '' ?>>Inactive</option>
                      <option value="banned" <?= ($user->status === 'banned') ? 'selected' : '' ?>>Banned</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-2">Set User Status</button>
                  </form>
                </td>
                <td>
                  <a href="<?= ROOT ?>/user/edit/<?= base64_encode($user->id) ?>" class="btn btn-success mt-2" role="button">Edit</a>
                  <a href="<?= ROOT ?>/user/delete/<?= base64_encode($user->id) ?>" class="btn btn-danger mt-2" role="button">Delete</a>
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
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <a href="<?= ROOT ?>/user/banned" class="btn btn-info mt-2">Show Banned Users</a>
      <a href="<?= ROOT ?>/user/deleted" class="btn btn-info mt-2">Show Deleted Users</a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
