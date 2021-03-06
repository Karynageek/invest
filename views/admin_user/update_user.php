<?php include ROOT . '/views/blocks/header_admin.php'; ?>   
<div class="container-fluid h-100">
    <div class="row align-items-center h-100">
        <div class="col-sm-12">
            <div class="row justify-content-center">
                <div class="col-4">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php foreach ($errors as $error): ?>
                                <ul>
                                    <li><?php echo $error; ?></li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <form action="#" method="post" class="form-signin">
                        <h1 class="h3 mb-3 font-weight-normal text-center">
                            Edit user# <?php echo $user['id']; ?></h1>
                        <h5>Name:</h5>
                        <input type="text" name="name" id="inputName" 
                               class="form-control mb-2" required=""
                               value="<?php echo $user['name']; ?>">

                        <h5>Password:</h5>
                        <input type="text" name="password" id="inputPassword" 
                               class="form-control mb-2" required=""
                               value="<?php echo $user['password']; ?>">                                       

                        <h5>Email:</h5>
                        <input type="email" name="email" id="inputEmail" 
                               class="form-control mb-2" required=""
                               value="<?php echo $user['email']; ?>">

                        <h5>Phone:</h5>
                        <input type="text" name="phone" id="inputPhone" 
                               class="form-control mb-2" required=""
                               value="<?php echo $user['phone']; ?>">

                        <div class="row justify-content-center">
                            <input type="submit" name="submit" value="Update" 
                                   class="btn btn-primary col-6 mb-2"/></div>
                    </form>
                    <div class="text-center">
                        <a href="/admin/user/view">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/views/blocks/footer_admin.php';