<?php

/**
 * Description of AdminController
 *
 * @author Karina
 */
class AdminController extends Admin {

    public function actionIndex() {
        self::checkAdmin();

        $usersList = User::getUsersList();

        require_once(ROOT . '/views/admin_user/index.php');
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
                $result = User::createUser($name, $email, $phone, $password);
                header("Location: /admin/index");
            }
        }
        require_once(ROOT . '/views/admin_user/create.php');
        return true;
    }

    public function actionUpdateUserByAdmin($id) {

        self::checkAdmin();

        $user = User::getUserById($id);

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

            $result = User::updateUserById($id, $name, $email, $phone, $password);
            header("Location: /admin/user");
        }

        require_once(ROOT . '/views/admin_user/update.php');
        return true;
    }

    public function actionDeleteUserByAdmin($id) {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            $user = User::deleteUserById($id);

            header("Location: /admin/user");
        }
        require_once(ROOT . '/views/admin_user/delete.php');
        return true;
    }

}
