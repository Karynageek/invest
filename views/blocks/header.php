<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="shortcut icon" href="/template/images/home/logo.png">
    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <img src="/template/images/home/logo.png" alt="" class="navbar-toggler-icon" />
            <h5 class="my-0 mr-md-auto font-weight-normal">InvestBank</h5>
            <?php if (User::isGuest()): ?>  
                <nav class="my-2 my-md-0 mr-md-3">
                    <a href="/user/login"><i class="fa fa-lock"></i>Login</a>
                <?php else: ?>
                    <a class="p-2 text-dark" href="/deposit/create">New Deposit</a>
                    <a class="p-2 text-dark" href="/deposit/view">List of deposits</a>
                    <a class="p-2 text-dark" href="/user/logout"><i class="fa fa-unlock"></i>Logout</a>
                </nav>
            <?php endif; ?>
        </div>