<?php

$servername = "localhost";
$username = "book-angelina";
$password = "0000";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['ID'])){
    $isbn = $_POST['ID'];
    $conn->query("SET CHARACTER SET UTF8, collation_connection=utf8_general_ci");
    $sql = "DELETE FROM `books`.`book` WHERE `book`.`ISBN` = '$isbn'";
    $conn->query($sql);
}

$conn->close();