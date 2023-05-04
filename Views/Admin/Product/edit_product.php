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
        <?php
        foreach($record as $item) {
        ?>
        <form method="post" enctype="multipart/form-data" action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=update">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">
        <div class="mb-3">
        <label for="name" class="form-label">Product name: </label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $item['name'] ?>">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Product price: </label>
        <input type="text" class="form-control" id="price" name="price" value="<?= $item['price'] ?>">
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Product quantity: </label>
        <input type="text" class="form-control" id="quantity" name="quantity" value="<?= $item['quantity'] ?>">
    </div>
    <div>
        <label for="image" class="form-label">Product image: </label>
        <input type="file" class="form-control" id="image" name="image">
        <img width="200" height="200" src="Images/<?= $item['image'] ?>">
    </div>
    <div>
        <label for="catid" class="form-label">Category: </label>
        <input type="text" class="form-control" id="catid" name="catid" value="<?= $item['catid'] ?>">
    </div>
    <div class="mb-3 form-check">
        <label class="form-label" for="featured">Featured</label>
        <input type="checkbox" id="featured" name="featured" <?php if($item['featured'] == 1) { echo ''; } else { echo 'Not checked';} ?>>
    </div>
    <div>
    <label for="description" class="form-label">Product description: </label>
    <textarea name="description" id="description" cols="150" rows="10"><?= $item['description'] ?></textarea>
    </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <button type="back" class="btn btn-warning"><a href="?controller=admin&redirect=product">Go Back</a></button>
    </form>
    <?php
        }
    ?>
</div>
</body>
<script>CKEDITOR.replace('description')</script>
</html>