<?php

/**
 * Description of AdminUserController
 *
 * @author Karina
 */
class AdminUserController extends Admin {

    public function actionViewUserByAdmin() {
        self::checkAdmin();

        $users = User::getUsersList();

        require_once(ROOT . '/views/admin_user/view_users.php');
        return true;
    }

    public function actionCreateUserByAdmin() {
        self::checkAdmin();
        $name = false;
        $email = false;
        $phone = false;
        $password = false;
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $pwd_hashed = password_hash($password, PASSWORD_DEFAULT);
            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if ($errors == false) {
                $result = User::createUser($name, $email, $phone, $pwd_hashed);
                header("Location: /admin/user/view");
            }
        }
        require_once(ROOT . '/views/admin_user/create_user.php');
        return true;
    }

    public function actionUpdateUserByAdmin($id) {

        self::checkAdmin();

        $user = User::getUserById($id);

        $name = false;
        $email = false;
        $phone = false;
        $password = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $pwd_hashed = password_hash($password, PASSWORD_DEFAULT);
            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if ($errors == false) {
                $user = User::updateUserById($id, $name, $email, $phone, $pwd_hashed);
                header("Location: /admin/user/view");
            }
        }

        require_once(ROOT . '/views/admin_user/update_user.php');
        return true;
    }

    public function actionDeleteUserByAdmin($id) {
        self::checkAdmin();
        $user = User::deleteUserById($id);
        header("Location: /admin/user/view");
    }

}
