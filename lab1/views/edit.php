<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <section>
    <?php foreach ($car as $item): ?>
        <form action="?ctr=editCar" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">car name</label>
                <input type="text" class="form-control" name="carName" value="<?= $item['carName']?>">
            </div>
            <div class="form-group">
                <label for="">price</label>
                <input type="text" class="form-control" name="price" value="<?= $item['price']?>">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" name="description" value="<?= $item['description']?>">
            </div>
            <div class="form-group">
                <label for="">version</label>
                <input type="text" class="form-control" name="version" value="<?= $item['version']?>">
            </div>
            <div class="form-group">
                <label for="">gear</label>
                <input type="text" class="form-control" name="gear" value="<?= $item['gear']?>">
            </div>
            <div class="form-group">
                <label for="">origin</label>
                <input type="text" class="form-control" name="origin" value="<?= $item['origin']?>">
            </div>

            <button type="submit" name="btnAdd" class="btn btn-primary"><a style="text-decoration: none; color: white" href="?ctr=editCar&id=<?= $item['id']?>">delete</a></button>
        </form>
        <?php endforeach ?>
    </section>
    
    </div>
</body>

</html>