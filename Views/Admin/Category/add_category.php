<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <script src="ckeditor/ckeditor.js"></script> -->
    <title>Add Category</title>
</head>
<body>
    <h1 align="center">Add Category</h1>
    <div class="container">
    <form method="post" enctype="multipart/form-data" action="?controller=category&action=store">
    <div class="mb-3">
        <label for="name" class="form-label">Category name: </label>
        <input type="text" class="form-control" id="catname" name="catname">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </form>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
<!-- <script>CKEDITOR.replace('description')</script> -->
</html>