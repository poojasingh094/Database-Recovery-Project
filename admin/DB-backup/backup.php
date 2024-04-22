<?php
    include_once "Mysqldump.php";
    $dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=users_db', 'root', '');
    $date= date('Y-m-d');
    $ran= rand(1000,99999);
    $dump->start('DBstore/'.$date.$ran.'backup.sql');
    echo "Database backup successful.";
    