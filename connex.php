<?php
/**
 * Created by PhpStorm.
 * User: nuand
 * Date: 09/10/2018
 * Time: 20:24
 */
define("DSN", "mysql:host=localhost;dbname=blog");
define("USER", "root");
define("PASS", "");

$pdo = new PDO(DSN, USER, PASS);
