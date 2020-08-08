<?php

/**
 * Description of DepositController
 *
 * @author Karina
 */
class DepositController {

    public function actionCreateDeposit() {
        $date_finish=false;
        $status=false;
        $interest_rate=false;
        $sum=false;
        $result = false;
        
        if (isset($_POST['submit'])) {
            $date_finish = $_POST['date_finish'];
            $status = $_POST['status'];
            $interest_rate = $_POST['interest_rate'];
            $sum = $_POST['sum'];
            $result = Deposit::createDeposit($date_finish, $status, $interest_rate, $sum);
            header("Location: /deposit/view");
        }

        require_once(ROOT . '/views/deposit/create_deposit.php');
        return true;
    }

    public function actionViewDeposit() {
        $deposits = Deposit::getDepositsList();

        require_once(ROOT . '/views/deposit/view_deposits.php');
        return true;
    }

}
