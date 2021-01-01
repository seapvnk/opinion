<?php

class Database
{
    public static function getConnection()
    {
        $envPath = ROOT_PATH . '/env.ini';
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if ($conn->connect_error) {
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function query($sql)
    {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public static function execute($sql)
    {
        $conn = self::getConnection();
        if (!mysqli_query($conn, $sql)) {
            throw new Exception(mysqli_error($conn));
        }
        
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }
}