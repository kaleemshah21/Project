<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateMonsterTable extends AbstractMigration
{

    public function change(): void
    {
        $table = $this->table('monster', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'integer', ['null' => false, 'identity' => true])
              ->addColumn('name', 'string', ['limit' => 20, 'null' => false])
              ->addColumn('image', 'binary', ['null' => false])
              ->addColumn('audio', 'binary', ['null' => false])
              ->create();
    }
}
