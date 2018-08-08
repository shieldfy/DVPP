<?php

namespace Shieldfy;

class Vulnerabilities
{
    public function init($app_key, $app_secret)
    {
        $shieldfy = \Shieldfy\Guard::init([
            'app_key'       => $app_key,
            'app_secret'    => $app_secret
        ]);
    
        $pdo = new PDO('sqlite:' . __DIR__ . '/mydatabase.db');
    
        $db = $shieldfy->attachPDO($pdo);
    
        $results = $db->query("SELECT joke FROM `users` where username = '". $_GET['username'] ."'");
        $results = $results->fetchColumn();
        echo json_encode($results);
    }
}