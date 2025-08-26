<?php
 require_once 'DataBase/ConnectToDataBase.php';
    class PlanningDB {
        private $db;
        private $tablename;
        private $tableid;

        public function __construct() {
            $this->db= new DataBase();
            $this->tablename= 'planning';
            $this->tableid= 'IDPLANNING';
        }

        public function create( $IDUSER,$JOUR, $HEURE_DEBUT, $HEURE_FIN) {
            $sql= "insert into $this->tablename  IDUSER=? ,JOUR=?, HEURE_DEBUT=?, HEURE_FIN=?";
            $params= array($IDUSER, $JOUR, $HEURE_DEBUT, $HEURE_FIN);
            $this->db->prepare($sql, $params);
        }

        public function upDATE($idplanning,$JOUR,$HEURE_DEBUT,$HEURE_FIN) {
            $sql= "upDATE $this->tablename set  JOUR=?, Heure_Debut=?, Heure_Fin=? where $this->tableid=?";
            $params= array($JOUR ,$HEURE_DEBUT,$HEURE_FIN,$idplanning);
            $this->db->prepare($sql, $params);
        }

        public function delete($id) {
            $sql= "delete from $this->tablename where $this->tableid=?";
            $params= array($id);
            $this->db->prepare($sql, $params);
        }

        public function read($id) {
            $sql= "select * from $this->tablename where $this->tableid=?";
            $params= array($id);
            $req= $this->db->prepare($sql, $params);
            return $this->db->getDatas($req, true);
        }

        public function readAll($IDUSER) {
            $sql= "select * from $this->tablename where $IDUSER=? order by $this->tableid  desc";
            $params= array($IDUSER);
            $req= $this->db->prepareSQL($sql, $params);
            return $this->db->getDatas($req, false);
        }
    }

?>