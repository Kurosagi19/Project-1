<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Main</title>
</head>
<body>

<div><a class="btn btn-success mt-5" href="?controller=<?= $controller ?>&action=create">+ Add User</a></div>
<div><a class="btn btn-info mt-5" href="?controller=<?= $controller ?>&action=logout">Logout</a></div>

<h1 align="center">User List</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Fullname</th>
      <th scope="col" colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
        $stt = 1;
        foreach($record as $item) {
        ?>
    </tr>
    <tr>
      <th scope="row"><?= $stt ?></th>
      <td><?= $item['username'] ?></td>
      <td><?= $item['fullname'] ?></td>
      <td><a href="?controller=<?= $controller ?>=edit&id=<?=$item['id'] ?>" class="btn btn-info">Edit</a></td>
      <td><a href="?controller=<?= $controller ?>=del&id=<?=$item['id'] ?>" class="btn btn-danger">Delete</a></td>
      <!-- <td><a href="?controller=<?= $controller ?>=res&id=<?=$item['id'] ?>" class="btn btn-warning">Reset</a></td> -->
    </tr>
    <?php
    $stt++;
        }
    ?>
  </tbody>
</table>
  
</body>
</html>