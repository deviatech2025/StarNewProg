<?php 
    require_once 'DataBase/ConnectToDataBase.php';
    class UserDB {
        private $db;
        public function __construct() {
            $this->db = new DataBase();
        }

        public function create($nom,$prenom,$sexe,$email,$phone,$password,$role,$photo) {
            $sql = 'insert into user set nom=?,prenom=?,sexe=?,telephone=?,email=?,password=?,role=?,photo=?';
            $params = array($nom,$prenom,$sexe,$phone,$email,$password,$role,$photo);
            return $this->db->prepareSQL($sql,$params);
        }

        public function read($id) {
            $sql= "select * from user where iduser=?";
            $params= array($id);
            $req= $this->db->prepareSQL($sql, $params);
            return $this->db->getDatas($req, true);
        }

        public function readPatient() {
            $sql = 'select * from user where role=?';
            $params = array('patient');
            $req = $this->db->prepareSQL($sql,$params);
            return $this->db->getDatas($req,false);
        }

        public function readmedecinandNaturaupate() {
            $sql = 'select * from user where role=? or role=?';
            $params = array('medecin','naturaupate');
            $req = $this->db->prepareSQL($sql,$params);
            return $this->db->getDatas($req,false);
        }
        public function readmedecin() {
            $sql = 'select * from user where role=?';
            $params = array('medecin');
            $req = $this->db->prepareSQL($sql,$params);
            return $this->db->getDatas($req,false);
        }

        public function readnatural() {
            $sql = 'select * from user where role=?';
            $params = array('naturaupate');
            $req = $this->db->prepareSQL($sql);
            return $this->db->getDatas($req,false);
        }

        public function delete($id) {
            $sql = "delete from user where iduser=?";
            $params = array($id);
            return $this->db->prepareSQL($sql,$params);
        }

        public function update($id,$nom,$prenom,$sexe,$email,$phone,$password,$role,$photo) {
            $sql = "update  user set nom=?,prenom=?,sexe=?,telephone=?,email=?,password=?,role=?,photo=? where iduser=?";
            $params = array($nom,$prenom,$sexe,$phone,$email,$password,$role,$photo,$id);
            return $this->db->prepareSQL($sql,$params);
        }

        public function connect($email,$password) {
            $sql = 'select * from user where email=? and password=?';
            $params = array($email,$password);
            $req = $this->db->prepareSQL($sql,$params);
            return $this->db->getDatas($req,true);
        }


        public function readAll() {
            $sql= "select * from user ";
            $params= null;
            $req= $this->db->prepareSQL($sql, $params);
            return $this->db->getDatas($req, false);
        }

        public function connect2($email,$password) {
            $datas = $this->readAll();
                foreach($datas as $d) {
                    if($d->EMAIL == $email && $d->PASSWORD == $password) {
                        return $d;
                    }
                }
        }
    }
?>