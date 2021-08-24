<?php


namespace Models;


use PDO;
use PDOException;

class DBConnector
{
    private static $connector;
    private $con;

    private function __construct()
    {
        $data = require_once _appPath('config');
        $con = $this->connect($data);
        $this->setConnection($con);
    }

    public function connect($data): PDO
    {
        $host = $data['db']['host'];
        $port = $data['db']['port'];
        $dbname = $data['db']['dbname'];
        $driver = $data['db']['driver'];
        $charset = $data['db']['charset'];
        $user = $data['db']['auth']['user'];
        $pass = $data['db']['auth']['pass'];
        $options = $data['db']['options'];
        $dsn = "$driver:host=$host;dbname=$dbname;charset=$charset;port=$port";
        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param mixed $con
     */
    public function setConnection($con): void
    {
        $this->con = $con;
    }

    /**
     * @return mixed
     */
    public static function getConnector(): DBConnector
    {
        if (!self::$connector) {
            self::$connector = new DBConnector();
        }
        return self::$connector;
    }

    //connect to db

    /**
     * @return mixed
     */
    public function getConnection(): PDO
    {
        return $this->con;
    }

    public function __destruct()
    {
        $this->setConnection(null);
    }
}
