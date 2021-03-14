<?php 

    class Connect{
        private $srtCon = 'mysql:host=localhost;dbname=freshgarden';
        private $user = 'root';
        private $pass = '';
        protected $pdo = null;

        // private $srtCon = 'mysql:host=localhost;dbname=PHP0320E2_nhom2';
        // private $user   = 'PHP0320E2_nhom2';
        // private $pass   = 'PHP0320E2_nhom2*';
        // protected $pdo  = null;

        function __construct(){

            try {
                $this->pdo = new PDO($this->srtCon, $this->user, $this->pass);
                $this->pdo->query("SET NAMES utf8");

            } catch (PDOException $e) {
                echo $e->getMessage();
                exit();
            }
        }
    }

?>