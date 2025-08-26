<?php

    class SuivieDB {
        private $db;
        private $tablename;
        private $tableid;

        public function __construct() {
            $this->db= new DataBase();
            $this->tablename= 'suivie';
            $this->tableid= 'idsuivie';
        }

        public function create($idconsultation, $observation, $recommandations,
        $nature_rdv, $date_rdv) {
            $sql= "insert into $this->tablename set idconsultation=?, observation=?, recommandations=?, nature_rdv=?, date_rdv=?";
            $params= array($idconsultation, $observation, $recommandations, $nature_rdv, $date_rdv);
            $this->db->prepare($sql, $params);
        }

        public function update($id, $idconsultation, $observation, $recommandations,
        $nature_rdv, $date_rdv) {
            $sql= "update $this->tablename set idconsultation=?, observation=?, recommandations=?, nature_rdv=?, date_rdv=? where $this->tableid=?";
            $params= array($idconsultation, $observation, $recommandations,
            $nature_rdv, $date_rdv, $id);
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

        public function readAll() {
            $sql= "select * from $this->tablename order by $this->tableid desc";
            $params= null;
            $req= $this->db->prepare($sql, $params);
            return $this->db->getDatas($req, false);
        }
    }

?>