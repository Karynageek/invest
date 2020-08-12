<?php

/**
 * Description of UsertController
 *
 * @author Karina
 */
class UserController {

    public function actionRegister() {
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
            if (!User::checkPhone($phone)) {
                $errors[] = 'Телефон не должен быть короче 4-х символов';
            }
            if ($errors == false) {
                $result = User::createUser($name, $email, $phone, $password);
                header("Location: /user/login");
            }
        }
        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    public function actionLogin() {
        $email = false;
        $password = false;
        $result = false;
        $user = false;

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            $userId = User::checkUserData($email, $password);
            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId);
                if (User::getRole($userId)==='admin') {
                    header("Location: /admin/deposit/view");
                } else {
                    header("Location: /deposit/view");
                }
            }
        }
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    public function actionLogout() {
        if (session_id() == '') {
            session_start();
        }
        unset($_SESSION["user"]);
        header("Location: /user/login");
    }

}
