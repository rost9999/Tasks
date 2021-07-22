<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Привет мир!</title>
</head>
<body>
<form action="./src/action.php" method="post">
    <div class="container">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="textarea" name="text" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php
$data = ($_POST);

function create($data)
{
    $db = new PDO('mysql:host=localhost;dbname=task3', 'root', 'qwer1234');
    $stmt = $db->prepare("INSERT INTO articles (name, text) VALUES (:name, :text)");
    $stmt->execute(['name' =>$data['name'],'text'=>$data['text']]);
    echo('post was created');

}

create($data);

?>
</body>
</html>
