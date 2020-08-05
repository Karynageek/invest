<?php

return array(
    // Депозит:
    'deposit/([0-9]+)' => 'deposit/view/$1', // actionView в DepositController
    'deposit/add/([0-9]+)' => 'deposit/add/$1', // actionAdd в DepositController    
    'deposit/delete/([0-9]+)' => 'deposit/delete/$1', // actionDelete в DepositController    
    
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    // Управление пользователями:    
    'admin/user/create' => 'adminUser/create',
    'admin/user/update/([0-9]+)' => 'adminUser/update/$1',
    'admin/user/delete/([0-9]+)' => 'adminUser/delete/$1',
    'admin/user' => 'adminUser/index',
    
    // Управление депозитами:    
    'admin/deposit/create' => 'adminDeposit/create',
    'admin/deposit/update/([0-9]+)' => 'adminDeposit/update/$1',
    'admin/deposit/delete/([0-9]+)' => 'adminDeposit/delete/$1',
    'admin/deposit' => 'adminDeposit/index',

    // Админпанель:
    'admin' => 'admin/index',
);
