<?php
    define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'mytwibon');

    class Database {
        public function __construct()
        {
            $db = new mysqli(host, user, pass, db);
            $this->db = $db;
            if(!$db){die("koneksi ancur");}
        }
    }

    class TwibonKontroller extends Database {
        public function __construct()
        {
            $koneksi = new Database();
            $this->koneksi = $koneksi->db;
        }

        public function uploadTwibon($par)
        {
            $sql = $this->koneksi->prepare("INSERT INTO twibon(gambar_twibon) VALUES(?)");
            $sql->bind_param('s', $par);
            $sql->execute();
            return True;
        }

        public function allTwibon()
        {
            $sql = $this->koneksi->prepare("SELECT * FROM twibon");
            $sql->execute();
            $query = $sql->get_result();
            return $query;
        }

        public function uploadGambar($idtwibon)
        {
            $sql = $this->koneksi->prepare("SELECT * FROM twibon WHERE id_twibon = ?");
            $sql->bind_param('i', $idtwibon);
            $sql->execute();
            $query = $sql->get_result();
            return $query;
        }

        public function hapusTwibon($idtwibon){
            $sql = $this->koneksi->prepare("DELETE FROM twibon WHERE id_twibon = ?");
            $sql->bind_param('i', $idtwibon);
            $sql->execute();
            return True;
        }
    }
?>
