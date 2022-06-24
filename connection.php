<?php
// local sql
$host   = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'webinar';

$con    = mysqli_connect($host, $user, $pass, $db) or die("ERROR" . mysqli_connect_error());

// cloud sql
// $host   = getenv('MYSQL_HOST');
// $user   = getenv('MYSQL_USER');
// $pass   = getenv('MYSQL_PASS');
// $db     = getenv('MYSQL_DB');



// class connection
// {
//     private $host;
//     private $db;
//     private $user;
//     private $pass;

//     public function __construct()
//     {
//         $this->host =  getenv('MYSQL_HOST');
//         $this->db =  getenv('MYSQL_DB');
//         $this->user =  getenv('MYSQL_USER');
//         $this->pass =  getenv('MYSQL_PASS');
//     }

//     public function connect()
//     {
//         try {
//             $con = new PDO($this->host . '; db=' . $this->db, $this->user, $this->pass);
//             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             return $con;
//         } catch (PDOException $e) {
//             echo 'DB ERROR ' . $e->getMessage();
//         }
//     }
// }
