<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "mydb");

// Open a new connection to the MySQL server

$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
