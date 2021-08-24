<?php


namespace Models;


class Product extends Model
{
    protected static $table = "products";
    private static $allProducts;

    public static function all()
    {
        $sql = 'select 
            products.id as pId,
            products.status as pStatus,
            products.discount as pDiscount,
            products.price as pPrice,
            products.old_price as pOld_Price,
            product_imgs.img as pImg,
            products.name as pName,
            cat.name as cName ,
            cat.name as cName,
            cat.img as cImg from ' . self::getTable() . '
         join product_imgs on product_imgs.product=products.id
          join categories as cat on  products.category=cat.id ';
        $stm = self::prepare($sql);
        $stm->execute();
        self::setAllProducts($stm->fetchAll(self::getFetchMethod(), self::getFetchClass()));
        return self::getAllProducts();
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
    public static function getAllProducts()
    {
        return self::$allProducts;
    }

    /**
     * @param mixed $allProducts
     */
    public static function setAllProducts($allProducts): void
    {
        self::$allProducts = $allProducts;
    }

    public static function getById(int $id)
    {
        $sql = 'select *,products.id as pId,products.name as pName,cat.name as cName  from ' . self::getTable() . '  join product_imgs on product_imgs.product=products.id 
               join categories as cat on  products.category=cat.id 
           where products.id=' . $id;
        $stm = self::prepare($sql);
        $stm->execute();
        return $stm->fetchAll(self::getFetchMethod(), self::getFetchClass());
    }
}
