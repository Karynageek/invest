<!DOCTYPE HTML>
<head>
    <title>Детальнее</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div th:insert="blocks/header :: header"></div>
<div class="container mt-5">
    <?php echo $newsItem['author_name'];?>
    <div th:each="el : ${post}" class="alert alert-info mt-2">
        <h1 th:text="${el.title}"/>
        <p th:text="${el.full_text}"/>
        <p><b>Просмотры: </b><span th:text="${el.views}"/></p>
        <div class="btn-group" role="group" aria-label="Basic example">
        <form><a th:href="'/blog/'+${el.id}+'/edit'" class="btn btn-primary md-2 mr-2">Редактировать</a></form>
        <form th:action="'/blog/'+${el.id}+'/remove'" method="post">
        <button class="btn btn-secondary" type="submit">Удалить</button>
        </form>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <h3>Создать сообщение</h3>
        <form method="post">
            <div class="form-group">
                <label for="sel1">Выберите тег:</label>
                <select type="text" name="tag" class="form-control mb-2" id="sel1">
                    <option>История</option>
                    <option>Литература</option>
                    <option>Кино</option>
                    <option>Исскуство</option>
                    <option>ИТ</option>
                    <option>Новости</option>
                </select>
                <textarea name="text" placeholder="Введите текст сообщения" class="form-control"></textarea><br>
                <button type="submit" class="btn btn-success">Отправить сообщение</button>
                <input type="hidden" name="_csrf" th:value="${_csrf.token}"/>
            </div>
        </form>
    </div>
    <div th:each="el : ${post}">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <form th:action="'/blog/'+${el.id}+'/filter'" method="post" class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="filter">
            <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Поиск</button>
        </form>
        </nav>
    </div>
    <div>
        <p><b>Отзывы:</b></p>
        <div th:each="el : ${messages}" class="alert alert-info mt-2">
            <strong th:text="${el.getAutorName()}"/>
            <i th:text="${el.tag}"/>
            <span th:text="${el.text}"/>
        </div>
    </div>
</div>
<div th:insert="blocks/footer :: footer"></div>
</body>
</html>