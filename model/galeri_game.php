<?php 

require_once('../controller/db.php');
require_once('genre.php');

    class GaleriGame
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

        public function create_data($data)
        {
            $query = "INSERT INTO galeri_game VALUES(DEFAULT, ?, ?, ?, ?, ?);";
            $sql = $this->db->prepare($query);
            $sql->bind_param(
                'issss',
                $data['genre'],
                $data['nama'],
                $data['tanggal'],
                $data['deskripsi'],
                $data['link']
            );
            try
            {
                $sql->execute();
            } 
            // akan ditangkap apabila error
            catch (Exception $e){
                $sql->close();
                http_response_code(500);
                die($e->getMessage());
            }
            $sql->close();
        }

        public function get_data($awal, $sort, $order, $genre)
        {
            // perhitungan data
            $awal = ($awal - 1) * 6;
            // perhitungan data
            
            if($sort != "")
            {
                $query = "SELECT * FROM galeri_game 
                JOIN genre_game
                ON galeri_game.genre_game_id = genre_game.id_genre
                WHERE galeri_game.nama LIKE '%$sort%' OR genre_game.id_genre = '$genre'
                ORDER BY galeri_game.id_galeri {$order}
                LIMIT {$awal}, 6;";
            }
            else 
            {
                $query = "SELECT * FROM galeri_game 
                JOIN genre_game
                ON galeri_game.genre_game_id = genre_game.id_genre
                ORDER BY galeri_game.id_galeri {$order}
                LIMIT {$awal}, 6;";
            }
            
            $sql = $this->db->query($query);
            $data = [];
            while($baris = $sql->fetch_assoc())
            {
                $id_gambar = $baris['id_galeri']; 
                $baris['gambar'] = file_exists("../img/{$id_gambar}.jpg") ? "img/{$id_gambar}.jpg" : "img/no-image.jpg";
                array_push($data, $baris);
            }
            header("Content-Type: application/json");
            return json_encode($data);
        }

        public function find_nama($nama)
        {
            $query = "SELECT * FROM galeri_game 
            JOIN genre_game
            ON galeri_game.genre_game_id = genre_game.id_genre
            WHERE nama = '$nama'";
            $sql = $this->db->query($query);
            $data = [];
            while($baris = $sql->fetch_assoc())
            {
                array_push($data, $baris);
            }
            return $data[0];
        }
        
        public function detail_to_update_data($id)
        {
            $query = "SELECT * FROM galeri_game 
            JOIN genre_game
            ON galeri_game.genre_game_id = genre_game.id_genre
            WHERE id_galeri = '$id'";
            $sql = $this->db->query($query);
            $data = $sql->fetch_assoc();

            // tampilkan data dalam format JSON
            header("Content-Type: application/json");
            return json_encode($data);
        }

        public function update_data($data)
        {
            var_dump($data);
            $query = "UPDATE galeri_game SET genre_game_id = ?, nama = ?, tanggal_rilis = ?, deskripsi = ?, link = ? WHERE id_galeri = ?;";
            $sql = $this->db->prepare($query);
            $sql->bind_param(
                'issssi',
                $data['genre'],
                $data['nama'],
                $data['tanggal'],
                $data['deskripsi'],
                $data['link'],
                $data['galeri_id']
            );
            try
            {
                $sql->execute();
            } 
            // akan ditangkap apabila error
            catch (Exception $e){
                $sql->close();
                http_response_code(500);
                die($e->getMessage());
            }
            $sql->close();
        }

        public function delete_data($nama)
        {
            $query = "DELETE FROM galeri_game WHERE nama = ?";
            $sql = $this->db->prepare($query);
            $sql->bind_param(
                's', 
                $nama
            );
            try
            {
                $sql->execute();
            } 
            // akan ditangkap apabila error
            catch (Exception $e){
                $sql->close();
                http_response_code(500);
                die($e->getMessage());
            }
            $sql->close();
        }
    }

?>