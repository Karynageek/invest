<?php

/**
 * Description of Admin
 *
 * @author Karina
 */
class Admin {

    public static function checkAdmin() {
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        if ($user['role'] == 'admin') {
            return true;
        } else {
            require_once(ROOT . '/views/errors/403.php');
            die();
        }
    }

}
