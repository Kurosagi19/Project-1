<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Product Management</title>
</head>
<body>
    <h1 align="center">Product List</h1>
    <a href="?controller=admin" class="btn btn-info">Home Page</a>
    <a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=create" class="btn btn-success mb-3">+ Add Product</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
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
      <td><?= $item['name']; ?></td>
      <td><?= number_format($item['price']); ?></td>
      <td><?= $item['quantity']; ?></td>
      <?php
      if($item['featured'] == 1) {
        echo '<td class="text-danger">Featured</td>';
      } else {
        echo '<td>Non-Featured</td>';
      }
      ?>
      <td><img src="Images/<?= $item['image'] ?>"></td>
      <td><a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=edit&id=<?= $item['id']; ?>" class="btn btn-info">Edit</a></td>
      <td><a onClick="confirm('Are you sure you want to delete this product ?')" href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=destroy&id=<?= $item['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php $stt++; } ?>
  </tbody>
</table>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>