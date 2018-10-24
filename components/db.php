<?php


/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */


/**

 * Description of db

 *

 * @author acer

 */


class Db {

    public static function getConnection() {

         $paramsPath = ROOT.'/config/db_params.php';

         $params = include($paramsPath);

        
 $dsn = "mysql:host={$params['host']
    };

        dbname={$params['dbname']};
        charset={$params['charset']}";

        $db = new PDO($dsn, $params['user'], $params['password']);

        
        return $db;

    }

}
