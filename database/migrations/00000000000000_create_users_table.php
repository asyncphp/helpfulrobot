<?php

use Phoenix\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    protected function up()
    {
        $nullable = ["null" => true];

        $this->table("users")
            ->addColumn("email", "string")
            ->addColumn("password", "string")
            ->addColumn("token", "string", $nullable)
            ->addColumn("created_at", "datetime")
            ->addColumn("updated_at", "datetime", $nullable)
            ->addColumn("deleted_at", "datetime", $nullable)
            ->create();
    }

    protected function down()
    {
        $this->table("users")
            ->drop();
    }
}
