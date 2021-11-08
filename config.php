<?php

    //MYSQL
    const DBDRIVE = 'mysql';
    const DBHOST = 'localhost';
    const DBNAME = 'api';
    const DBUSER = 'php-rest';
    const DBPASS = 'password';

    $db = new PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
