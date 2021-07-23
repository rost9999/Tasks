<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Task 4</title>
</head>
<body>
<form action="" method="post">
    <div class="container">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="textarea" name="text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php
$db = new PDO('mysql:host=localhost;dbname=task3', 'root', 'qwer1234');
if($_POST){
    $stmt = $db->prepare("INSERT INTO articles (name, text) VALUES (:name, :text)");
    $stmt->execute(['name' => $_POST['name'], 'text' => $_POST['text']]);
}
$stmt = $db->query("SELECT * FROM `articles`");
$alldata = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table class="table">
    <thead>
    <tr>
        <?php foreach(array_keys($alldata[0]) as $key=>$value): ?>
        <th scope="col"><?=$value;?></th>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach($alldata as $key=>$value): ?>
    <tr>
        <th scope="row"><?=$value['id'];?></th>
        <td><?=$value['name'];?></td>
        <td><?=$value['text'];?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
