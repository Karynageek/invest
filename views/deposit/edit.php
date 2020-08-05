<!DOCTYPE HTML>
<head>
    <title>Редактирование статьи</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php include ROOT . '/views/blocks/header.php'; ?>
<div class="container mt-5 mb-5">
    <h1>Редактирование статьи</h1>
    <form action="#" method="post">
        <div>
        <input type="text" value="" name="title" placeholder="Введите название статьи" class="form-control"><br>
        <input type="text" value="" name="anons" placeholder="Введите анонс статьи" class="form-control"><br>
        <button type="submit" class="btn btn-success">Обновить</button>
        </div>
    </form>
</div>
<?php include ROOT . '/views/blocks/footer.php'; ?>
</body>
</html>