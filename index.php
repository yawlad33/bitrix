<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class='container col-4'>

        

        <form method='post' action='add_lead.php'>
        <h2>Добавить сделку</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название сделки</label>
                <input type="text" class="form-control" name='title'>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Сумма сделки</label>
                <input type="number" class="form-control" name='amount'>
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>

        <form method='post' action='get_lead.php'>
        <h2>Удалить сделку по ID</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID сделки</label>
                <input type="number" class="form-control" name='deal_id'>
            </div>

            <button type="submit" class="btn btn-primary">Удалить</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>