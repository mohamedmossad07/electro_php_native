<?php


namespace Models;


use App\Request;
use App\Session;

class User extends Model
{

    protected static $table = "users";

    public static function register($data = [])
    {
        self::create($data);
    }

    public static function create($data)
    {
        $email = $data['email'];
        $pass = _hash($data['password']);
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $sql = 'insert into ' . self::getTable() . "(email,password,first_name,last_name) values(\"$email\",\"$pass\",\"$first_name\",\"$last_name\")";
        $stm = self::prepare($sql);
        $stm->execute();
        $data = $stm->rowCount();
        if ($data) {
            Request::redirect('login');
        }
        return false;
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

    public static function login($data = [])
    {
        $email = $data['email'];
        $pass = _hash($data['password']);
        $sql = 'select * from ' . self::getTable() . " where email=\"$email\" and password=\"$pass\"";
        $stm = self::prepare($sql);
        $stm->execute();
        $data = $stm->fetchAll(self::getFetchMethod(), self::getFetchClass());
        if ($data) {
            Session::setSession('user', $data[0]);
            Request::redirect('home');
        }
        return false;
    }

    public static function logined()
    {
        return Session::getSession('user') ?: false;
    }

    public static function logout()
    {
        Session::destroy();
        Request::redirect('home');
    }

    public static function all()
    {
        // TODO: Implement all() method.
    }

    public static function cart()
    {
        $user = Session::getSession('user')->id;
        $sql = "select 
            products.id as pId,
            cart.quntity as cQ,
            product_imgs.img as pImg,
            products.name as pName,
            products.price as pPrice 
         from cart 
         join products on cart.product=products.id 
         join product_imgs on product_imgs.product=products.id
        where  cart.user=\"$user\"";
        $stm = self::prepare($sql);
        $stm->execute();
        return $stm->fetchAll(self::getFetchMethod(), self::getFetchClass());
    }
}
