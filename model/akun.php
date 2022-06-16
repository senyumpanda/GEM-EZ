<?php 

include_once('../controller/db.php');

    class Akun 
    {   
        public function regis()
        {

        }

        public function login()
        {

        }

        public function akun_admin()
        {
            $query = "SELECT * FROM akun WHERE keterangan = 'Admin'";
            return $query;
        }

        public function akun_customer()
        {
            $query = "SELECT * FROM akun WHERE keterangan = 'Customer'";
            return $query;
        }

    }

?>