<?php

/**
 * Description of AdminController
 *
 * @author Karina
 */
class AdminController extends Admin {

    public function actionDeposit() {
        self::checkAdmin();
        $depositsAll = Deposit::getDepositsList();

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
            $errors = false;
            if (!Deposit::checkSum($sum)) {
                $errors[] = 'Сумма депозита не может быть меньше $100 и быть больше 12 символов';
            }
            if ($errors == false) {
                $deposit = Deposit::updateDepositById($depositId, $date_start, $date_finish,
                                $status, $sum, $interest_rate);
                header("Location: /admin/deposit/view");
            }
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
