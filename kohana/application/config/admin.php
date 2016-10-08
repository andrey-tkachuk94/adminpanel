<?php
return array(
    'auth' => array(
        array('id' => 1, 'username' => 'antkachuk94', 'password' => 'SAsYsbukk2h16'),
    ),
    'modules' => array('news'),
    'auto_logout_time_miliseconds' => 600000, // 10 minutes
    'access_log_model' => 'Giodo',
    'salt' => 'SALT',
);

// to create password, use:
// crypt('password', $salt);