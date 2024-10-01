<?php

use DatabaseMigrationLibrary\Migration;

class AddColumnsToOrdersTable extends Migration {
    public function up() {
        echo "Adding columns to orders table...";
    }

    public function down() {
        echo "Removing columns from orders table...";
    }
}
