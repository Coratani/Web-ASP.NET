<?php

class MySQLdb
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";

    private $database_name = "ComicStore";
    private $table_name1 = "accounts";
    private $table_name2 = "conversations";
    private $table_name3 = "messages";

    private $connection = "";
    private $tableFields = "";


    function __construct()
    {
        $Control = $_POST['Control'];
        //1-CREAR
        $this->createDatabase();
        //Conectar
        $this->connectToServerDataBase();

        $this->defineTableField1();
        $this->defineTableField2();
        $this->defineTableField3();
        $this->createTables($this->table_name1);
        $this->createTables($this->table_name2);
        $this->createTables($this->table_name3);


        if ($Control === 'Create') {
            $this->insertRegister($this->database_name, $this->table_name1);
        }
        if ($Control === 'Update') {
            $this->functionUpdate1();
        }
        if ($Control === 'Delete') {
            $this->functionDelete1();
        }
        if ($Control === 'Read') {
            $this->functionRead1();
        }


    }

    private function createDatabase()
    {
        $query = "CREATE DATABASE IF NOT EXISTS $this->database_name";
        $connectionTemp = mysqli_connect($this->server, $this->username, $this->password);
        $ok = mysqli_query($connectionTemp, $query);
        if ($ok) ;// echo 'Create database Antonio Zamacona OK-------------------<br>';
        else echo 'Create Table: not OK <br>';
        mysqli_close($connectionTemp);
    }

    private function connectToServerDataBase()
    {
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database_name);
        if (mysqli_connect_errno()) die("Connect to database: not OK");
        else ;//'Connect to database OK';
    }

    private function defineTableField1()
    {
        $this->tableFields = "
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `full_name` varchar(255) NOT NULL,
        `role` enum('Guest','Operator') NOT NULL,
        `secret` varchar(255) NOT NULL DEFAULT '',
        `last_seen` datetime NOT NULL,
        `status` enum('Occupied','Waiting','Idle') NOT NULL DEFAULT 'Idle',
        PRIMARY KEY (`id`)";
    }

    private function defineTableField2()
    {
        $this->tableFields = "
         `id` int(11) NOT NULL AUTO_INCREMENT,
         `account_sender_id` int(11) NOT NULL,
         `account_receiver_id` int(11) NOT NULL,
         `submit_date` datetime NOT NULL,
          PRIMARY KEY (`id`)";
    }

    private function defineTableField3()
    {
        $this->tableFields = "
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `conversation_id` int(11) NOT NULL,
          `account_id` int(11) NOT NULL,
          `msg` varchar(255) NOT NULL,
          `submit_date` datetime NOT NULL,
          PRIMARY KEY (`id`)";
    }

    private function createTables($table_name)
    {
        $query = "CREATE TABLE if NOT EXISTS $this->database_name . $table_name($this->tableFields) ENGINE = MYISAM";
        $ok = mysqli_query($this->connection, $query);
        if ($ok) ;//echo '<br>Create Table:    Ok <br>';
        else      echo '<br>Create Table: not Ok <br>';

    }

    function insertRegister($database_name, $table_name1)
    {
        $name = $_POST['productName'];
        $type = $_POST['type'];
        $ean = $_POST['ean'];
        $retailPrice = $_POST['price'];
        $vat = $_POST['vat'];
        $comment = $_POST['comment'];
        $maintenance = $_POST['maintenance'];
        $total = $retailPrice + ($retailPrice * $vat / 100);
        $query = "INSERT INTO $database_name . $table_name1 (`Name`, `Type`, `EAN`, `RetailPrice`, `VAT`, `Comment`, `Maintenance`) VALUES('$name', '$type', '$ean', '$total', '$vat', '$comment', '$maintenance');";
        try {
            $ok = mysqli_query($this->connection, $query);
            if ($ok) {
                require_once('Search.php');
            } else {
                $_POST["Result"] = "Insert..... not Ok";
            }

        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                $_POST["Result"] = "Product already exist";
                require_once('registro.php');
            } else {
                $_POST["Result"] = "Insert..... not Ok";
            }

        }


    }

    function functionRead1()
    {
        $name = $_POST["productName"];
        $ean = $_POST["ean"];


        $query = "SELECT * FROM $this->database_name . $this->table_name1 WHERE `Name` = '$name' and `EAN` = '$ean'";
        $ok = mysqli_query($this->connection, $query);
        $numrows = mysqli_num_rows($ok);
        if ($numrows > 0) require_once('lectura.php');
        else echo "Product not found";
    }

    function functionUpdate1()
    {

        $name = $_POST['productName'];
        $ean = $_POST['ean'];
        $retailPrice = $_POST['price'];
        $comment = $_POST['comment'];
        $query = "UPDATE $this->database_name . $this->table_name1 SET `RetailPrice` = '$retailPrice',`Comment` = '$comment' WHERE `EAN` = '$ean'";
        $ok = mysqli_query($this->connection, $query);
        // $result = $conn->query($sql);
        if ($ok) require_once('Search.php');
        else echo "Update not OK";
    }

    function functionDelete1()
    {
        $name = $_POST["productName"];
        $ean = $_POST["ean"];
        $query = "DELETE FROM $this->database_name . $this->table_name1 WHERE `EAN` = '$ean' and `Name` = '$name'";
        $ok = mysqli_query($this->connection, $query);

        if ($ok) require_once('Search.php');
        else echo "Delete not OK < br>";
    }


}



