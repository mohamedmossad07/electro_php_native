<?php


namespace Models;


class Cart extends Model
{
    protected static $table = "cart";

    public static function insert($data)
    {
        $user = $data['user'];
        $product = $data['product'];
        $quntity = $data['quntity'];
        $sql = 'select id,quntity from ' . self::getTable() . " where product=$product and user=\"$user\"";
        $stm = self::prepare($sql);
        $stm->execute();
        $data = $stm->fetchAll(self::getFetchMethod(), self::getFetchClass());
        if ($data) {
            $q = $data[0]->quntity + 1;
            $sql = 'update ' . self::getTable() . " set quntity=\"$q\" where user=\"$user\" and product=\"$product\"  ";
            $stm = self::prepare($sql);
            $stm->execute();
            return !!$stm->rowCount();
        }
        $sql = 'insert into ' . self::getTable() . "(user,product,quntity) values(\"$user\",\"$product\",\"$quntity\")";
        $stm = self::prepare($sql);
        $stm->execute();
        return !!$stm->rowCount();
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

    public static function all()
    {
        // TODO: Implement all() method.
    }
}
