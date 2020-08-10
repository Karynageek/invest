<?php

/**
 * Description of AdminController
 *
 * @author Karina
 */
class AdminController extends Admin {

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
        $balance = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $balance = $_POST['balance'];

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
            if (!User::checkBalance($balance)) {
                $errors[] = 'Баланс не должен быть больше 12-ти символов и не может быть отрицательным';
            }
            if ($errors == false) {
                $user = User::updateUserById($id, $name, $email, $phone, $password, $balance);
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

    public function actionViewDepositByAdmin() {
        self::checkAdmin();
        $deposits = Deposit::getDepositsList();

        require_once(ROOT . '/views/admin_deposit/view_deposits.php');
        return true;
    }

    public function actionUpdateDepositByAdmin($depositId) {
        self::checkAdmin();
        $deposit = Deposit::getDepositById($depositId);
        $date_start = false;
        $date_finish = false;
        $status = false;
        $sum = false;
        $interest_rate = false;
        if (isset($_POST['submit'])) {
            $date_start = $_POST['date_start'];
            $date_finish = $_POST['date_finish'];
            $status = $_POST['status'];
            $sum = $_POST['sum'];
            $interest_rate = $_POST['interest_rate'];
            $deposit = Deposit::updateDepositById($depositId, $date_start, $date_finish,
                            $status, $sum, $interest_rate);
            header("Location: /admin/deposit/view");
        }

        require_once(ROOT . '/views/admin_deposit/update_deposit.php');
        return true;
    }

    public function actionDeleteDepositByAdmin($depositId) {
        self::checkAdmin();
        Deposit::deleteDepositById($depositId);
        header("Location: /admin/deposit/view");
    }

}
