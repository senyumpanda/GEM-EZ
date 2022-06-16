<?php 

include_once('../controller/db.php');

    class Genre
    {
        private $db;

        public function __construct()
        {
            $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            // jika error
            if($this->db->connect_error)
            {
                http_response_code(500);
                die("Connection failed: {$db->connect_error}");
            }
        }

        function __destruct()
        {
            // tutup koneksi ke DB
            $this->db->close();
        }

        public function get_data()
        {
            $query = "SELECT * FROM genre_game";
            $sql = $this->db->query($query);
            $data = [];

            while($baris = $sql->fetch_assoc())
            {
                array_push($data, $baris);
            }

            header("Content-Type: application/json");
            return json_encode($data);
        }

        public function get_genre()
        {
            $query = "SELECT genre FROM galeri_game";
            return $query;
        }
    }

?>