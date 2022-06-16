<?php 

require_once('../controller/db.php');
require_once('../model/akun.php');
require_once('../model/galeri_game.php');
require_once('../model/genre.php');

    class Game
    {
        public $akun;
        public $galeri_game;
        public $genre;

        public function __construct()
        {
            $this->akun = new Akun();
            $this->galeri_game = new GaleriGame();
            $this->genre = new Genre();
        }

        public function create($data)
        {
            $this->galeri_game->create_data($data);
        }

        public function read($awal, $sort, $order, $genre)
        {
            echo $this->galeri_game->get_data($awal, $sort, $order, $genre);
        }

        public function detail_to_update($id)
        {
            echo $this->galeri_game->detail_to_update_data($id);
        }

        public function update($data)
        {
            $this->galeri_game->update_data($data);
        }

        public function delete($nama)
        {   
            $this->galeri_game->delete_data($nama);
        }

        public function get_genre()
        {
            echo $this->genre->get_data();
        }

        public function pagination($page)
        {
            
        }

    }

$game = new Game();

if(isset($_GET["akses"]))
{
    switch($_GET["akses"])
    {
        case"create":
            $game->create($_POST);
            break;
        case"read":
            $game->read(isset($_GET["awal"]) ? $_GET["awal"] : 1,(isset($_GET["s"]) ? $_GET["s"] : ""), (isset($_GET["o"]) ? $_GET["o"] : "asc"), (isset($_GET["g"]) ? $_GET["g"] : ""));
            break;
        case"detail":
            $game->detail_to_update($_GET["data"]);
            break;
        case"update":
            $game->update($_POST);
            break;
        case"delete":
            $game->delete($_GET["ket"]);
            header("Location: ../src");
            break;
        case"genre_akses":
            $game->get_genre();
            break;
        case"page":
            $game->pagination($_GET["page"]);
            break;
        default:
            break;
    } 
}


?>