<?php

/**
 * MySQL/MariaDB datu-base baten konexioa kudeatzen du PDO erabiliz.
 */
class DB {
    private ?PDO $konexioa = null;
    private string $host;
    private string $db;
    private string $user;

    /**
     * Eraikitzailea.
     */
    public function __construct()
    {
        $this->host = "localhost";
        $this->db   = "praktika_indibiduala";
        $this->user = "root";
    }

    /**
     * Konexioa ireki eta gorde atributu moduan.
     */
    public function konektatu(): PDO
    {
        // DSN-a: motorra, zerbitzaria, datu-basea eta karaktere-jokoa.
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";

        $aukerak = [
            // Erroreak salbuespen (exception) moduan jaurti.
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            // Emaitzak array asoziatibo moduan itzuli lehenetsita.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // Zerbitzariko prepared statement errealak erabili.
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->konexioa = new PDO($dsn, $this->user);
        } catch (PDOException $e) {
            // Errore bat egon bada, bukatu aplikazioa.
            printf("Konexio errorea: %s\n", $e->getMessage());
            die();
        }

        return $this->konexioa;
    }

    /**
     * Bueltatu konexio atributua.
     */
    public function getKonexioa(): PDO
    {
        return $this->konexioa;
    }
}