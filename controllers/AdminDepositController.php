<?php

/**
 * Description of AdminDepositController
 *
 * @author Karina
 */
class AdminDepositController extends Admin {

    public function actionViewDepositByAdmin($userId) {
        self::checkAdmin();
        $deposit = Deposit::getDepositsListByUsers($userId);

        require_once(ROOT . '/views/admin/view.php');
        return true;
    }

    public function actionUpdateDepositByAdmin($depositId) {
        self::checkAdmin();
        $deposit = Deposit::getDepositById($depositId);
        $data_start = false;
        $data_finish = false;
        $status = false;
        $sum = false;
        $interest_rate = false;
        if (isset($_POST['submit'])) {
            $data_start = $_POST['data_start'];
            $data_finish = $_POST['data_finish'];
            $status = $_POST['status'];
            $sum = $_POST['sum'];
            $interest_rate = $_POST['interest_rate'];
            $deposit = Deposit::updateDepositById($id, $data_start, $data_finish,
                            $status, $sum, $interest_rate);
            header("Location: /admin/deposit");
        }

        require_once(ROOT . '/views/admin_deposit/update.php');
        return true;
    }

    public function actionDeleteDepositByAdmin($depositId) {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            Deposit::getDepositById($depositId);

            header("Location: /admin/deposit");
        }
        require_once(ROOT . '/views/admin_deposit/delete.php');
        return true;
    }

}
