<?php
include_once 'inc/db.inc.php';
class db extends PDO {
    public function __construct() {
        parent::__construct('mysql:host='.HOST.';dbname'.DATABASE, USER, PASS);
    }
}

?>
