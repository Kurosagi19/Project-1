<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Add User</title>
</head>
<body>

<div class="container">
  <form method="post" action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=store">
    <?php if(isset($errorr)) { echo $errorr; } ?>
    <h1 align="center">Add User</h1>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Username..." required>
  </div>
  <div class="mb-3">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Fullname..." required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password..."required>
  </div>
  <div class="mb-3">
    <label for="repassword" class="form-label">Re-Password</label>
    <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Re-Password..." required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
</form>
</div>
  
</body>
</html>