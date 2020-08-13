<?php

/**
 * Description of DepositController
 *
 * @author Karina
 */
class DepositController {

    public function actionCreateDeposit() {
        $date_finish = false;
        $status = false;
        $interest_rate = false;
        $sum = false;
        $result = false;
        $userId = null;
        if (isset($_POST['submit'])) {
            $date_finish = $_POST['date_finish'];
            $status = $_POST['status'];
            $interest_rate = $_POST['interest_rate'];
            $sum = $_POST['sum'];
            $userId = $_SESSION['user'];
            $errors = false;
            if (!Deposit::checkSum($sum)) {
                $errors[] = 'Сумма депозита не может быть меньше $100 и быть больше 12 символов';
            }
            if ($errors == false) {
                $result = Deposit::createDeposit($date_finish, $status, $interest_rate, $userId, $sum);
                header("Location: /deposit/view");
            }
        }

        require_once(ROOT . '/views/deposit/create_deposit.php');
        return true;
    }

    public function actionViewDepositByUserId() {
        $userId = $_SESSION['user'];
        $deposits = Deposit::getDepositsListByUsers($userId);

        require_once(ROOT . '/views/deposit/view_deposits.php');
        return true;
    }

}
