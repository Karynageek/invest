<?php

/**
 * Description of DepositController
 *
 * @author Karina
 */
class DepositController {

    public function actionCreateDeposit() {
        if (isset($_POST['submit'])) {
            $options['data_finish'] = $_POST['data_finish'];
            $options['sum'] = $_POST['sum'];
            $options['interest_rate'] = $_POST['interest_rate'];

            header("Location: /user/deposit");
        }

        require_once(ROOT . '/views/user/deposit.php');
        return true;
    }

    public function actionViewDeposit() {
        $product = Deposit::getDepositsList();

        require_once(ROOT . '/views/user/view.php');
        return true;
    }

}
