<?php

namespace DatabaseMigrationLibrary;

class MigrationRunner {
    public function runMigration($migrationFile) {
        require_once $migrationFile;
        $migration = new $migrationFile();
        $migration->up();
    }

    public function rollbackMigration($migrationFile) {
        require_once $migrationFile;
        $migration = new $migrationFile();
        $migration->down();
    }
}
