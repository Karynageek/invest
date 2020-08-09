<?php include ROOT . '/views/blocks/header_admin.php'; ?>   
    <div class="container-fluid h-100">
        <div class="row align-items-center h-100">
            <div class="col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <?php if ($result): ?>
                            <p>Вы зарегистрированы!</p>
                        <?php else: ?>
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <form action="#" method="post" class="form-signin">

                                <h1 class="h3 mb-3 font-weight-normal text-center">Log up</h1>
                                <label for="inputName" class="sr-only">Username</label>
                                <input type="text" name="name" id="inputName" 
                                       class="form-control mb-2" placeholder="Username" required=""
                                       value="<?php echo $name; ?>">
                                       

                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" name="password" id="inputPassword" 
                                       class="form-control mb-2" placeholder="Password" required=""
                                       value="<?php echo $password; ?>">
                                       

                                <label for="inputEmail" class="sr-only">Email</label>
                                <input type="email" name="email" id="inputEmail" 
                                       class="form-control mb-2" placeholder="Email" required=""
                                       value="<?php echo $email; ?>">

                                <label for="inputPhone" class="sr-only">Phone</label>
                                <input type="text" name="phone" id="inputPhone" 
                                       class="form-control mb-2" placeholder="Phone" required=""
                                       value="<?php echo $phone; ?>">

                                <div class="row justify-content-center">
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary col-6 mb-2"/></div>
                            </form>
                            <div class="text-center">
                                <a href="/admin/user/view">Go back</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ROOT . '/views/blocks/footer_admin.php';