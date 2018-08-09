<?php

namespace Shieldfy;

class DVPP
{
    public function sqli()
    {
        $db = new PDO('sqlite:' . __DIR__ . '/mydatabase.db');
        $results = $db->query("SELECT joke FROM `users` where username = '". $_GET['username'] ."'");
        $results = $results->fetchColumn();
        return json_encode($results);
    }
}