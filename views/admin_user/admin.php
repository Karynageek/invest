<!DOCTYPE html>
<html lang="en">
<html xmlns:th="http://www.thymeleaf.org">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:th="https://www.thymeleaf.org"
      xmlns:sec="https://www.thymeleaf.org/thymeleaf-extras-springsecurity3" >
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Home</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout">logout</a> </li>
        </ul>
    </div>
</nav>
<div align="center">
    <h1>Secret page for admins only!</h1>

    <button type="button" id="add_user" class="btn btn-primary">Add</button>
    <button type="button" id="delete_user" class="btn btn-secondary">Delete</button>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">User name</th>
            <th scope="col">Role</th>
        </tr>
        </thead>
        <tbody>
            <div th:each="el : ${users}">
                <tr>
                <td><input type="checkbox" name="toDelete" th:text="${el.id}"></td>
                <td><h5 class="card-title" th:text="${el.login}"/></td>
                <td><h5 class="card-title" th:text="${el.role}"/></td>
                </tr>
            </div>
        </tbody>
    </table>
</div>

<script>
    $('#add_user').click(function(){
        window.location.href = "/registration";
    });

    $('#delete_user').click(function(){
        var data = { 'toDelete' : []};
        $(":checked").each(function() {
            data['toDelete'].push($(this).val());
        });
        $.post("/delete", data, function(data, status) {
            window.location.reload();
        });
    });
</script>

</body>
</html>