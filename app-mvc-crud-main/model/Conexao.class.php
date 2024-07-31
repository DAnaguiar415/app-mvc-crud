<?php

class Conexao {
    private static $instance;

    public static function get_instance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=localhost;dbname=primeirocrud", 
                    "root", 
                    "1234", 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
        return self::$instance;
    }
}