<?php
class Database{
    private static $intance = null;

    public static function getComnction (){
        if(!self::$intance){
            $host       = 'localhost';
            $db         = 'sistema_usuario';
            $user       = 'root';
            $password   = '';

            self::$intance = new PDO("mysql:host=$host; dbname=$db, $user, $password");

            self::$intance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        return self::$intance;
    }
}
?>