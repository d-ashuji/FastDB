<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // Config your local server
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'dbname');
    define('CHARSET', 'utf8');
    define('TIMEZONE', 'Asia/Kolkata');
} else {
    // Config your live server details
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'dbname');
    define('CHARSET', 'utf8');
    define('TIMEZONE', 'Asia/Kolkata');
}
