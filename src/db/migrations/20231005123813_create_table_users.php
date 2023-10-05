<?php

use Phinx\Migration\AbstractMigration;

class CreateTableUsers extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
            ->addColumn('user_id', 'integer')
            ->addColumn('login', 'string')
            ->addColumn('email', 'string')
            ->addColumn('phone', 'integer')
            ->addColumn('token', 'string')
            ->create();
    }
}
