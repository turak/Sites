<?

class App{

    static $db = null;

    static function getDatabase(){

        $database_name = "";
        $host = "";
        $port = "";
        $login = "";
        $password = "";

        if(!self::$db) {
            self::$db = new Database($login, $password, $host, $database_name, $port);
        }
        return self::$db;
    }
}
