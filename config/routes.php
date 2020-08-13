<?php

return array(
    // Deposit:
    'deposit/view' => 'deposit/viewDepositByUserId', // actionViewDeposit in DepositController
    'deposit/create' => 'deposit/createDeposit', // actionCreateDeposit in DepositController       
    
    // User:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    // Manage users:    
    'admin/user/create' => 'adminUser/createUserByAdmin',
    'admin/user/update/([0-9]+)' => 'adminUser/updateUserByAdmin/$1',
    'admin/user/delete/([0-9]+)' => 'adminUser/deleteUserByAdmin/$1',
    'admin/user/view' => 'adminUser/viewUserByAdmin',
    
    // Manage deposit:    
    'admin/deposit/update/([0-9]+)' => 'admin/updateDepositByAdmin/$1',
    'admin/deposit/delete/([0-9]+)' => 'admin/deleteDepositByAdmin/$1',
    'admin/deposit/view' => 'admin/Deposit',
    
);