<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Category Management</title>
</head>
<body>
    <a href="?controller=admin" class="btn btn-info">Home Page</a>
    <h1 align="center">Category List</h1>
    <a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=create" class="btn btn-success mb-3">+ Add Category</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
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
      <td><?= $item['catname']; ?></td>
      <td><a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=edit&catid=<?= $item['catid'] ?>" class="btn btn-info">Edit</a></td>
      <td><a onClick="confirm('Are you sure you want delete this category ? Every product in this category will also be deleted !')" href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=delete&catid=<?= $item['catid'] ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php $stt++; } ?>
  </tbody>
</table>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>