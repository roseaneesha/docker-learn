 <?php


    use Dotenv\Dotenv;
    use Dotenv\Exception\InvalidPathException;

    require_once __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
    $dotenv->load();
    try {
        $dotenv->load();
    } catch (InvalidPathException $e) {
        echo $e;
    }
    // echo getenv('HOST_LOCAL');
    // echo var_dump($_ENV('HOST_DOCKER'));

    class Database
    {
        private $user;
        private $host;
        private $password;
        private $db;

        public function __construct()
        {
            $this->connect();
        }
        private function connect()
        {
            // $this->host = 'db';
            // $this->password = "MYSQL_ROOT_PASSWORD";
            // $this->host = '192.168.56.1';
            // $this->password = "";


            $this->host = getenv('HOST_LOCAL');
            $this->password = getenv('PASSWORD_LOCAL');
            $this->user = getenv('DB_USER');
            $this->db = getenv('DB_NAME');


            $this->mysqli = new mysqli($this->host, $this->user,  $this->password, $this->db);
            return $this->mysqli;
        }

        public function db_num($sql)
        {
            $res = $this->mysqli->query($sql);
            return $res;
        }
    }

    ?>
