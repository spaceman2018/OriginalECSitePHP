<?php
$rootPath = "../";
require_once($rootPath.'common/ConnectDB.php');

class User
{
    protected $id;
    protected $user_id;
    protected $password;
    protected $family_name;
    protected $first_name;
    protected $family_name_kana;
    protected $first_name_kana;
    protected $sex;
    protected $email;
    protected $status;
    protected $logined;
    protected $regist_date;
    protected $update_date;

    public function getUser($user_id, $password)
    {
        try {
            $dbh = new ConnectDB();
            $sql = 'SELECT * FROM user_info WHERE user_id=? AND password=?';
            $args[] = $user_id;
            $args[] = $password;
            $stmt = $dbh->exec($sql, $args);
            $dbh = null;

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user;
        } catch (Exception $e) {
            echo 'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
    }

    public function getAllUser()
    {
        try {
            $dbh = new ConnectDB();
            $sql = 'SELECT * FROM user_info WHERE 1';
            $stmt = $dbh->execute($sql, $args);
            $dbh = null;

            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        } catch (Exception $e) {
            echo 'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
    }

    public function createUser()
    {
        return $parents;
    }
}
