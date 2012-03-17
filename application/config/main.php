<?php
    return array(
        'defaultController' => 'SiteController',
        'defaultAction' => 'actionIndex',
        'errorController' => 'SiteController',
        'errorAction' => 'actionError',
        'dbConnect' => 'mysql:host=localhost;dbname=courses',
        'dbUser' => 'root',
        'dbPassword' => '',
        'coursePerGroup' => 1,
        'adminLogin' => 'admin',
        'adminPassword' => '12345'
    );
?>