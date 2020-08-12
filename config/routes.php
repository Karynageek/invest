<?php

return array(
    // Deposit:
    'deposit/view' => 'deposit/viewDeposit', // actionViewDeposit in DepositController
    'deposit/create' => 'deposit/createDeposit', // actionCreateDeposit in DepositController       
    
    // User:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    // Manage users:    
    'admin/user/create' => 'admin/createUserByAdmin',
    'admin/user/update/([0-9]+)' => 'admin/updateUserByAdmin/$1',
    'admin/user/delete/([0-9]+)' => 'admin/deleteUserByAdmin/$1',
    'admin/user/view' => 'admin/viewUserByAdmin',
    
    // Manage deposit:    
    'admin/deposit/update/([0-9]+)' => 'admin/updateDepositByAdmin/$1',
    'admin/deposit/delete/([0-9]+)' => 'admin/deleteDepositByAdmin/$1',
    'admin/deposit/view' => 'admin/viewDepositByAdmin',
);
