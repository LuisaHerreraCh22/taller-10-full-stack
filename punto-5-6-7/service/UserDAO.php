<?php
include "./connection.php"

function getAllUsers(){
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
}
//print_r(mysqli_fetch_all($query,MYSQLI_ASSOC));

function getUserByNumber($idNumber){
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE cedula = $idNumber");
}

?>