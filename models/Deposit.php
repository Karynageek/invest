<?php

/**
 * Description of Deposit
 *
 * @author Karina
 */
class Deposit {

    public static function createDeposit($data_finish, $status, $sum, $interest_rate) {
        $db = Db::getConnection();

        $query = 'INSERT INTO deposit (data_finish, status, sum, interest_rate) '
                . 'VALUES (:data_finish, :status, :sum, :interest_rate)';

        $result = $db->prepare($query);
        $result->bindParam(':data_finish', $data_finish, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        $result->bindParam(':sum', $sum, PDO::PARAM_INT);
        $result->bindParam(':interest_rate', $interest_rate, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getDepositById($id) {
        $db = Db::getConnection();
        $query = 'SELECT * FROM deposit WHERE id = :id';
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }

    public static function getDepositsList() {
        $db = Db::getConnection();
        $result = $db->query('SELECT id, data_start, data_finish, status, sum, '
                . 'interest_rate FROM deposit ORDER BY id ASC');
        $depositList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $depositList[$i]['id'] = $row['id'];
            $depositList[$i]['data_start'] = $row['data_start'];
            $depositList[$i]['data_finish'] = $row['data_finish'];
            $depositList[$i]['status'] = $row['status'];
            $depositList[$i]['sum'] = $row['sum'];
            $depositList[$i]['interest_rate'] = $row['interest_rate'];
            $i++;
        }
        return $depositList;
    }

    public static function getDepositsListByUsers($userId) {

        $db = Db::getConnection();

        $query = 'SELECT id, data_start, data_finish, sum, interest_rate FROM deposit '
                . 'WHERE status = 1 AND user_id = :user_id '
                . 'ORDER BY id ASC';

        $result = $db->prepare($query);
        $result->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $result->execute();

        $i = 0;
        $depositList = array();
        while ($row = $result->fetch()) {
            $depositList[$i]['id'] = $row['id'];
            $depositList[$i]['data_start'] = $row['data_start'];
            $depositList[$i]['data_finish'] = $row['data_finish'];
            $depositList[$i]['status'] = $row['status'];
            $depositList[$i]['sum'] = $row['sum'];
            $depositList[$i]['interest_rate'] = $row['interest_rate'];
            $depositList[$i]['user_id'] = $row['user_id'];
            $i++;
        }
        return $depositList;
    }

    public static function updateDepositById($id, $data_start, $data_finish, $status, $sum, $interest_rate) {
        $db = Db::getConnection();
        $query = "UPDATE deposit
            SET data_start = :data_start, 
            data_finish=:data_finish, 
            status = :status,
            sum=:sum, 
            interest_rate=:interest_rate 
            WHERE id = :id";
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':data_start', $data_start, PDO::PARAM_STR);
        $result->bindParam(':data_finish', $data_finish, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        $result->bindParam(':sum', $sum, PDO::PARAM_INT);
        $result->bindParam(':interest_rate', $interest_rate, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function deleteDepositById($id) {
        $db = Db::getConnection();
        $query = 'DELETE FROM deposit WHERE id = :id';
        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getStatus($status) {
        switch ($status) {
            case '1':
                return 'Open';
                break;
            case '0':
                return 'Close';
                break;
        }
    }

}
