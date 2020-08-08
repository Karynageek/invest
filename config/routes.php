<?php

return array(
    // Депозит:
    'deposit/view' => 'deposit/viewDeposit', // actionView в DepositController
    'deposit/create' => 'deposit/createDeposit', // actionAdd в DepositController       
    
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    // Управление пользователями:    
    'admin/user/create' => 'adminUser/create',
    'admin/user/update/([0-9]+)' => 'adminUser/update/$1',
    'admin/user/delete/([0-9]+)' => 'adminUser/delete/$1',
    'admin/user' => 'adminUser/index',
    
    // Управление депозитами:    
    'admin/deposit/update/([0-9]+)' => 'adminDeposit/update/$1',
    'admin/deposit/delete/([0-9]+)' => 'adminDeposit/delete/$1',
    'admin/deposit/view' => 'adminDeposit/viewDepositByAdmin',

    // Админпанель:
    'admin' => 'admin/index',
);
