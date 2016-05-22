<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=mysql', 'root', 'rootpw', $pdo_options);
        $create = "CREATE DATABASE IF NOT EXISTS wedding";
        $conn->exec($create);
        $conn = null;
        self::$instance = new PDO('mysql:host=127.0.0.1;port=3306;dbname=wedding', 'root', 'rootpw', $pdo_options);

        $registry = "CREATE TABLE IF NOT EXISTS contacts (
          id INT(6) AUTO_INCREMENT,
          email VARCHAR(50) NOT NULL,
          locale VARCHAR(2) NOT NULL,
          reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
          ack BOOLEAN DEFAULT FALSE,
          UNIQUE INDEX id (id ASC),
          PRIMARY KEY (id)
        ) ENGINE=INNODB";

        $guests = "CREATE TABLE IF NOT EXISTS guests (
          id INT(6) AUTO_INCREMENT PRIMARY KEY,
          contact INT(6) NOT NULL,
          name VARCHAR(30) NOT NULL,
          menu VARCHAR(1) NOT NULL,
          FOREIGN KEY (contact) REFERENCES contacts (id) ON DELETE CASCADE
        ) ENGINE=INNODB";

        self::$instance->exec($registry);
        self::$instance->exec($guests);
      }
      return self::$instance;
    }
  }
?>
