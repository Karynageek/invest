<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>List of Users</title>
    </head>
    <body>
        <h2>List of Users</h2>
        <table border="1">
            <tr>
                <th>Id: <?php echo $user['id']; ?></th> 
                <th>User Name: <?php echo $user['name']; ?></th> 
                <th>E-mail: <?php echo $user['email']; ?></th> 
                <th>Phone: <?php echo $user['phone']; ?> </th> 
                <th colspan="2">Operations</th>
            </tr>
            <td >
                <a href="/students/edit/id">Edit</a>
            </td>
            <td>
                <a href="/students/delete/id">Delete</a>
            </td>
        </tr>
    </table>
</body>
</html>