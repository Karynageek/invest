<!DOCTYPE html>
<head>
    <title>Log up</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="container mt-5 mb-5">
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
                            <h1 class="h3 mb-3 font-weight-normal text-center">Log up</h1>
                            <label for="inputName" class="sr-only">Username</label>
                            <input type="text" name="name" id="inputName" 
                                   class="form-control mb-2" placeholder="Username" required="">

                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" id="inputPassword" 
                                   class="form-control mb-2" placeholder="Password" required="">                             

                            <label for="inputEmail" class="sr-only">Email</label>
                            <input type="email" name="email" id="inputEmail" 
                                   class="form-control mb-2" placeholder="Email" required="">

                            <label for="inputPhone" class="sr-only">Phone</label>
                            <input type="text" name="phone" id="inputPhone" 
                                   class="form-control mb-2" placeholder="Phone" required="">

                            <div class="row justify-content-center">
                                <input type="submit" name="submit" value="Registration" 
                                       class="btn btn-primary col-6 mb-2"/></div>
                        </form>
                        <div class="text-center">
                            <a href="/user/login">Go back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>