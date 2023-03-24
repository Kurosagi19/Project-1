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

<a href="?controller=admin" class="btn btn-info">Home Page</a>
<div><a class="btn btn-success m-5" href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=create">+ Add User</a></div>

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
      <td><a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=edit&id=<?= $item['id'] ?>" class="btn btn-info mr-2">Edit</a></td>
      <td><a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=destroy&id=<?= $item['id'] ?>" class="btn btn-danger mr-2">Delete</a></td>
    </tr>
    <?php
    $stt++;
        }
    ?>
  </tbody>
</table>
  
</body>
</html>