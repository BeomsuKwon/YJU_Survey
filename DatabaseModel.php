<?php
require_once("./utils.php");
require_once("./env.php");

class DatabaseModel {
    const HOST      = DB_HOST;          // default MySQL 호스트
    const USER      = DB_USER;          // default MySQL 유저
    const PASSWORD  = DB_PASSWORD;      // default MySQL 비밀번호
    const DATABASE  = DB_NAME;          // default MySQL 데이터베이스

    private static  $_instance = null;      // 싱글톤 인스턴스

    private         $_conn = null;          // mysqli 연결

    private function __construct() {
        if (!isset($this->_conn))
            // mysql 연결 생성
            if ($this->connect()) {
                $this->create_db();
                $this->create_schema();
            } else {
                logger("DB 서버 접속 실패.");
            }

        if ($this->_conn->connect_errno)
            // 연결 에러 메세지 출력
            logger("Failed to connect to MySQL: (" . $this->_conn->connect_errno . ") " . $this->_conn->connect_error);
    }

    function __destruct() {
        $this->_conn->close();
    }

    public function connect($host = self::HOST, $user = self::USER, $password = self::PASSWORD) {
        return $this->_conn = new mysqli($host, $user, $password);
    }

    public function select_db($database = self::DATABASE) {
        return $this->_conn->select_db($database);
    }

    public function create_db($database = self::DATABASE) {
        $res = $this->query("CREATE DATABASE IF NOT EXISTS $database");
        $this->select_db();
        return $res;
    }

    public function create_schema($query = null) {
        if (!isset($query)) $query = 
       "CREATE TABLE IF NOT EXISTS survey (
            id BIGINT(20) unsigned NOT NULL,
            name VARCHAR(45) NOT NULL,
            dept_name VARCHAR(45) NOT NULL,
            phone INT(11) NOT NULL,
            prof_name VARCHAR(45) NOT NULL,
            theme MEDIUMTEXT NOT NULL,
            ppt LONGTEXT NOT NULL,
            video LONGTEXT NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY survey_id_name_uk (id, name)
        );";

        return $this->query($query);
    }

    public static function getInstance() {
        if (!isset(self::$_instance))
            self::$_instance = new self();

        return self::$_instance;
    }

    private function query($queryStr) {
        return $this->_conn->query($queryStr);
    }

    public function insert($std_id, $name, $dept_name, $phone, $prof_name, $theme, $ppt, $video) {
        $query = "INSERT INTO survey 
            VALUES(
                $std_id, 
                '$name', 
                '$dept_name', 
                $phone, 
                '$prof_name', 
                '$theme', 
                '$ppt', 
                '$video'
            )";

        return $this->query($query);
    }

    public function update($std_id, $ppt, $video) {
        $query = "UPDATE survey SET ppt = '$ppt', video = '$video' WHERE id = '$std_id'";

        return $this->query($query);
    }

    public function get_student($std_id) {
        $query = "SELECT * FROM survey WHERE id = '$std_id'";

        return $this->query($query)->fetch_assoc();
    }
}