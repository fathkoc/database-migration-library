<?php

use PHPUnit\Framework\TestCase;
use DatabaseMigrationLibrary\MigrationRunner;

class MigrationTest extends TestCase {
    public function testMigrationUp() {
        $runner = new MigrationRunner();
        $runner->runMigration('migrations/2024_01_01_create_users_table.php');
        $this->expectOutputString('Creating users table...');
    }

    public function testMigrationDown() {
        $runner = new MigrationRunner();
        $runner->rollbackMigration('migrations/2024_01_01_create_users_table.php');
        $this->expectOutputString('Dropping users table...');
    }
}
