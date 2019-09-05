<?php

function conn() {
   // $cnx = mysqli_connect("localhost", "id9920261_mariana12kerne", "27052003MA", "id9920261_mundocountry");
    $cnx = mysqli_connect("localhost", "root", "", "mundocountry");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}
?>