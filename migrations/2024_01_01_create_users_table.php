<?php

use DatabaseMigrationLibrary\Migration;

class CreateUsersTable extends Migration {
    private $db;

    public function __construct() {
        // PDO ile veritabanı bağlantısı
        $dsn = 'mysql:host=localhost;dbname=your_database_name';
        $username = 'your_username';
        $password = 'your_password';
        $this->db = new PDO($dsn, $username, $password);
    }

    public function up() {
        // Users tablosunu oluştur
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );
        ";

        $this->db->exec($sql);
        echo "Users tablosu başarıyla oluşturuldu.\n";
    }

    public function down() {
        // Users tablosunu sil
        $sql = "DROP TABLE IF EXISTS users;";

        $this->db->exec($sql);
        echo "Users tablosu başarıyla silindi.\n";
    }
}
