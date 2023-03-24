<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="ckeditor/ckeditor.js"></script>
    <!-- <style>

    </style> -->
    <title>Edit Product</title>
</head>
<body>
    <h1 align="center">Edit Product</h1>
    <div class="container">
        <?php foreach($record as $item) { ?>
    <form method="post" enctype="multipart/form-data" action="?controller=product&action=edit">
    <div class="mb-3">
        <label for="name" class="form-label">Product name: </label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Product price: </label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Product quantity: </label>
        <input type="text" class="form-control" id="quantity" name="quantity">
    </div>
    <div>
        <label for="image" class="form-label">Product image: </label>
        <input type="file" class="form-control" id="image" name="image">
        <img src="Images/<?= $item['image'] ?>">
    </div>
    <div class="mb-3 form-check">
        <label class="form-label" for="featured">Featured</label>
        <input type="checkbox" id="featured" name="featured" <?php if($item['featured'] == 1) { echo ''; } else { echo 'Not checked';} ?>>
    </div>
    <div>
    <label for="description" class="form-label">Product description: </label>
    <textarea name="description" id="description" cols="150" rows="10"></textarea>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </form>
    <?php $stt++; } ?>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
<script>CKEDITOR.replace('description')</script>
</html>