<?php


namespace Models;


abstract class Model
{
    private static $fetchMethod = \PDO::FETCH_CLASS;
    private static $fetchClass = 'stdClass';

    abstract public static function all();

    /**
     * @return mixed
     */
    public static function getFetchMethod()
    {
        return self::$fetchMethod;
    }

    /**
     * @param mixed $fetchMethod
     */
    public static function setFetchMethod($fetchMethod): void
    {
        self::$fetchMethod = $fetchMethod;
    }

    /**
     * @return string
     */
    public static function getFetchClass(): string
    {
        return self::$fetchClass;
    }

    /**
     * @param string $fetchClass
     */
    public static function setFetchClass(string $fetchClass): void
    {
        self::$fetchClass = $fetchClass;
    }

    public static function prepare($q)
    {
        return self::getConnection()->prepare($q);
    }

    private static function getConnection()
    {
        return self::getConnector()->getConnection();
    }

    private static function getConnector()
    {
        return DBConnector::getConnector();
    }

}
