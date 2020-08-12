<?php include ROOT . '/views/blocks/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
                <div class="left-sidebar">
                    <h2>List of users</h2>
                    <a href="create/" class="btn btn-success">Create new user</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $userList): ?>
                                <?php if (User::getRole($userList['id']) != 'admin'): ?>
                                    <tr>
                                        <td><p class="card-title"><?php echo $userList['id']; ?></p></td>
                                        <td><p class="card-title"><?php echo $userList['name']; ?></p></td>
                                        <td><p class="card-title"><?php echo $userList['email']; ?></p></td>
                                        <td><p class="card-title"><?php echo $userList['phone']; ?></p></td>
                                        <td><p class="card-title"><?php echo $userList['balance']; ?></p></td>
                                        <td><p class="card-title"><?php echo $userList['password']; ?></p></td>
                                        <td><a href="update/<?php echo $userList['id']; ?>" class="btn btn-primary">Edit</a></td>
                                        <td><a href="delete/<?php echo $userList['id']; ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php include ROOT . '/views/blocks/footer_admin.php'; ?>