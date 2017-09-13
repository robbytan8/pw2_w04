<?php

function createMySQLConnection() {
    $link = mysqli_connect("host", "username", "password", "dbname", "port") or die(mysqli_connect_error());
    mysqli_autocommit($link, FALSE);
    return $link;
}
