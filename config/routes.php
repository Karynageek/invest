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
    'admin/user/create' => 'admin/createUserByAdmin',
    'admin/user/update/([0-9]+)' => 'admin/updateUserByAdmin/$1',
    'admin/user/delete/([0-9]+)' => 'admin/deleteUserByAdmin/$1',
    'admin/user/view' => 'admin/viewUserByAdmin',
    
    // Управление депозитами:    
    'admin/deposit/update/([0-9]+)' => 'admin/updateDepositByAdmin/$1',
    'admin/deposit/delete/([0-9]+)' => 'admin/deleteDepositByAdmin/$1',
    'admin/deposit/view' => 'admin/viewDepositByAdmin',
);
