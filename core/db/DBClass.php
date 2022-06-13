<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 22.06.2018
 * Time: 12:19
 */
namespace Core\DB;


require_once 'core/db/init_file.php';

/**
 * Class DBClass
 * @package db
 */
class DBClass
{
    private static $db_instance = null;
    private static $db_connect = null;

    /**
     * 
     */
    public function init()
    {
        //die(var_dump(init_file::HOST));
        try {
            if (!self::$db_connect)
                self::$db_connect = new \PDO(init_file::HOST. init_file::DB, init_file::USER,
                 init_file::PASS);
        } catch(\PDOException $e){
            die('Error witth DB connection! '. $e);
        }
    }

    /**
     * @return DBClass|null
     */
    public static function getInstance()
    {
        if (!self::$db_instance){
            return new DBClass();
        }
        else
            return self::$db_instance;
    }

    /**
     * @return null
     */
    public static function getDBConnect()
    {
        return self::$db_connect;
    }
} 