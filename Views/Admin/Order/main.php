<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Order Management</title>
</head>
<body>
    <h1 align="center">Order List</h1>
    <a href="?controller=admin" class="btn btn-info">Home Page</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Buy Date</th>
      <th scope="col">Order Status</th>
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
        <td><?= $item['custname']; ?></td>
        <td><?= $item['phone']; ?></td>
        <td><?= $item['address']; ?></td>
        <td><?= $item['buydate']; ?></td>
        <td>
        <select>
            <option value="<?= $item['status'] = 1 ?>">Waiting for confirmation</option>
            <option value="<?= $item['status'] = 2 ?>">Order confirmed</option>
            <option value="<?= $item['status'] = 3 ?>">Shipping</option>
      </select>
        </td>
      <td><a onClick="confirm('This order will be delete and cannot be restore !')" href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=destroy&orderid=<?= $item['orderid']; ?>" class="btn btn-danger">Delete Order</a></td>
    </tr>
    <?php $stt++; } ?>
  </tbody>
</table>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>