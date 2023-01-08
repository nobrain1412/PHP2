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
        <form action="?ctr=addCar" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">car name</label>
                <input type="text" class="form-control" name="carName" placeholder="">
            </div>
            <div class="form-group">
                <label for="">image</label>
                <input type="file" class="form-control" name="image" placeholder="">
            </div>
            <div class="form-group">
                <label for="">price</label>
                <input type="text" class="form-control" name="price" placeholder="">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" name="description" placeholder="">
            </div>
            <div class="form-group">
                <label for="">version</label>
                <input type="text" class="form-control" name="version" placeholder="">
            </div>
            <div class="form-group">
                <label for="">gear</label>
                <input type="text" class="form-control" name="gear" placeholder="">
            </div>
            <div class="form-group">
                <label for="">origin</label>
                <input type="text" class="form-control" name="origin" placeholder="">
            </div>

            <button type="submit" name="btnAdd" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <section>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">car name</th>
                    <th scope="col">image</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">version</th>
                    <th scope="col">gear</th>
                    <th scope="col">origin</th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>

                <?php foreach ($cars as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td><?= $item['carName']?></td>
                        <td><img src="images/<?= $item['image']?>" width="200px" height="200px" alt=""></td>
                        <td><?= $item['price']?></td>
                        <td><?= $item['description']?></td>
                        <td><?= $item['version']?></td>
                        <td><?= $item['gear']?></td>
                        <td><?= $item['origin']?></td>
                        <td>
                            <button class="btn btn-primary"><a style="text-decoration: none; color: white" href="?ctr=getCarById&id=<?= $item['id']?>">edit</a></button>
                            <button class="btn btn-danger"><a style="text-decoration: none; color: white" href="?ctr=deleteCar&id=<?= $item['id']?>">delete</a></button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
    </div>
</body>

</html>