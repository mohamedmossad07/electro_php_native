<?php


namespace Models;


class Category extends Model
{
    protected static $table = "categories";
    private static $allCategories;

    public static function all()
    {
        if (!self::$allCategories) {
            $sql = 'select * from ' . self::getTable();
            $stm = self::prepare($sql);
            $stm->execute();
            self::setAllCategories($stm->fetchAll(self::getFetchMethod(), self::getFetchClass()));
        }
        return self::getAllCategories();
    }

    /**
     * @return string
     */
    public static function getTable(): string
    {
        return self::$table;
    }

    /**
     * @param string $table
     */
    public static function setTable(string $table): void
    {
        self::$table = $table;
    }

    /**
     * @return mixed
     */
    public static function getAllCategories()
    {
        return self::$allCategories;
    }

    /**
     * @param mixed $allCategories
     */
    public static function setAllCategories($allCategories): void
    {
        self::$allCategories = $allCategories;
    }

    public static function getCategoryCollection()
    {
        $sql = 'select * from ' . self::getTable() . ' limit 3';
        $stm = self::prepare($sql);
        $stm->execute();
        return $stm->fetchAll(self::getFetchMethod(), self::getFetchClass());
    }
}
