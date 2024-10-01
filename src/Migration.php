<?php

namespace DatabaseMigrationLibrary;

abstract class Migration {
    abstract public function up();
    abstract public function down();
}
