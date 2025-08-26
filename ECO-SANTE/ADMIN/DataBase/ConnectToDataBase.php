 <?php 
    class DataBase {
        private $dsn;
        private $dbname;
        private $dbpassword;
        private $pdo;

        public function __construct() {
            $this->dsn ='mysql:host=localhost;charset=utf8;dbname=ecosante';
            $this->username = 'root';
            $this->dbpassword = '';
        }

        public function ConnectToDB() {
            if($this->pdo == null) {
                try {
                    $this->pdo = new PDO($this->dsn,$this->username,$this->dbpassword);
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                }
                catch (Exception $ex) {
                    die('error : '. $ex->getmessage());
                }
            }
            return $this->pdo;
        }

        public function prepareSQL($sql,$params = null) {
            $req = $this->ConnectToDB()->prepare($sql);
            if(is_null($params)) {
                $req->execute();
            } else {
                $req->execute($params);
            }
            
            return $req;
        }
 
        public function getDatas($req,$one = true) {
            $datas = null;
            if($one == true) {
                $datas = $req->fetch();
            } else {
                $datas = $req->fetchAll();
            }
            return $datas;
        }
    }
?>
   
    