<?php
echo ini_get('include_dir');
include_once 'class/db_conn.php';
function db() {

    try {
        $pdo = new db;
    } catch (PDOException $e) {
        echo '<span style="color:red">'.$e->getMessage().'</span>';
    }

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
}
function markSelected($arg, $baseName){
    $pos = strpos($baseName, $arg);
    if ($pos !== false) {
    echo " class='selected'";
} 
    //if($baseName == $arg)echo " class='selected' ";

}
?>
