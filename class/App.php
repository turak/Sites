<?

class App{

    static $db = null;

    static function getDatabase(){

        $database_name = "ultimegu";
        $host = "la18075-001.privatesql.ha.ovh.net";
        $port = "35232";
        $login = "aurelien";
        $password = "United62";

        if(!self::$db) {
            self::$db = new Database($login, $password, $host, $database_name, $port);
        }
        return self::$db;
    }
}